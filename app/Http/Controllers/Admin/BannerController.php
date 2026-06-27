<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Models\Admin\Banner;
use App\Models\Admin\BannerImage;
use App\Models\Admin\BannerLocation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/banners/';

    private $data;

    function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'locations' => [],
            'rsn' => 'banner',  // route singular name
            'rpn' => 'banners',  // route plural name
        ];
    }

    public function index()
    {
        $this->data['locations'] = BannerLocation::all();
        $this->data['rows'] = Banner::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['locations'] = BannerLocation::all();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $request->validate(
            [
                'title' => 'required|unique:banners',
                'banner_location_id' => 'required|exists:banner_locations,id',
                'display' => 'required|in:static,slider',
                'image_url.*' => [
                    'required',
                    'max:2000',
                ],
            ],
            [
                'title.required' => 'The banner title is required.',
                'title.unique' => 'A banner with this title already exists.',
                'banner_location_id.required' => 'Please select a banner location.',
                'banner_location_id.exists' => 'The selected banner location does not exist.',
                'display.required' => 'Please choose whether the banner is static or a slider.',
                'display.in' => 'Invalid display type selected. Choose either static or slider.',
                'image_url.*.required' => 'At least one banner image is required.',
                'image_url.*.max' => 'Each image URL should not exceed 255 characters.',
            ]
        );

        DB::beginTransaction();
        try {
            // Create banner
            $banner = Banner::create([
                'title' => $request->title,
                'banner_location_id' => $request->banner_location_id,
                'description' => $request->description,
                'display' => $request->display,
                'sort_by' => $request->sort_by,
                'is_active' => $request->is_active,
            ]);

            // Store images
            if ($request->hasFile('image_url')) {
                $bannerImages = collect($request->file('image_url'))->map(function ($image, $index) use ($request, $banner) {
                    // Save the image
                    $imagePath = $image->store('banners', 'public');  // Store in `storage/app/public/banners/`

                    return [
                        'banner_id' => $banner->id,
                        'image_alt' => $request->image_alt[$index] ?? null,
                        'image_link' => $request->image_link[$index] ?? '#',
                        'image_url' => $imagePath,  // Store image path in DB
                        'image_sort_by' => $request->image_sort_by[$index] ?? 0,
                        'image_is_active' => $request->image_is_active[$index] ?? true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                })->toArray();

                BannerImage::insert($bannerImages);  // Bulk insert for better performance
            }

            DB::commit();
            return back()->with([
                'message' => 'Saved successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'An error occurred while saving the record.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner, $id)
    {
        if (!$this->data['row'] = Banner::with('images')->find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['locations'] = BannerLocation::all();
        $this->data['rows'] = Banner::latest()->withTrashed()->get();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner, $id)
    {
        $request->validate(
            [
                'title' => 'required|unique:banners,title,' . $id,
                'banner_location_id' => 'required|exists:banner_locations,id',
                'display' => 'required|in:static,slider',
                'image_url.*' => [
                    'required',
                    'max:2000',
                ],
            ],
            [
                'title.required' => 'The banner title is required.',
                'title.unique' => 'A banner with this title already exists.',
                'banner_location_id.required' => 'Please select a banner location.',
                'banner_location_id.exists' => 'The selected banner location does not exist.',
                'display.required' => 'Please choose whether the banner is static or a slider.',
                'display.in' => 'Invalid display type selected. Choose either static or slider.',
                'image_url.*.required' => 'At least one banner image is required.',
                'image_url.*.max' => 'Each image URL should not exceed 255 characters.',
            ]
        );

        DB::beginTransaction();
        try {
            // Create banner
            Banner::where('id', $id)->update([
                'title' => $request->title,
                'banner_location_id' => $request->banner_location_id,
                'description' => $request->description,
                'display' => $request->display,
                'sort_by' => $request->sort_by,
                'is_active' => $request->is_active,
            ]);

            $deleted_ids = explode(',', $request->deleted_banner);

            foreach ($deleted_ids as $deleted_id) {
                $re = BannerImage::find($deleted_id);
                if ($re) {
                    if ($re->image_url && Storage::disk('public')->exists($re->image_url)) {
                        Storage::disk('public')->delete($re->image_url);
                    }

                    $re->forceDelete();
                }
            }
            if (isset($request->ids) && sizeof($request->ids)) {
                for ($x = 0; $x < sizeof($request->ids); $x++) {
                    $xr = BannerImage::where('id', $request->ids[$x])->get();
                    $data = [
                        'banner_id' => $id,
                        'image_alt' => $request->image_alt[$x] ?? '',
                        'image_link' => $request->image_link[$x] ?? '#',
                        'image_sort_by' => $request->image_sort_by[$x] ?? 0
                    ];

                    if (isset($request->image_url[$x])) {
                        $data['image_url'] = $request->image_url[$x]->store($this->data['rpn'], 'public');
                    } else {
                        $data['image_url'] = $request->old_image[$x] ?? '';
                    }

                    if (!$xr->isEmpty()) {
                        BannerImage::where('id', $request->ids[$x])->update($data);
                    } else {
                        if (isset($request->image_url[$x])) {
                            // $imagePath = $request->image_url[$x]->store($this->data['rpn'], 'public');
                            // $data['image_url'] = $imagePath ?? '';
                            BannerImage::insert($data);
                        }
                    }
                }
            }
            DB::commit();
            return back()->with([
                'message' => 'Saved successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'An error occurred while saving the record.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        DB::beginTransaction();
        try {
            Banner::findOrFail($id)->delete();
            DB::commit();
            return back()->with([
                'message' => 'Record has been deleted successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'An error occurred while deleting the record.',
                'alert-type' => 'error'
            ]);
        }
    }

    public function restore($id)
    {
        DB::beginTransaction();
        try {
            Banner::withTrashed()->findOrFail($id)->restore();
            DB::commit();
            return back()->with([
                'message' => 'Record has been restored successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'Unable to restore record: ' . $e->getMessage(),
                'alert-type' => 'error'
            ]);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            Banner::withTrashed()->findOrFail($id)->forceDelete();
            DB::commit();
            return back()->with([
                'message' => 'Record deleted successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'Unable to delete record: ' . $e->getMessage(),
                'alert-type' => 'error'
            ]);
        }
    }
}

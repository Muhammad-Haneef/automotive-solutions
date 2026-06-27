<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssociatedFaqRequest;
use App\Http\Requests\Admin\UpdateAssociatedFaqRequest;
use App\Models\Admin\AssociatedFaq;

class AssociatedFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/associated-faqs/';

    private $data;

    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'rsn' => 'associated-faq',  // route singular name
            'rpn' => 'associated-faqs',  // route plural name
        ];
    }

    public function index()
    {
        $this->data['rows'] = AssociatedFaq::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'list', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssociatedFaqRequest $request)
    {
        AssociatedFaq::create($request->only((new AssociatedFaq())->getFillable()));
        if ($request->ajax()) {
            $associatedFaqs = getAssociatedFaqs($request->associated_type, $request->associated_id);
            return response()->json([
                'success' => true,
                'message' => 'Saved successfully.',
                'data' => $associatedFaqs
            ]);
        }

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AssociatedFaq $associatedFaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssociatedFaq $associatedFaq, $id)
    {
        if (!$this->data['row'] = AssociatedFaq::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssociatedFaqRequest $request, AssociatedFaq $associatedFaq, $id)
    {
        AssociatedFaq::where('id', $id)->update($request->only((new AssociatedFaq())->getFillable()));
        return redirect()->route('admin.' . $this->data['rpn'])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    public function trash($id)
    {
        DB::beginTransaction();
        try {
            AssociatedFaq::findOrFail($id)->delete();
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
            AssociatedFaq::withTrashed()->findOrFail($id)->restore();
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            AssociatedFaq::withTrashed()->findOrFail($id)->forceDelete();
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

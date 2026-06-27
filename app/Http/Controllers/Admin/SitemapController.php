<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSitemapRequest;
use App\Http\Requests\Admin\UpdateSitemapRequest;
use App\Models\Admin\Blog;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Sitemap;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SitemapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/';

    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => '',  // route singular name
        'rpn' => '',  // route plural name
    ];

    public function generate()
    {
        try {
            $products = Product::where('is_active', 1)->get();
            $pages = Page::where('is_active', 1)->get();
            $blogs = Blog::where('is_active', 1)->get();

            // Build URLs array
            $urls = [];

            // Homepage
            $urls[] = [
                'loc' => url('/'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '1.0',
                'type' => 'homepage'
            ];

            // Products
            foreach ($products as $product) {
                $urls[] = [
                    'loc' => url('/product/' . $product->slug),
                    'lastmod' => $product->updated_at->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8',
                    'type' => 'product'
                ];
            }

            // Pages
            foreach ($pages as $page) {
                $urls[] = [
                    'loc' => url('/page/' . $page->slug),
                    'lastmod' => $page->updated_at->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.7',
                    'type' => 'page'
                ];
            }

            // Blogs
            foreach ($blogs as $blog) {
                $urls[] = [
                    'loc' => url('/blog/' . $blog->slug),
                    'lastmod' => $blog->updated_at->toAtomString(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                    'type' => 'blog'
                ];
            }

            // Store in session
            session()->put('sitemap_urls', $urls);

            return view('admin.sitemap.preview', ['urls' => $urls]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Error: ' . $e->getMessage(),
                'alert-type' => 'error'
            ]);
        }
    }

    public function download()
    {
        try {
            $urls = session()->get('sitemap_urls');

            if (empty($urls)) {
                return redirect()->back()->with([
                    'message' => 'No sitemap data found. Generate first!',
                    'alert-type' => 'error'
                ]);
            }

            $editedUrls = request()->input('urls', []);

            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

            foreach ($editedUrls as $url) {
                $xml .= "  <url>\n";
                $xml .= '    <loc>' . htmlspecialchars($url['loc']) . "</loc>\n";
                $xml .= '    <lastmod>' . $url['lastmod'] . "</lastmod>\n";
                $xml .= '    <changefreq>' . $url['changefreq'] . "</changefreq>\n";
                $xml .= '    <priority>' . $url['priority'] . "</priority>\n";
                $xml .= "  </url>\n";
            }

            $xml .= '</urlset>';

            // Save to public folder
            Storage::disk('public')->put('sitemap.xml', $xml);

            session()->forget('sitemap_urls');

            // Download
            return response()->download(
                storage_path('app/public/sitemap.xml'),
                'sitemap.xml',
                [
                    'Content-Type' => 'application/xml',
                ]
            );
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Error: ' . $e->getMessage(),
                'alert-type' => 'error'
            ]);
        }
    }

    /*
     * public function download()
     * {
     *     try {
     *         $urls = session()->get('sitemap_urls');
     *
     *         if (empty($urls)) {
     *             return redirect()->back()->with([
     *                 'message' => 'No sitemap data found. Generate first!',
     *                 'alert-type' => 'error'
     *             ]);
     *         }
     *
     *         // Get edited URLs from form
     *         $editedUrls = request()->input('urls', []);
     *
     *         // Build XML
     *         $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
     *         $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
     *
     *         foreach ($editedUrls as $url) {
     *             $xml .= "  <url>\n";
     *             $xml .= '    <loc>' . htmlspecialchars($url['loc']) . "</loc>\n";
     *             $xml .= '    <lastmod>' . $url['lastmod'] . "</lastmod>\n";
     *             $xml .= '    <changefreq>' . $url['changefreq'] . "</changefreq>\n";
     *             $xml .= '    <priority>' . $url['priority'] . "</priority>\n";
     *             $xml .= "  </url>\n";
     *         }
     *
     *         $xml .= '</urlset>';
     *
     *         // Save to public folder
     *         Storage::disk('public')->put('sitemap.xml', $xml);
     *
     *         // Clear session
     *         session()->forget('sitemap_urls');
     *
     *         return response()
     *             ->streamDownload(function () use ($xml) {
     *                 echo $xml;
     *             }, 'sitemap.xml', [
     *                 'Content-Type' => 'application/xml',
     *             ])
     *             ->header('Content-Disposition', 'attachment; filename="sitemap.xml"');
     *     } catch (\Exception $e) {
     *         return redirect()->back()->with([
     *             'message' => 'Error: ' . $e->getMessage(),
     *             'alert-type' => 'error'
     *         ]);
     *     }
     * }
     */
    public function index()
    {
        $this->data['rows'] = Sitemap::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSitemapRequest $request)
    {
        Sitemap::create($request->only((new Sitemap())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sitemap $sitemap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sitemap $sitemap, $id)
    {
        if (!$this->data['row'] = Sitemap::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSitemapRequest $request, Sitemap $sitemap, $id)
    {
        Sitemap::where('id', $id)->update($request->only((new Sitemap())->getFillable()));
        return redirect()->route('admin.' . $this->data['rpn'])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        DB::beginTransaction();
        try {
            Sitemap::findOrFail($id)->delete();
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
            Sitemap::withTrashed()->findOrFail($id)->restore();
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
            Sitemap::withTrashed()->findOrFail($id)->forceDelete();
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

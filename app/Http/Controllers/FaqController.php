<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin\FaqCategory;

class FaqController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::with('faqs')->get();

        $records = $categories
            ->filter(function ($category) {
                return $category->faqs->isNotEmpty();
            })
            ->map(function ($category) {
                return [
                    'id' => $category->id,
                    'title' => $category->title,
                    'faqs' => $category->faqs->map(function ($faq) {
                        return [
                            'id' => $faq->id,
                            'q' => $faq->q,
                            'a' => $faq->a,
                        ];
                    })->toArray(),
                ];
            });

        return view('faqs', compact('records'));
    }
}

<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'title'=>'required|unique:,title,'.$this->route('id'),
            'parent_id' => 'required',
            'title' => 'required|unique:categories',
            'slug' => 'required|unique:categories',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:4096',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,ico,svg|max:1024',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ];
    }
}

<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends BaseFormRequest
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
            'blog_category_id' => 'required|exists:blog_categories,id',
            //           'blog_category_id.0' => 'required', // Ensures at least one category is selected
            //            'blog_category_id.*' => 'exists:blog_categories,id', // Ensures each ID exists in the database
            'title' => 'required|unique:blogs,title,' . $this->route('id'),
            'slug' => 'required|unique:blogs,slug,' . $this->route('id'),
            'content' => 'required',
            // 'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'blog_category_id.required' => 'Please select a category.',
            'blog_category_id.exists' => 'The selected category is invalid.',
        ];
    }
}

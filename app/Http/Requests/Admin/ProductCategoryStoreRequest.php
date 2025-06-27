<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryStoreRequest extends FormRequest
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
        return   [
                'name' => ['required','min:3', 'max:255','unique:product_category,name'],
                'slug' => ['required','min:3', 'max:255'],
                'status' => 'required',
            ];
    }

    public function messages(): array
    {
        return  [
                'name.required'=> 'Bạn chưa nhập tên của mình',
                'name.unique'=> 'Tên đã tồn tại',
                'name.min' => 'Tên phải ít nhất 3 ký tự',
                'name.max' => 'Tên nhiều nhất 255 ký tự',
                'slug.required'=> 'Bạn chưa nhập tên của mình',
                'slug.min' => 'Tên phải ít nhất 3 ký tự',
                'slug.max' => 'Tên nhiều nhất 255 ký tự',
                'status.required'=> 'Vui lòng chọn trạng thái',
        ];
    }
}

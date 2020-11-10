<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|unique:categories',
            'description'=>'required',
        ];
    }
     public function messages()
    {
        return [
            
            'name.required'=>'Tên danh mục không được để trống',
            'name.unique'=>'Tên danh mục đã tồn tại',
            'description.required'=>'Bạn chưa mô tả danh mục',
        ];
    }
}

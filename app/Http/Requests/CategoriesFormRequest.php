<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CategoriesFormRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
            ],
            'slug' => [
                'required',
                'string',
            ],
            'description' => [
                'required', 
            ],
            'image' => [
                'nullable',
                'nimes:jpg,jpeg,png',  
            ],
        
            'meta_description' => [
                'required', 
                'string',
            ],
            'meta_tittle' => [
                'required',
                'string', 
            ],
            
        ];
    }
}

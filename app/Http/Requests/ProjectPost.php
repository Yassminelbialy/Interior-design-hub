<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectPost extends FormRequest
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

        // "title" => "iti90"
        // "hint" => "dc"
        // "category_id" => "1"
        // "description" => "dsv"
        // "mainimage"
        return [
            'title' => 'required|max:100',
            "hint" => 'required|max:255',
            "category_id" => 'required|numeric',
            "description" => 'required|max:1000',
            "mainimage"=>'required|image',
        ];
    }
}

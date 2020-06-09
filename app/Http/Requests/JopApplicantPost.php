<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class JopApplicantPost extends FormRequest
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
            'fullName' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:jop_applicants',
            'phone' => 'regex:/^01[0-2][0-9]{8}$/i',
            'age'=>'        ',
            'urlprotofolio'=>'url',
            "file" => "required|mimes:pdf|max:10000"

        ];
    }
}

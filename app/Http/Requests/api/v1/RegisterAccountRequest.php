<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAccountRequest extends FormRequest
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
        return 
        [
            'companyName'   => 'required|string',
            'email'         => 'required|string|email|email:rfc,dns|unique:users,email',
            'password'      => 'required|string'
        ];
    }

    public function messages()
    {
        return 
        [
            
        ];
    }
}

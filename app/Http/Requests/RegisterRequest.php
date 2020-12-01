<?php

namespace App\Http\Requests;

use App\Helpers\Output;
use http\Env\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
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
            'name'       => 'required',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function attributes()
    {
        return [
            'name'       => 'İsim',
            'email'      => 'E-Posta',
            'password'   => 'Şifre',
            'password_confirmation' => 'Şifre Tekrar',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}

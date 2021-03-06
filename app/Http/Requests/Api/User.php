<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email'    => 'required|unique:App\Models\User,email|email',
            'password' => 'required',
        ];
    }

    /**
     * Get the custom validation error message.
     *
     * @return array
     */
    public function messages(): array
    {
        $msg = parent::messages();

        $msg['email.required']    = 'No email provided.';
        $msg['email.unique']      = 'Email is already been registered.';
        $msg['email.email']       = 'Provided email is not valid.';
        $msg['password.required'] = 'No password provided.';

        return $msg;
    }
}

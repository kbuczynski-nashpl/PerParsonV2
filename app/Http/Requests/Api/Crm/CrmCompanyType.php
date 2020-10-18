<?php

namespace App\Http\Requests\Api\Crm;

use Illuminate\Foundation\Http\FormRequest;

class CrmCompanyType extends FormRequest
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
            'type' => 'required|max:50|unique:App\CrmCompanyType,type',
        ];
    }

    /**
     * Get the custom validation error messages.
     *
     * @return array
     */
    public function messages(): array
    {
        $msg = parent::messages();

        $msg['type.required'] = 'No type provided.';
        $msg['type.max']      = 'The type provided is too long.';
        $msg['type.unique']   = 'Provided type already exists.';

        return $msg;
    }
}

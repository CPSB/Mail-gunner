<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigSmtpValidator extends FormRequest
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
            'MAIL_DRIVER'       => 'required',
            'MAIL_HOST'         => 'required',
            'MAIL_PORT'         => 'required',
            'MAIL_USERNAME'     => 'required',
            'MAIL_PASSWORD'     => 'required',
            'MAIL_ENCRYPTION'   => 'required',
            'MAIL_FROM_ADDRESS' => 'required',
            'MAIL_FROM_NAME'    => 'required',
        ];
    }
}

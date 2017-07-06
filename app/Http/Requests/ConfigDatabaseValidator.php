<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigDatabaseValidator extends FormRequest
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
            'DB_HOST'       => 'required',
            'DB_PORT'       => 'required',
            'DB_DATABASE'   => 'required',
            'DB_USERNAME'   => 'required',
            'DB_PASSWORD'   => 'required',
        ];
    }
}

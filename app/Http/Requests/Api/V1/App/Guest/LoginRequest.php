<?php


namespace App\Http\Requests\Api\V1\App\Guest;


use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'device_type' => 'required',
            'device_id' => 'required',
            'device_token' => 'required',
            'timezone' => 'required'
        ];
    }
}

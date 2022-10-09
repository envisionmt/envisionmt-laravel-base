<?php


namespace App\Http\Requests\Api\V1\App\Guest;


use App\Http\Requests\Api\ApiFormRequest;

class LoginRequest extends ApiFormRequest
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

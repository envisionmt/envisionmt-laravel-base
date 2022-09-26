<?php


namespace App\Http\Requests\Api\V1\Admin\Guest;


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
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',

        ];
    }
}

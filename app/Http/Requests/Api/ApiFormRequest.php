<?php


namespace App\Http\Requests\Api;


use App\Traits\ApiResponser;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class ApiFormRequest extends FormRequest
{
    use ApiResponser;


}

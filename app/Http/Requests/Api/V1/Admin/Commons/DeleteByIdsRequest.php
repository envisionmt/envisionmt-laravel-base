<?php


namespace App\Http\Requests\Api\V1\Admin\Commons;


use Illuminate\Foundation\Http\FormRequest;

class DeleteByIdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolean
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ids' => 'required|array',
        ];
    }
}

<?php


namespace App\Http\Requests\Api\Admin\Categories;


use App\Http\Requests\Api\ApiFormRequest;

class CategoryCreateRequest extends ApiFormRequest
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
            'title' => 'required|min:3|max:255',
            'description' => 'nullable',
            'image' => 'required|max:255',
        ];
    }
}

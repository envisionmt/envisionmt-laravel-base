<?php


namespace App\Http\Requests\Api\Admin\Posts;


use App\Http\Requests\Api\ApiFormRequest;

class PostUpdateRequest extends ApiFormRequest
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
            'categories' => 'required',
            'categories.*' => 'exists:App\Models\Category,id',
            'content' => 'required',
            'image' => 'required|max:255',
        ];
    }
}

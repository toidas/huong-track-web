<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAppRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            'name' => 'required|min:3|max:255',
            'package' => 'required|min:3|max:255|update:applications,package,' . $id,
            'version_name' => 'required|max:255',
            'rate' => 'numeric|max:100'
        ];
    }
}

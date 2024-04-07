<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarFormRequest extends FormRequest
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
            'make' => 'required',
            'model' => 'required',
            'fuelpkm' => ['required', 'integer'],
            'image' => 'nullable'
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'make' => strip_tags($this->make),
            'model' => strip_tags($this->model),
            'fuelpkm' => strip_tags($this->fuelpkm),
            'image' => strip_tags($this->image)
        ]);
    }
}

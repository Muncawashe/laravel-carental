<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules()
    {
        return [
            'make' => 'required',
            'model' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'nullable',
            'message' => 'nullable',
            'departure' => 'required',
            'dropoff' => 'required',
            'collection' => 'required',
            'destination' => 'required',
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'make' => strip_tags($this->make),
            'model' => strip_tags($this->model),
            'name' => strip_tags($this->name),
            'phone' => strip_tags($this->phone),
            'message' => strip_tags($this->message),
            'departure' => strip_tags($this->departure),
            'dropoff' => strip_tags($this->dropoff),
            'collection' => strip_tags($this->collection),
            'destination' => strip_tags($this->destination),
        ]);
    }
}

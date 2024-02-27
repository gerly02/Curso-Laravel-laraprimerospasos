<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class StoreRequest extends FormRequest

{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
    public function failedValidation(\illuminate\Contracts\Validation\Validator $validator)
    {
        dd($this -> expectsJson());
        $respose = new Response($validator -> errors(), 442);
        throw new ValidationException($validator, response());
    }
}

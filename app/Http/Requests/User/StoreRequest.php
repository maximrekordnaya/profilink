<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255|confirmed',
            'password_confirmation' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле обов\'язково до заповнення.',
            'email.email' => 'Емейл введено неправильно.',
            'email.unique' => 'Емейл вже використовується.',
            'email.max' => 'Емейл дуже довгий, я вам не вірю.',
            'password.required' => 'Поле обов\'язково до заповнення.',
            'password.string' => 'Поле має бути рядком.',
            'password.min' => 'Пароль повинен містити щонайменше 8 символів.',
            'password.confirmed' => 'Паролі не співпадають.',
            'password_confirmation.required' => 'Поле обов\'язково до заповнення.',
            'password_confirmation.string' => 'Поле має бути рядком.',


        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => $validator->errors(),
        ], 422));
    }
}

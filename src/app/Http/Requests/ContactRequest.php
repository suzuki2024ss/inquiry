<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first-name' => ['required', 'string'],
            'last-name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
            'content' => ['required', 'string', 'max:120'],
            'address' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'first-name.required' => '性を入力してください',
            'last-name.required' => '名を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'content.required' => 'お問合せ内容を入力してください',
            'content.max:255' => 'お問合せ内容は120字以内で入力してください',
            'address.required' => '住所を入力してください',

        ];
    }
}

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
            'first-name' => ['required', 'string', 'max:255'],
            'last-name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:3,4'],
            'gender' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'select' => ['required'],
            'detail' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'first-name.required' => '姓を入力してください',
            'first-name.string' => '名前を文字列で入力してください',
            'first-name.max' => '名前を255文字以下で入力してください',
            'last-name.required' => '名を入力してください',
            'last-name.string' => '名前を文字列で入力してください',
            'last-name.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号を数値で入力してください',
            'tel.digits_between' => '電話番号は5桁までの数字で入力してください',
            'gender.required' => '性別を選択してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '名前を255文字以下で入力してください',
            'building.required' => '建物名を入力してください',
            'building.string' => '建物名を文字列で入力してください',
            'building.max' => '255文字以下で入力してください',
            'select.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.string' => '文字列で入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 下記を修正
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
            // 下記を追記
            'subject' => ['required'],
            'content' => ['required'],
            // 上記までを追記
        ];
    }

    // 下記を追記
    /**
     * バリデーションエラーメッセージ
     *
     * @return array
     */
    public function messages()
    {
        return [
            'subject.required' => 'メール件名を記入してください。',
            'content.required' => 'メール本文を記入してください。',
        ];
    }
    // 上記までを追記
}

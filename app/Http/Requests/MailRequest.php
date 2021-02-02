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
            'subject' => 'required',
            'content' => 'required',
            // 下記を追記
            'file' => 'file|max:10000|mimes:jpeg,png,jpg,pdf',
        ];
    }

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
            // 下記を追記
            'file.max' => '10 MBを超えるファイルは添付できません。',
            'file.mimes' => '指定のファイル形式以外は添付できません。',
            // 上記までを追記
        ];
    }
}

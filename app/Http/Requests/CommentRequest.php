<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
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
            'post_id' => 'required|exists:posts,id',
            'comment.' . $this->post_id => 'required|max:40',
        ];
    }
    public function messages()
    {
        return [
            'comment.*.required' => 'コメントは必須です',
            'comment.*.max' => 'コメントは40文字以内にしてください',
        ];
    }
}
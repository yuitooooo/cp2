<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    private const GUEST_USER_ID = 2; 
    
    public function rules()
    {
        // ゲストユーザーログイン時は、ユーザー名とメールアドレスをバリデーションにかけない
        if(Auth::id() == self::GUEST_USER_ID) {
            return [
                'profile_image' => 'file|mimes:jpeg,png,jpg,bmb|max:2048',
                'self_introduction' => 'string|max:200|nullable',
            ];
        } else { // ゲストユーザー以外がログインしている時は、全てのユーザー情報をバリデーションにかける
            return [
                'name' => 'required|string|max:15|',
                'email' => 'required|string|email|max:255|',
                'profile_image' => 'file|mimes:jpeg,png,jpg,bmb|max:2048',
                'self_introduction' => 'string|max:200|nullable',
            ];
        }
    }
}

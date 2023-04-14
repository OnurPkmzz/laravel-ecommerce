<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $user_id = $this -> request -> get("user_id");

        return [
            "name" => "required|sometimes|min:3",
            "email" => "required|sometimes|email|unique:App\Models\User,email,$user_id",
            "password" =>"required|sometimes|string|min:5|confirmed"
        ];
    }

    public function messages(){
            return [
             "name.required" => "Bu alan zorunludur.",
             "name.min" => "Ad soyad alanı en az 3 karakter olmalıdır.",
             "email.required" => "Bu alan zorunludur",
             "email.email" => "Girdiğiniz değer e posta formatına uygun olmalıdır.",
             "email.unique" => "Girdiğiniz email sistemde zaten kayıtlı.",
             "password.required" => "Şifre alanı zorunludur.",
             "password.min" => "Şifre alanı en az 5 karakterden oluşmalıdır.",
             "password.confirmed" => "Girilen şifreler aynı değildir.",
            ];
        }

}

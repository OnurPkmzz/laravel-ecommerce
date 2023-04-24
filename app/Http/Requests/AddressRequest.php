<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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

        return [
            "address_id" => "required|numeric",
            "city" => "required|min:3",
            "district" => "required|min:3",
            "zipcode" => "required|min:3",
            "address" => "required|min:5"
        ];
    }

    public function messages(){
            return [
             "user_id.required" => "Bu alan zorunludur.",
             "user_id.numeric" => "Bu alan sayısal olmak zorundadır.",
             "city.required" => "Şehir zorunludur",
             "city.min" => "Şehir en az 3 harften oluşmalıdır",
             "district.required" => "Bu alan zorunludur.",
             "district.min" => "Bu alan en az 3 harften oluşmalıdır",
             "zipcode.required" => "Bu alan zorunludur.",
             "zipcode.min" => "Bu alan en az 3 harften oluşmalıdır",
             "address.required" => "Adres zorunludur.",
             "address.min" => "Adres en az 15 harften oluşmalıdır"
            ];
    }
}

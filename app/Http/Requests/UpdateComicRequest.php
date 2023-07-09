<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:3|max:100",
            "description" => "min:5|max:65535",
            "price" => "required|max:20",
            "sale_date" => "required|max:20",
            "series" => "min:5|max:20"
        ];
    }

    /**
     * Get the validation message.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            "title.required" => "Titolo mancante",
            "title.min" => "Titolo troppo corto, minimo :min caratteri",
            "title.max" => "Titolo troppo lungo, massimo :max caratteri",
        ];
    }
}

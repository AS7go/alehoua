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
        return true; //отправка данных для всех
//        return false; //отправка данных для авторизованных
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required|min:2|max:50',
            'message'=>'required|min:2|max:50'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Поле имя является обязательным',
            'email.required'=>'Поле почта является обязательным',
            'subject.required'=>'Поле тема является обязательным',
            'message.required'=>'Поле сообщение является обязательным'
        ];
    }
}

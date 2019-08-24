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
            'name_metting' => 'required',
            'type_metting' => 'required',
            'phone' => 'required|min:6|max:20',
            'email' => 'required|max:100|email',
            'name' => 'required|max:100',
            'date' => 'required|date',
        ];
    }

    public function messages() {
        return [
            'name_metting.required'         => __('Message.Name-metting-Required'),
            'type_metting.required'              => __('Message.Type-metting-Required'),

            'phone.min'             => __('Message.Phone-Valid'),
            'phone.max'        => __('Message.Phone-Valid'),
            'phone.required'       => __('Message.Phone-Required'),

            'email.required'        => __('Message.Mail-Required'),
            'email.max'             => __('Message.Mail-Max'),
            'email.email'           => __('Message.Mail-Valid'),

            'name.required'      => __('Message.Name-Required'),
            'name.max'             => __('Message.Name-Max'),

            'date.required'             => __('Message.Date-Required'),
        ];
    }
}

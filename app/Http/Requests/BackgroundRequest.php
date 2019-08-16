<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class BackgroundRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if($request->position == null){
            $rule_position = '';
        } else {
            $rule_position = 'unique:background,position';
        }

        return [
            'image_cover'              => 'required',
            'position'          => $rule_position,
        ];
    }
}

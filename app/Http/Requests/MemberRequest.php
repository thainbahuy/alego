<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class MemberRequest extends FormRequest
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
            $rule_position = 'unique:member,position';
        }

        return [
            'name'              => 'required|min:6|max:25',
            'role'              => 'required|min:6|max:100',
            'avatar'              => 'required',
            'position'          => $rule_position,
        ];
    }
}

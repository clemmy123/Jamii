<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [

            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'phone'=>'required|unique:members',
            'street_id'=>'required|exists:streets,id',
            'forum_id'=>'required|exists:forums,id'

        ];
    }
}
<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [

            'first_name'=>'sometimes|string|max:255',
            'last_name'=>'sometimes|string|max:255',
            'phone'=>'sometimes|string',
            'street_id'=>'sometimes|exists:streets,id',
            'forum_id'=>'sometimes|exists:forums,id'

        ];
    }
}
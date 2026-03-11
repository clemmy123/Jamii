<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
{

    public function toArray($request): array
    {

        return [

            'id'=>$this->id,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'phone'=>$this->phone,

            'forum'=>[
                'id'=>$this->forum->id ?? null,
                'name'=>$this->forum->name ?? null
            ],

            'street'=>$this->street->name ?? null

        ];
    }

}
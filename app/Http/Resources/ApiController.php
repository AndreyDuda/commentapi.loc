<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiController extends JsonResource
{
    protected $comments_rep;

    public function toArray($request)
    {
        return parent::toArray($request);
    }

}

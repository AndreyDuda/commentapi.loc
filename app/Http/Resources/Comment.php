<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Comment as CommentModel;

class Comment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            CommentModel::PROP_ID        => $this->id,
            CommentModel::TEXT           => $this->text,
            CommentModel::PROP_PARENT_ID => $this->parent_id
        ];
    }
}

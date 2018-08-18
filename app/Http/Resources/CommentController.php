<?php

namespace App\Http\Resources;

use App\Repositories\CommentsRepository;

class CommentController extends ApiController
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function __construct(CommentsRepository $comments_rep)
    {
        $this->comments_rep = $comments_rep;
    }

    public function show($id)
    {
        $comments = $this->comments_rep->getOne($id);

        return '1';
    }
}

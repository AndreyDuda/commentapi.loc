<?php
/**
 * Created by PhpStorm.
 * User: duda
 * Date: 18.08.18
 * Time: 14:14
 */

namespace App\Repositories;

use App\Comment;


class CommentsRepository extends Repository
{
    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }
}

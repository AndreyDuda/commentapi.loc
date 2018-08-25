<?php

namespace App\Http\Controllers;

use App\Repositories\CommentsRepository;
use App\Comment;

class IndexController extends SiteController
{
    public function __construct(CommentsRepository $commentsRep)
    {
        $this->commentsRep = $commentsRep;
        $this->template    = '.index';
    }

    public function index()
    {
        $select   = '*';
        $where    = Comment::PROP_PARENT_ID . ' = 0';
        $comments = $this->commentsRep->get($select, $where);
        $data     = [
            'comments' => $comments
        ];

        $content    = view('index.index')->with($data)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
}

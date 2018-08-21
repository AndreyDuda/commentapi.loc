<?php

namespace App\Http\Controllers;

use App\Repositories\CommentsRepository;


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
        $where    = 'parent_id = 0';
        $comments = $this->commentsRep->get($select, $where);
        $data     = [
            'comments' => $comments
        ];

        $content    = view('index.index')->with($data)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
}

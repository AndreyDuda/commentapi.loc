<?php

namespace App\Http\Controllers;

use App\Repositories\CommentsRepository;


class IndexController extends SiteController
{
    public function __construct(CommentsRepository $comments_rep)
    {
        $this->comments_rep = $comments_rep;
        $this->template = '.index';
    }

    public function index()
    {
        $select = '*';
        $where = 'id_parent = 0';
        $comments = $this->comments_rep->get($select, $where);
        $data = [
            'comments' => $comments
        ];
        $content = view( 'index.index')->with($data)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $comments_rep;

    protected $vars = array();
    protected $template;

    public function __construct()
    {

    }

    public function renderOutput()
    {
        return view($this->template)->with($this->vars);
    }
}

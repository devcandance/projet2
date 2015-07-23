<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request; // utiliser les methodes statique de la classe Request


abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        View::composer('front.partials.menu', function($view)
        {
            $active = 0;

            if(Request::segment(1) == 'category' && Request::segment(2))
            {
                $active = Request::segment(2);
            };

            $view->with('comments', Comment::all());
            $view->with('active', $active);
        });
    }
}
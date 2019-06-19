<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class PagesControllers extends Controller
{
    public function main()
    {
        $articles = article::all();
        return view('welcome', compact('articles'));
    }

    public function article()
    {
        $articles = article::find();
        //return view('welcome', compact('articles'));
    }
}

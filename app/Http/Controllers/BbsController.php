<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Psy\TabCompletion\Matcher\FunctionDefaultParametersMatcher;

class BbsController extends Controller
{
    public function index()
    {

        $context = ['comments' => Comment::latest()->get()];
        return view('index', $context);
    }


    public function detail(Comment $c)
    {

        return view('detail', ['com' => $c]);
    }
}

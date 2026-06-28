<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Jobs;
use App\Models\Tags;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('index', ['title' => 'Home']);
    }

    function about(){
        return view('about', ['title' => 'About']);
    }

    function contact(){
        return view('contact', ['title' => 'Contact']);
    }

}

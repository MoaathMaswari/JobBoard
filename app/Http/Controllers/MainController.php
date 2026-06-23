<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('index', ['title' => 'Home']);
    }
    function jobs(){
        return view('jobs', ['title' => 'Jobs']);
    }

    function about(){
        return view('about', ['title' => 'About']);
    }
    function contact(){
        return view('contact', ['title' => 'Contact']);
    }
}

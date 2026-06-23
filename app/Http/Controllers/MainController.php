<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('index', ['title' => 'Home']);
    }
    function about(){
        return view('about', ['title' => 'Home']);
    }
    function contact(){
        return view('contact', ['title' => 'Home']);
    }
}

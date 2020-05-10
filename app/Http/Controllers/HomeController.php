<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function standard()
    {
    	return view('standard');
    }
    public function custom()
    {
    	return view('custom');
    }
}

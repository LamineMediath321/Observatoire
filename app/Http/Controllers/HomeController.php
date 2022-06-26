<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function actualites()
    {
        return view('actualites');
    }

    public function single(int $id)
    {
        return view('single');
    }

    public function contact()
    {
        return view('contact');
    }
}

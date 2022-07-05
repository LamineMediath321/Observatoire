<?php

namespace App\Http\Controllers;

use App\Models\Donnee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $donnees = Donnee::all();
        return view('welcome', [
            'publiques' => $donnees
        ]);
    }
}

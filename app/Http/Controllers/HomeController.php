<?php

namespace App\Http\Controllers;

use App\Models\Donnee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $donnees = Donnee::with('user')
            ->where('status', 'publique')
            ->get();

        // dd($donnees);

        // $donnees = Donnee::all();
        return view('welcome', [
            'publiques' => $donnees
        ]);
    }

    public function publier(Request $request)
    {

        $request->validate([
            'lieu' => ['required'],
            'description' => 'required',
            'photo' => 'required',
        ]);

        $filename = time() . '.' . $request->photo->extension();
        $path = $request->file('photo')->storeAs(
            'photos',
            $filename,
            'public'
        );

        $donnee = new Donnee();
        $donnee->src = $path;
        $donnee->user_id = Auth::id();
        $donnee->type = 'photo';
        $donnee->titre = 'photo';
        $donnee->description = $request->description;
        $donnee->status = 'publique';
        $donnee->lieu = 'lieu';


        $donnee->save();
    }
}

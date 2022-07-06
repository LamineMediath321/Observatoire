<?php

namespace App\Http\Controllers;

use App\Models\Donnee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    public function index()
    {
        $donnees = Donnee::with('user')
            ->where('status', 'publique')
            ->orderBy('created_at', 'DESC')
            ->get();

        // $donnees = Donnee::all();

        return view('welcome', [
            'publiques' => $donnees
        ]);
    }

    /**Faire une plublication */
    public function publier(Request $request)
    {

        if (!$request->photo && !$request->video) {
            $request->validate([
                'lieu' => ['required'],
                'description' => 'required',
                'video' => 'required',
                'photo' => 'required',
            ]);
        }

        if ($request->photo) {
            $filename = time() . '.' . $request->photo->extension();
            $path = $request->file('photo')->storeAs(
                'photos',
                $filename,
                'public'
            );
            $type = 'photo';
        } elseif ($request->video) {
            $filename = time() . '.' . $request->video->extension();
            $path = $request->file('video')->storeAs(
                'videos',
                $filename,
                'public'
            );
            $type = 'video';
        }

        $donnee = new Donnee();
        $donnee->src = $path;
        $donnee->user_id = Auth::id();
        $donnee->type = $type;
        $donnee->titre = 'photo';
        $donnee->description = $request->description;
        $donnee->status = 'publique';
        $donnee->lieu = $request->lieu;


        $donnee->save();

        return Redirect::route('app_home');
    }


    /**Stocker dans son espace propre */
    public function stocker(Request $request)
    {

        if (!$request->photo && !$request->video) {
            $request->validate([
                'lieu' => 'required',
                'description' => 'required',
                'video' => 'required',
                'photo' => 'required',
            ]);
        }

        if ($request->photo) {
            $filename = time() . '.' . $request->photo->extension();
            $path = $request->file('photo')->storeAs(
                'photos',
                $filename,
                'public'
            );
            $type = 'photo';
        } elseif ($request->video) {
            $filename = time() . '.' . $request->video->extension();
            $path = $request->file('video')->storeAs(
                'videos',
                $filename,
                'public'
            );
            $type = 'video';
        }

        $donnee = new Donnee();
        $donnee->src = $path;
        $donnee->user_id = Auth::id();
        $donnee->type = $type;
        $donnee->titre = $request->titre;
        $donnee->description = $request->description;
        $donnee->status = 'stock';
        $donnee->lieu = $request->lieu;


        $donnee->save();

        return Redirect::route('dashboard');
    }


    /**Le dashboard de l'utilisateur avec ses donnees perso */
    public function dashboard()
    {
        $photos = Donnee::with('user')
            ->where('user_id', Auth::id())
            ->where('type', 'photo')
            ->where('status', 'stock')
            ->orderBy('created_at', 'DESC')
            ->get();


        $videos = Donnee::with('user')
            ->where('user_id', Auth::id())
            ->where('type', 'video')
            ->where('status', 'stock')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('dashboard', [
            'photos' => $photos,
            'videos' => $videos
        ]);
    }

    public function delete($id)
    {
        Donnee::where('id', $id)
            ->delete();

        return Redirect::route('dashboard');
    }
}

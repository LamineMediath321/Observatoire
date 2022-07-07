<?php

namespace App\Http\Controllers;

use App\Models\Donnee;
use App\Models\Partager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
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

    /**Faire une publication sur les donnees stocker */
    public function publier_by(Donnee $donnee)
    {
        $donnee->status = 'publique';
        $donnee->save();

        return Redirect::route('app_home');
    }


    /**Stocker dans son espace propre */
    public function stocker(Request $request)
    {

        if (!$request->photo && !$request->video && !$request->documents) {
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
        } else {
            $filename = time() . '.' . $request->documents->extension();
            $path = $request->file('documents')->storeAs(
                'documents',
                $filename,
                'public'
            );
            $type = 'document';
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

        $documents = Donnee::with('user')
            ->where('user_id', Auth::id())
            ->where('type', 'document')
            ->where('status', 'stock')
            ->orderBy('created_at', 'DESC')
            ->get();


        return view('dashboard', [
            'photos' => $photos,
            'videos' => $videos,
            'documents' => $documents,
        ]);
    }

    public function delete($id)
    {
        Donnee::where('id', $id)
            ->delete();

        return Redirect::route('dashboard');
    }

    public function partagePage()
    {

        $photos = Donnee::leftJoin('partagers', 'donnees.id', '=', 'partagers.donnee_id')
            ->where('partagers.beneficiaire_id', Auth::id())
            ->where('type', 'photo')
            ->orderBy('partagers.created_at', 'DESC')
            ->get();


        $videos = Donnee::leftJoin('partagers', 'donnees.id', '=', 'partagers.donnee_id')
            ->where('partagers.beneficiaire_id', Auth::id())
            ->where('type', 'video')
            ->orderBy('partagers.created_at', 'DESC')
            ->get();

        $documents = Donnee::leftJoin('partagers', 'donnees.id', '=', 'partagers.donnee_id')
            ->where('partagers.beneficiaire_id', Auth::id())
            ->where('type', 'documents')
            ->orderBy('partagers.created_at', 'DESC')
            ->get();

        return view('layouts/partage', [
            'photos' => $photos,
            'videos' => $videos,
            'documents' => $documents
        ]);
    }

    public function partager(Request $request)
    {
        $request->validate([
            'beneficiaire' => 'required',
        ]);

        $user = User::where('email', $request->beneficiaire)
            ->first();

        if (!$user) {
            return Redirect::route('dashboard');
        }

        $partager = Partager::create([
            'proprio_id' => Auth::id(),
            'beneficiaire_id' => $user->id,
            'donnee_id' => $request->donnee
        ]);

        $partager->save();
        return Redirect::route('dashboard');
    }
}

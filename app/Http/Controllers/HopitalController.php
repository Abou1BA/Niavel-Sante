<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\Hopital;

class HopitalController extends Controller
{
    public function index()
    {
        $hopitals = Hopital::all();
        return view('sidebar-left', ['hopitals' => $hopitals]);
    }

    public function create()
    {
        return view('sidebar-left');
    }

    public function store(Request $request)
    {
        // dd($request);

        $messages = [
            'required' => 'Le champ est requis.',
            'date' => 'Le champ doit être une date valide.',
            'email' => 'Le champ doit être une adresse email valide.',
            'confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'min' => 'Le mot de passe doit avoir au moins :min caractères.',
        ];

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required',
            'num_tel' => 'required',
            'email' => 'unique:users|email',
            'nom_hopital' => 'required',
            'adresse_hopital' => 'required',
            'num_tel_hopital' => 'required',
            'infos' => 'nullable',
            'num_identi' => 'required',
            'services_medicaux' => 'nullable',
            'infos_professionnel' => 'nullable',
            'type_hopi' => 'required',
            'password' => 'required|min:8|confirmed',
        ], $messages);

        $user = new User([	
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'date_naissance' => $request->input('date_naissance'),
            'lieu_naissance' => $request->input('lieu_naissance'),
            'num_tel' => $request->input('num_tel'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $user->save();

        $hopital = new Hopital([
            'nom_hopital' => $request->input('nom_hopital'),
            'adresse_hopital' => $request->input('adresse_hopital'),
            'num_tel_hopital' => $request->input( 'num_tel_hopital'),
            'infos' => $request->input( 'infos'),
            'num_identi' => $request->input( 'num_identi'),
            'services_medicaux' => $request->input(  'services_medicaux'),
            'infos_professionnel'=> $request->input( 'infos_professionnel'),
            'type_hopi' => $request->input(   'type_hopi'),
            'user_id' => $user->id
        ]);

        $hopital->save();

        // Connecte l'utilisateur après son inscription
        Auth::login($user);

        // Redirige l'utilisateur vers la page de destination après l'inscription
        return redirect()->route('dashboard_hopital')->with('success', 'Inscription réussie et connecté!');
        

    }



    function dashboard_hopital() {

        // Récupère les informations du medecin connecté (peut varier selon votre logique)
        $user = auth()->user();
        $hopital = auth()->user()->hopital;

        // Redirige vers la vue index du dossier medecin avec les informations du medecin
        return view('hopital.index', compact('user','hopital'));
   
      
  }
}


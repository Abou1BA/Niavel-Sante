<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\Medecin;

class MedecinController extends Controller
{
    public function index()
    {
        $medecins = Medecin::all();
        return view('Medecin', ['medecins' => $medecins]);
    }

    public function create()
    {
        return view('Medecin');
    }

    public function store(Request $request)
    {

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
            'numero_identification' => 'nullable',
            'specialite' => 'nullable',
            'informations_etablissement' => 'nullable',
            'horaires' => 'nullable',
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

        $medecin = new Medecin([
            'numero_identification' => $request->input('numero_identification'),
            'specialite' => $request->input('specialite'),
            'informations_etablissement' => $request->input('informations_etablissement'),
            'horaires' => $request->input('horaires'),
            'user_id' => $user->id
        ]);

        $medecin->save();

        // Connecte l'utilisateur après son inscription
        Auth::login($user);

        // Redirige l'utilisateur vers la page de destination après l'inscription
        return redirect()->route('dashboard_medecin')->with('success', 'Inscription réussie et connecté!');
        

    }



    function dashboard_medecin() {

        // Récupère les informations du medecin connecté (peut varier selon votre logique)
        $user = auth()->user();
        $medecin = auth()->user()->medecin;

        // Redirige vers la vue index du dossier medecin avec les informations du medecin
        return view('Medecin.index', compact('user','medecin'));
   
      
  }
}


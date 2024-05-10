<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('sidebar-right', ['patients' => $patients]);
    }

    public function create()
    {
        return view('sidebar-right');
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
            'num_securite_sociale' => 'nullable',
            'informations_medecin' => 'nullable',
            'antecedents_medicaux' => 'nullable',
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

        $patient = new Patient([
            'num_securite_sociale' => $request->input('num_securite_sociale'),
            'informations_medecin' => $request->input('informations_medecin'),
            'antecedents_medicaux' => $request->input('antecedents_medicaux'),
            'user_id' => $user->id
        ]);

        $patient->save();

        // Connecte l'utilisateur après son inscription
        Auth::login($user);

        // Redirige l'utilisateur vers la page de destination après l'inscription
        return redirect()->route('dashboard_patient')->with('success', 'Inscription réussie et connecté!');
        

    }

    
    function dashboard_patient() {

         // Récupère les informations du patient connecté (peut varier selon votre logique)
         $user = auth()->user();
         $patient = auth()->user()->patient;

         // Redirige vers la vue index du dossier patient avec les informations du patient
         return view('patient.index', compact('user','patient'));
    
        
    }

    function suivi() {

          // Récupère les informations du patient connecté (peut varier selon votre logique)
          $user = auth()->user();
          $patient = auth()->user()->patient;
 
          // Redirige vers la vue index du dossier patient avec les informations du patient
          return view('patient.suivi', compact('user','patient'));
     
        
    }
  
}

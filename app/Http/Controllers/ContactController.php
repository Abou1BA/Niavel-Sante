<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        // Code pour la page de contact si nécessaire
    }

    public function sendMessage(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'userName' => 'required|string',
            'userEmail' => 'required|email',
            'userPhone' => 'required|string',
            'userMessage' => 'required|string',
        ], [
            'required' => 'Le champ :attribute est requis.',
            'email' => 'Le champ :attribute doit être une adresse email valide.',
        ]);

        // Création d'une nouvelle instance de Contact avec les données validées
        $contact = new Contact();
        $contact->userName = $request->input('userName');
        $contact->userEmail = $request->input('userEmail');
        $contact->userPhone = $request->input('userPhone');
        $contact->userMessage = $request->input('userMessage');

        // Sauvegarde du contact dans la base de données
        $contact->save();

        // Redirection vers la page de destination avec un message de succès
        return redirect()->route('dashboard_message')->with('success', 'Message envoyé!');
    }
    public function dashboard_message()
    {
        // Récupération de tous les messages de contact
        $contacts = Contact::all();

        // Retour de la vue 'dashboard_message' avec les données des messages
        return view('dashboard_message', compact('contacts'));
    }
}

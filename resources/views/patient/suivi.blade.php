@extends('layouts.app_admin')

@section('content')


    <div class="container">
        <h2>Suivi Médical</h2>                
        <form>
            <div class="form-group">
                <label>Nom </label>
                <input type="text" class="form-control">
            </div>
            <div class="top-margin">
                <label>Prénom</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de naissance:</label>
                <input type="date" id="date_naissance" name="date_naissance" required>
            </div>
            <div class="form-group">
                <label for="sexe">Sexe:</label>
                <select id="sexe" name="sexe">
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Féminin</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="groupe_sanguin">Groupe Sanguin:</label>
                <select id="groupe_sanguin" name="groupe_sanguin">
                    <option value=""></option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-group">
                <label for="taille">Taille (en cm):</label>
                <input type="number" id="taille" name="taille" min="0" step="1">
            </div>
            <div class="form-group">
                <label for="poids">Poids (en kg):</label>
                <input type="number" id="poids" name="poids" min="0" step="0.1">
            </div>
            <div class="form-group">
                <label for="allergies">Allergies:</label>
                <textarea id="allergies" name="allergies"></textarea>
            </div>
            <div class="form-group">
                <label for="antecedents">Antécédents médicaux:</label>
                <textarea id="antecedents" name="antecedents"></textarea>
            </div>
            <div class="form-group">
                <label for="medicaments">Médicaments pris régulièrement:</label>
                <textarea id="medicaments" name="medicaments"></textarea>
            </div>
            <div class="form-group">
                <label for="derniere_visite">Date de la dernière visite médicale:</label>
                <input type="date" id="derniere_visite" name="derniere_visite">
            </div>
            <div class="form-group">
                <label for="prochaine_visite">Date de la prochaine visite médicale:</label>
                <input type="date" id="prochaine_visite" name="prochaine_visite">
            </div>
            <div class="form-group">
                <label for="commentaires">Commentaires:</label>
                <textarea id="commentaires" name="commentaires"></textarea>
            </div>
            <input type="submit" value="Enregistrer">
        </form>
    </div>
    



    @endsection

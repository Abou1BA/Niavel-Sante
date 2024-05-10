<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Patient;

class PatientControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register()
    {
        $userData = [
            'nom' => 'John',
            'prenom' => 'Doe',
            'date_naissance' => '1990-01-01',
            'lieu_naissance' => 'Paris',
            'num_tel' => '123456789',
            'email' => 'john@example.com',
            'num_securite_sociale' => '123456789',
            'informations_medecin' => 'Dr. Smith',
            'antecedents_medicaux' => 'None',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->post(route('post_inscription_patient'), $userData);

        $response->assertRedirect(route('dashboard_patient'))
                 ->assertSessionHas('success', 'Inscription réussie et connecté!');

        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);

        $this->assertDatabaseHas('patients', [
            'num_securite_sociale' => '123456789',
        ]);
    }

    public function test_validation_fails_with_invalid_data()
    {
        $userData = [
            'name' => '', // Nom vide
            'email' => 'invalid_email', // Adresse e-mail invalide
            'password' => 'short', // Mot de passe trop court
            'password_confirmation' => 'not_matching', // Confirmation de mot de passe ne correspondant pas
        ];
        

        $response = $this->post(route('post_inscription_patient'), $userData);

        $response->assertSessionHasErrors();
    }

    public function test_user_cannot_register_with_duplicate_email()
    {
        $existingUser = User::factory()->create(['email' => 'john@example.com']);
    
        $userData = [
            'nom' => 'John',
            'prenom' => 'Doe',
            'date_naissance' => '1990-01-01',
            'lieu_naissance' => 'Paris',
            'num_tel' => '123456789',
            'email' => 'john@example.com', // Email déjà utilisé
            'num_securite_sociale' => '123456789',
            'informations_medecin' => 'Dr. Smith',
            'antecedents_medicaux' => 'None',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];
    
        $response = $this->post('/post_inscription_patient', $userData);
    
        $response->assertSessionHasErrors('email');
    }

    public function test_already_authenticated_user_redirected_to_dashboard_from_registration()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    
        $response = $this->get('/sidebar-right');
    
        $response->assertRedirect('/dashboard_patient');
    }
    public function test_user_auto_login_after_registration()
    {
        $userData = [
            // Données valides pour l'inscription
        ];

        $response = $this->post(route('post_inscription_patient'), $userData);

        $this->assertAuthenticated();
    }
}

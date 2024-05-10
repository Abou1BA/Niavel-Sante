<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Medecin;

class MedecinControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_medecin_can_register()
    {
        // Crée un utilisateur fictif avec la factory User
        $user = User::factory()->create();

        // Données d'inscription pour un médecin
        $medecinData = [
            'nom' => 'John',
            'prenom' => 'Doe',
            'date_naissance' => '1990-01-01',
            'lieu_naissance' => 'Paris',
            'num_tel' => '123456789',
            'email' => 'john@example.com',
            'numero_identification' => '123456789',
            'specialite' => 'Cardiologue',
            'informations_etablissement' => 'Clinique XYZ',
            'horaires' => '9h - 17h',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        // Envoi de la requête d'inscription du médecin
        $response = $this->post('/post_inscription_medecin', $medecinData);

        // Assertions
        $response->assertRedirect('/dashboard_medecin')
                 ->assertSessionHas('success', 'Inscription réussie et connecté!');

        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);

        $this->assertDatabaseHas('medecins', [
            'numero_identification' => '123456789',
        ]);
    }

    public function test_dashboard_medecin()
    {
        // Crée un utilisateur fictif avec la factory User
        $user = User::factory()->create();

        // Crée un médecin fictif avec la factory Medecin associé à l'utilisateur créé
        $medecin = Medecin::factory()->create(['user_id' => $user->id]);

        // Connecte l'utilisateur fictif
        $this->actingAs($user);

        // Envoie une requête à la route du tableau de bord du médecin
        $response = $this->get('/dashboard_medecin');

        // Assertions sur la réponse
        $response->assertViewIs('Medecin.index')
                 ->assertViewHas('user', $user)
                 ->assertViewHas('medecin', $medecin);
    }

    
}

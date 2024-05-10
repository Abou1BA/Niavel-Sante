<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Hopital;

class HopitalControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_hopital_can_register()
    {
        // Crée un utilisateur fictif avec la factory User
        $user = User::factory()->create();

        // Données d'inscription pour un hôpital
        $hopitalData = [
            'nom' => 'Jane',
            'prenom' => 'Doe',
            'date_naissance' => '1990-01-01',
            'lieu_naissance' => 'Paris',
            'num_tel' => '123456789',
            'email' => 'jane@example.com',
            'nom_hopital' => 'Hopital ABC',
            'adresse_hopital' => '123 rue de l\'hôpital',
            'num_tel_hopital' => '987654321',
            'infos' => 'Infos sur l\'hôpital',
            'num_identi' => '123ABC',
            'services_medicaux' => 'Cardiologie, Pédiatrie',
            'infos_professionnel' => 'Infos professionnelles',
            'type_hopi' => 'Public',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        // Envoi de la requête d'inscription de l'hôpital
        $response = $this->post('/register/hopital', $hopitalData);

        // Assertions
        $response->assertRedirect('/dashboard_hopital')
                 ->assertSessionHas('success', 'Inscription réussie et connecté!');

        $this->assertDatabaseHas('users', [
            'email' => 'jane@example.com',
        ]);

        $this->assertDatabaseHas('hopitals', [
            'nom_hopital' => 'Hopital ABC',
        ]);
    }

    public function test_dashboard_hopital()
    {
        // Crée un utilisateur fictif avec la factory User
        $user = User::factory()->create();

        // Crée un hôpital fictif avec la factory Hopital associé à l'utilisateur créé
        $hopital = Hopital::factory()->create(['user_id' => $user->id]);

        // Connecte l'utilisateur fictif
        $this->actingAs($user);

        // Envoie une requête à la route du tableau de bord de l'hôpital
        $response = $this->get('/dashboard_hopital');

        // Assertions sur la réponse
        $response->assertViewIs('hopital.index')
                 ->assertViewHas('user', $user)
                 ->assertViewHas('hopital', $hopital);
    }

    
}

<?php
use App\Models\Medecin;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedecinFactory extends Factory
{
    /**
     * Le modèle associé à la factory.
     *
     * @var string
     */
    protected $model = Medecin::class;

    /**
     * Définition du modèle par défaut.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero_identification' => $this->faker->randomNumber(),
            'specialite' => $this->faker->word(),
            'informations_etablissement' => $this->faker->sentence(),
            'horaires' => $this->faker->time(),
            // Vous pouvez ajouter d'autres attributs ici
        ];
    }
}

<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;



class PatientSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nom' => 'Eponou',
            'prenom' => 'Felicia',
            'date_naissance' => '1990-01-01',
            'lieu_naissance' => 'Abidjan',
            'num_tel' => '012345679',
            'email' => 'email@example.com',
            'password' => Hash::make('password'),
        ]);

        Patient::create([
            'num_securite_sociale' => '85657475474',
            'informations_medecin' => 'hfxhgfxydfcjgfcjkgvkgvku',
            'antecedents_medicaux' => 'trdutfcutfcufcgccg',
            'user_id' => 1,
        ]);
    }
}

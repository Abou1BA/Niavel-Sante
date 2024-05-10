<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $fillable = ['numero_identification', 'specialite', 'informations_etablissement','horaires','user_id'];

    
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

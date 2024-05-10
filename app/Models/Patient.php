<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['num_securite_sociale', 'informations_medecin', 'antecedents_medicaux', 'user_id'];


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

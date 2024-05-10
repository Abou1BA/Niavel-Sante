<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
    protected $fillable = ['nom_hopital', 'adresse_hopital', 'num_tel_hopital','infos','num_identi','services_medicaux','infos_professionnel','type_hopi','user_id'];

    
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

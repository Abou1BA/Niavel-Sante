<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Attributs remplissables
    protected $fillable = ['title', 'description', 'image'];

    /**
     * Crée un nouveau post.
     *
     * @param array $data Les données du post (title, description, image).
     * @return Post Le post créé.
     */
    public static function createPost(array $data)
    {
        return self::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image'],
        ]);
    }
}

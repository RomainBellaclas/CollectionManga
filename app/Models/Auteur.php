<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $fillable([
        'firstname', 'lastname',
    ]);

    public function mangas()
    {
        return $this->belongsToMany (Manga::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicVise extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];

    public function mangas()
    {
        return $this->hasMany (Manga::class);
    }
}
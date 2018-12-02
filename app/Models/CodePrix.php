<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodePrix extends Model
{
    protected $fillable = [
        'libellePrix', 'slug', 'prix'
    ];
    public function mangas()
    {
        return $this->hasMany (Manga::class);
    }
    public function collectionEditions()
    {
        return $this->belongTo (collectionEdition::class);
    }
}

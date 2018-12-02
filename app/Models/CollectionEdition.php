<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionEdition extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];

    public function mangas()
    {
        return $this->hasMany (Manga::class);
    }
    public function codePrixes()
    {
        return $this->hasMany (CodePrix::class);
    }

}

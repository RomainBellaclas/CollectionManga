<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $fillable ([
        'name', 'numTome', 'description',
    ]);

    public function auteurs()
    {
        return $this->belongsToMany (Auteur::class);
    }

    public function collectionEditions()
    {
        return $this->belongTo (CollectionEdition::class);
    }

    public function codePrixes()
    {
        return $this->belongTo (CodePrix::class);
    }

    public function publicVisés()
    {
        return $this->belongsToMany (PublicVise::class);
    }

}

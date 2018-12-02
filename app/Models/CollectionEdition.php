<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionEdition extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];
}

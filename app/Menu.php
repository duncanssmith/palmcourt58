<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Use this - fields that can be mass assigned
    protected $fillable = [
        'title' ,
        'reference',
        'extension',
        'description',
        'active',
    ];
}

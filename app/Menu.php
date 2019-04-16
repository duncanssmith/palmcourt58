<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    const IMAGE_PATH = "app/public/";

    // Use this - fields that can be mass assigned
    protected $fillable = [
        'title' ,
        'reference',
        'extension',
        'description',
        'active',
    ];
}

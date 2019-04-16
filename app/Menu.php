<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    const IMAGE_PATH = ('/uploads');

    // Use this - fields that can be mass assigned
    protected $fillable = [
        'title' ,
        'description',
        'active',
    ];
}

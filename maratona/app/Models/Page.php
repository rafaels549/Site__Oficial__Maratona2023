<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $casts = [
         "titulos" => "array",
         "contents" => "array"
    ];

    protected $fillable = [
        'titulos',
        'contents',
        'slug',
        'name',
        'icon'
    ];
}

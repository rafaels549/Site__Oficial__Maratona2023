<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCard extends Model
{
    use HasFactory;

    protected $fillable = [
        "page_id",
        "imagem",
        "titulo",
        "description"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

 

    protected $fillable = [
        'titulos',
        'contents',
        'slug',
        'name',
        'icon'
    ];

    protected $casts = [
        "titulos" => "array",
        "contents" => "array"
   ];

   public function cards(){
           return  $this->hasMany(PageCard::class, "page_id");
   }

   public function imagens() {
    return $this->hasMany(PageImage::class, "page_id");
   }
}

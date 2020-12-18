<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    use HasFactory;

    public function proyectos(){
        return $this->belongsToMany('App\Models\Proyecto');
    }

    public function publicaciones(){
        return $this->belongsToMany('App\Models\Publicacion');
    }

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

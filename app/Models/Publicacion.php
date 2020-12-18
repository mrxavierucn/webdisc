<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    public function academicos(){
        return $this->belongsToMany('App\Models\Academico');
    }

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

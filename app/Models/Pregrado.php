<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregrado extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electiva extends Model
{
    protected $table ='electiva';
    protected $primaryKey= 'codigo';
    public $incrementing = false;

    protected $fillable=['codigo','nombre','capacidad','estado'];
}

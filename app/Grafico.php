<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grafico extends Model
{
    //
    protected $fillable=["categoria","valor"];

    public $timestamps=false;
}

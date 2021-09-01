<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psychologue extends Model
{
    protected $table = 'psychologues';
    protected $fillable=['nom','prenom','email','genre','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    protected $table = 'secretaires';
    protected $fillable=['nom','prenom','email','genre','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

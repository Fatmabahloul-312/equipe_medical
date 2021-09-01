<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsables';
    protected $fillable=['nom','prenom','email','genre','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

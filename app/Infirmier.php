<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infirmier extends Model
{
    protected $table = 'infirmiers';
    protected $fillable=['nom','prenom','email','genre','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

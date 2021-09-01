<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masseur extends Model
{
    protected $table = 'masseurs';
    protected $fillable=['nom','prenom','email','genre','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

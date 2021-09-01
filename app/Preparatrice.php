<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparatrice extends Model
{
    protected $table = 'preparatrices';
    protected $fillable=['nom','prenom','email','genre','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

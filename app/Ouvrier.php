<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ouvrier extends Model
{
    protected $table = 'ouvriers';
    protected $fillable=['nom','prenom','email','genre','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

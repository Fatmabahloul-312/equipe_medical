<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveillant extends Model
{
    protected $table = 'surveillants';
    protected $fillable=['nom','prenom','email','genre','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

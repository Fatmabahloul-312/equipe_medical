<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sage extends Model
{
    protected $table = 'sages';
    protected $fillable=['nom','prenom','email','age','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $table = 'medecins';
    protected $fillable=['nom','prenom','email','age','operation','photo','special','telephone','detail'];
    protected $dateFormat = 'U';
    protected $connection = 'mysql';
}

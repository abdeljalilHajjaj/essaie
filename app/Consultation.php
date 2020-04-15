<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $filliable = ['id_consultation','numero_registre_nat','numero_inami'];
    protected $table = 'consultation';
    public $timestamps = true;
}

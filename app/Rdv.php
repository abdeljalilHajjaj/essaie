<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $filliable = ['id_rdv','heure_rdv','date_rdv'];
}

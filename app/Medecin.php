<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends User
{
    protected $filliable = ['numero_inami'];

    protected $timestamps = true;
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Model
{
    

    protected $fillable = [
        'numero_registre_nat','statut'
    ];  

    
    protected $table = 'patient';

    public $timestamps = false;

    public function patient(){

        return $this->morphMany(User::class,'usereable');
    }
}

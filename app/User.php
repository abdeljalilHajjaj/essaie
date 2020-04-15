<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    

    protected $fillable = [
        'nom','prenom','adresse','gsm','email','password','usereable_id','usereable_type'

    ];
    
    protected $table = 'users';
    
    public $timestamps = false;

    public function usereable(){

        return $this->morphTo();
    }
}

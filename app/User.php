<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function superadmin(){
        $SUPER = "Super Admin";
            if($this->role == $SUPER){
                return true;
            }
            else{
                return false;
        }
    }
    
    protected $fillable=['nama','email', 'password','role'];

    // public function pemesanan(){
    //     return $this->hasMany('App\Pemesanan', 'id_user');
    // }
    // public function peberbangan(){
    //     return $this->hasMany('App\DataPenerbangan', 'id_user');
    // }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
}

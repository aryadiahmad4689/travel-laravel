<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    //
    protected $fillable=['id_user','nama_maskapai','kelas','harga','bagasi_terdaftar'];
    // public function pemesanan(){
    //     return $this->hasMany('App\Pemesanan', 'id_tiket');
    // }
    // public function penerbangan(){
    //     return $this->hasMany('App\Penerbangan', 'id_tiket');
    // }
}

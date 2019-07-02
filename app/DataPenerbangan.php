<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPenerbangan extends Model
{
    //

    protected $fillable=['id_tiket','id_user','kota_asal','kota_tujuan','tanggal_terbang','tanggal_tiba','jam_berangkat','jam_tiba','terminal'];

    public function users(){
        return $this->belongsTo('App\User', 'id_user');
    }

    public function tikets(){
        return $this->belongsTo('App\tikets', 'id_tiket');
    }
     
    public function pemesanan(){
        return $this->hasMany('App\Pemesanan', 'id_penerbangan');
    }


}

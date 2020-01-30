<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    //
    protected $fillable=['nama_pelanggan','status','alamat','tanggal_lahir','alamat_prov','alamat_kota','alamat_negara','kode_pos','id_tiket','id_penerbangan','kode_booking'];

    // public function users(){
    //     return $this->belongsTo('App\User', 'id_user');
    // }

    // public function tikets(){
    //     return $this->belongsTo('App\tikets', 'id_tiket');
    // }

    // public function penerbangans(){
    //     return $this->belongsTo('App\DataPenerbangan', 'id_penerbangan');
    // }
}

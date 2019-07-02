@extends('layout.main')

@section('content')


    <div class="container">
        <div class="">
            <div class="card   m-auto p-auto" style="width: 18rem;">
                <div class="card" style="width: 18rem;">
                    <div class="card-body bg-aqua-gradient">
                    <h5 class="card-title">{{$pemesanan[0]->nama_pelanggan}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Kode Booking :{{$pemesanan[0]->kode_booking}}</h6>
                    </div>
                    <div class="col">
                  <p class="card-subtitle" style="font-size:20px;">Status:<span style="color:red">{{$pemesanan[0]->status}}</span></p>
                  <p class="card-subtitle" style="font-size:20px;">Alamat:{{$pemesanan[0]->alamat}}</p>
                  <p class="card-subtitle" style="font-size:20px;">Kota Asal:{{$pemesanan[0]->kota_asal}}</p>
                  <p class="card-subtitle" style="font-size:20px;">Kota Tujuan:{{$pemesanan[0]->kota_tujuan}}</p>
                  <p class="card-subtitle" style="font-size:20px;">Tanggal Terbang:{{$pemesanan[0]->tanggal_terbang}}</p>
                  <p class="card-subtitle" style="font-size:20px;">Tanggal Tiba:{{$pemesanan[0]->tanggal_tiba}}</p>
                  <p class="card-subtitle" style="font-size:20px;">Terminal:{{$pemesanan[0]->terminal}}</p>
                  <p class="card-subtitle" style="font-size:20px;">Nama Maskapai:{{$pemesanan[0]->nama_maskapai}}</p>
                  <p class="card-subtitle" style="font-size:20px;">Harga:Rp.{{number_format($pemesanan[0]->harga,2,",",".")}}</p>
                  <p class="card_subtitle" style="font-size:20px;">Bagasi Terdaftar:{{$pemesanan[0]->bagasi_terdaftar}}.Kg</p>
                </div>
                  </div>
              </div>
        </div>
      </div>
  
        
               
              
</div>

@endsection
@extends('layoutuser.main')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <h3>Filter</h3>
                        <div class="card p-4 mt-3" style="width: 40rem;">
                                <ul class="list-group list-group-flush">
    <form action="{{route('searchpemesanan')}}" method="GET">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Nama Maskapai</label>
                <input type="text" class="form-control" name="nama" id="inputEmail4" placeholder="Nama Maskapai">
                </div>
                <div class="form-group col-md-6">
                        <label for="inputState">Kelas</label>
                        <select id="inputState" name="kelas" class="form-control">
                               
                                <option value="Ekonomi">Ekonomi</option>
                                <option value="Bisnis">Bisnis</option>
                                <option value="Vip">Vip</option>
                        </select>
                              
                              
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Kota Asal</label>
                <input type="text" name="kotaAsal" class="form-control" id="inputAddress" placeholder="Makassar">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Kota Tujuan</label>
                <input type="text" name="kotaTujuan" class="form-control" id="inputAddress2" placeholder="Semarang">
            </div>
                <div class="form-group">
                        <label for="inputAddress">Tanggal Terbang</label>
                        <input type="date" name="tanggal" class="form-control" id="inputAddress">
            {{-- <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div> --}}
            <button type="submit" class="btn btn-primary mt-2">Filter</button>
            </form>
                                </ul>
                              </div>
                </div>
            </div>
        </div>
        <div class="col-8">
                <div class="container">
@foreach ($collections as $item)
<div class="row mt-3">
        <div class="col">
            <div class="card">
            <div class="card-body">
            <h1 class="float-left">{{$item->nama_maskapai}}</h1>
            <p class="float-right">Rp{{number_format($item->harga,2,",",".")}}</p>
            <h5 class="card-title">{{$item->kelas}}</h5>
                <div class="col col-6 m-auto p-auto">
                <div class="k float-left">
                <p class="card-text">Kota Asal</p>
                <p class="card-text">Kota Tujuan</p>
                <p class="card-text">Tanggal Terbang</p>
                </div>
            <div class="l float-right">
            <p>{{$item->kota_asal}}</p>
            <p>{{$item->kota_tujuan}}</p>
            <p>{{$item->tanggal_terbang}}</p>
            </div> 
                
            </div>
            
            </div>
            <div class="f container">
                <p class="text-right">Bagasi Terdaftar: {{$item->bagasi_terdaftar}}.Kg</p>
                </div>
                <a href="{{route('tambahpelanggan',[$item->id,$item->id_tiket])}}" class="btn btn-primary clear mt-2">Pesan</a>
            </div>
        </div>
        
    </div>
@endforeach
                          </div>
        </div>
    </div>

</div>
    @endsection
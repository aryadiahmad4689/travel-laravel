@extends('layoutuser.main')

@section('content')
<div class="container">
  <div class="row">
<div class="col col-8  bg-warning mt-3">
  <h1>Masukkan Data Diri</h1>
<form action="{{route('storepemesanan')}}" method="post">
{{ csrf_field() }}

    <div class="form-group mt-2">
      <div class="col-md-8 mb-4">
      <input type="hidden" value="{{$idtiket}}" name="idtiket">
      <input type="hidden" value="{{$id}}" name="id">


        <input type="text" class="form-control col-6" placeholder="Nama" name="nama">
      </div>
      <div class="col-md-8 mb-4">
        <textarea type="text" name="alamat" class="form-control" rows="8" placeholder="Alamat"></textarea>
      </div>
      <label for="" class="ml-4">Tanggal Lahir</label>
      <div class="col-md-8 mb-4">
        <input type="date" name="tgl" class="form-control col-6" placeholder="Tanggal Lahir">
      </div>

      <div class="col-md-8 mb-4">
          <input type="text" name="negara" class="form-control col-4" placeholder="Alamat Negara">
        </div>

        <div class="col-md-8 mb-4">
            <input type="text" name="prov" class="form-control col-4" placeholder="Alamat Provinsi">
          </div>

      <div class="col-md-8 mb-4">
        <input type="text" name="kota" class="form-control col-4" placeholder="Alamat Kota">
      </div>
     
    <div class="col-md-8 mb-4">
        <input type="text" name="pos" class="form-control col-4" placeholder="Kode Pos">
        </div>
    
     <div class="col-md-8 mb-4">
    <button type="submit" class="btn btn-success">Register</button>
    </div>
 
    </form>
  </div>
  </div>
  <div class="col col-4">
      <div class="container">
          <div class="">
              @foreach ($collections as $item)
              <div class="card bg-success mt-4" style="width: 18rem;">
                  <div class="card" style="width: 18rem;">
                  
                        
                
                      <div class="card-body">
                      <h3 class="card-title text-uppercase text-dark">{{$item->nama_maskapai}}</h3>
                      <h5 class="card-title text-center">{{$item->kelas}}</h5>
                      <div class="container">
                      <div class="row">
                      <h6 class="card-subtitle mb-2 text-muted text-left ">{{$item->kota_asal}}</h6>
                      <----->
                      <h6 class="card-subtitle mb-2 text-muted text-right">{{$item->kota_tujuan}}</h6>
                    </div>
                  </div>

                      </div>
                      <div class="container">
                      <h6 class="card-subtitle mb-2">Rp.{{number_format($item->harga,2,",",".")}}</h6>
                      <h6 class="card-subtitle mb-2 text-right">{{$item->bagasi_terdaftar}}.Kg</h6>
                    </div>
                      <div class="col pl-4">
                    {{-- <p class="pl-6" style="font-size:20px;">Rp.</p> --}}
                    <div class="container">
                      <div class="row">
                          <p class="pl-6" style="font-size:20px;">{{$item->jam_berangkat}}</p>
                          <---->
                          <p class="pl-6" style="font-size:20px;">{{$item->jam_tiba}}</p>
                      </div>
                    </div>
                     

                    {{-- <p class="float-right" style="font-size:16px;">{{$id->bagasi_terdaftar}}.Kg</p> --}}
                  </div>

                    </div>
                    @endforeach
                </div>
          </div>
        </div>
  </div>
</div>

  
</div>


@endsection
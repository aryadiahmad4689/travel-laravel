@extends('layout.main')

@section('content')
<div class="container">
<div class="row">
<div class="col col-8 m-auto p-auto bg-warning mt-4 p-2  justify-content-center">
  <h1>Tambah Data Penerbangan</h1>
<form action="{{route('storepenerbangan')}}" method="post">
{{ csrf_field() }}

    <div class="form-group mt-2">
        <div class="col-md-8 mb-4 ">
          <input type="hidden" name="idtiket" value="{{$id->id}}">
        </div>
      <div class="col-md-8 mb-4 ">
       <input type="text" class="form-control col-6" placeholder="Kota Asal" name="asal">
      </div>
      <div class="col-md-8 mb-4">

        <input type="text" class="form-control col-6" placeholder="Kota Tujuan" name="tujuan">
      </div>
      
      <label for="" class="ml-4">Tanggal Terbang</label>
      <div class="col-md-8 mb-4">
        <input type="date" name="terbang" class="form-control col-6" placeholder="terbang">
      </div>

    </div>
    <label for="" class="ml-4">Tanggal Tiba</label>
    <div class="col-md-8 mb-4">
      <input type="date" name="tiba" class="form-control col-6" placeholder="Tanggal Tiba">
    </div>

      <div class="col-md-4 mb-6 form-group">
          <label for="" class="">Jam Terbang</label>
          <input type="text" name="jamb" class="form-control col-4"placeholder="ex:10" >
        </div>

        <div class="col-md-4 mb-6 form-group">
            <label for="" class="">Jam Tiba</label>
            <input type="text" name="jamt" class="form-control col-4" placeholder="ex:20">
          </div>
          <div class="col-md-8 mb-4 form-group">
            <input type="text" name="terminal" class="form-control col-4" placeholder="Terminal" >
          </div>

    

     <div class="col-md-8 mb-4">
    <button type="submit" class="btn btn-success">Masukkan Data</button>
    </div>
 
    </form>
  </div>

  <div class="col col-4">


    <div class="container">
      <div class="">
          <div class="card bg-success mt-4" style="width: 18rem;">
              <div class="card" style="width: 18rem;">
                  <div class="card-body">
                  <h5 class="card-title">{{$id->nama_maskapai}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$id->kelas}}</h6>
                  </div>
                  <div class="col pl-4">
                <p class="pl-6" style="font-size:20px;">Rp.{{number_format($id->harga,2,",",".")}}</p>
                <p class="float-right" style="font-size:16px;">{{$id->bagasi_terdaftar}}.Kg</p>
              </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
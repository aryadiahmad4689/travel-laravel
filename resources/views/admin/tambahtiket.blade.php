@extends('layout.main')

@section('content')
<div class="col col-8 m-auto p-auto">
 
<form action="{{route('storetiket')}}" method="post">
{{ csrf_field() }}
<div class="card bg-warning mt-4">
  <div class="card-header">
      <h1>Tiket</h1>
  </div>
    <div class="card-body">
              <div class="col-md-8 mt-6 form-group">
              <input type="text" name="maskapai" class="form-control col-6" placeholder="Nama Maskapai">
            </div>
            <div class="input-group ml-3 form-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select col-5" id="inputGroupSelect01" name="kelas">
                  <option selected>Choose...</option>
                  <option value="Ekonomi">Ekonomi</option>
                  <option value="Bisnis">Bisnis</option>
                  <option value="Vip">Vip</option>
                </select>
              </div>
          
              <div class="col-md-6 mt-6 ml-1 form-group form-row align-items-center">
                  <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                  <input type="text" name="harga" class="form-control col-6" placeholder="Harga">
                  
                </div>
          
                <div class="col-md-6 mt-6  ml-1 form-group form-row align-items-center">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Kg</div>
                      </div>
                    <input type="text" name="bagasi" class="form-control col-6" placeholder="Bagasi Terdaftar">
                   
                  </div>
         

     <div class="col-md-8 mt-4">
    <button type="submit" class="btn btn-success">Masukkan Data</button>
    </div>

    </div>
</div>
 
    </form>
  </div>

@endsection


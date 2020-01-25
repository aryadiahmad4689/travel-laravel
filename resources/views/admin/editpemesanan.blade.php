@extends('layout.main')

@section('content')


<div class="container">
    
<form action="{{route('updatepemesanan',$pemesanan->id)}}" method="post">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Nama Pelanggan</label>
          <input type="email" class="form-control" readonly id="inputEmail4" value="{{$pemesanan->nama_pelanggan}}" >
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Kode Booking</label>
        <input type="text" class="form-control" readonly id="inputAddress" value="{{$pemesanan->kode_booking}}">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Status</label>
        <input type="text" class="form-control" name="status"id="inputAddress2" value="{{$pemesanan->status}}" >
        </div>
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
    @endsection
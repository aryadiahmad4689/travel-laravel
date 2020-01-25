@extends('layoutuser.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @foreach ($collection as $item)
            
      
        <div class="card mt-4 bg-info">
            <div class="card-body">
              <h2>Ini Adalah Kode Booking Anda</h2>
             <h3 class="text-danger">Simpan Baik Baik Kode Booking Ini</h3>
            <h1 class="text-danger text-center">{{$item->kode_booking}}</h1>
            
            <h3>Silahkan Lakukan Pembayaran Ke Rekening Ini</h3>
            <h2>No Rek:0838828322893289</h2>
            <a href="{{route('indexpembayaran')}}"> <h3 class="text-dark btn btn-warning justify-content-center">{{$item->status}}</h3></a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
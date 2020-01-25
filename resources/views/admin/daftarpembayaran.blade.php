@extends('layout.main')

@section('content')
<div class="container  m-auto p-auto">
    <div class="row">
        <div class="col-12">

        <table class="table mt-4 bg-black">
            <thead>
              <tr>
                <th scope="col">Email</th>
                {{-- <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th> --}}
                <th scope="col">Kode Booking</th>
                <th scope="col">Bukti Pembayaran</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
        @foreach($pembayaran as $pembayar)
         
              <tr>
                <td>{{$pembayar->email}}</td>
                <td>{{$pembayar->kode_booking}}</td>
              <td><img src="{{asset('public/image/'.$pembayar->image)}}"  width="70" height="70"></td>
            <td>  
             {{-- <a href="" class="btn btn-danger btn-sm">Hapus</a> --}}
            <a href="{{route('deletePembayaran',$pembayar->id)}}" class="btn btn-warning btn-danger">Delete</a>
           </td>
        </tr>
        @endforeach
           
           
            </tbody>
          </table>


   
        </div>
    </div>
</div>
@endsection
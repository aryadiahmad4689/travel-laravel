@extends('layout.main')

@section('content')

<div class="col-10 m-auto p-auto bg-success mt-4">

        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nama Pelanggan</th>
                    {{-- <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th> --}}
                    <th scope="col">Kode Booking</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
           @foreach ($collection as $item)
               
           
                  <tr>
                    <td>{{$item->nama_pelanggan}}</td>
                    <td>{{$item->kode_booking}}</td>
                    <td>{{$item->status}}</td>
                
                <td>  
                 <a href="" class="btn btn-danger btn-sm">Hapus</a>
                <a href="{{route('editPemesanan',$item->id)}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{route('detailpemesanan',[$item->id_tiket,$item->id_penerbangan])}}" class="btn btn-primary btn-sm">Detail</a>
               </td>
            </tr>
   
            @endforeach
               
                </tbody>
              </table>
</div>

@endsection
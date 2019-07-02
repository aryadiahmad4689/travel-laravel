@extends('layout.main')

@section('content')

<div class="col-10 m-auto p-auto bg-success mt-4">

        <table class="table mt-4">
                <thead>
                  <tr>
                    <th scope="col">Kota Asal</th>
                    {{-- <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th> --}}
                    <th scope="col">Kota Tujuan</th>
                    <th scope="col">Tanggal Terbang</th>
                    <th scope="col">Tanggal Tiba</th>
                    <th scope="col">Jam Terbang</th>
                    <th scope="col">Jam Tiba</th>
                    <th scope="col">Terminal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($penerbangans as $item)
                  <tr>
                    <td>{{$item->kota_asal}}</td>
                    <td>{{$item->kota_tujuan}}</td>
                    <td>{{$item->tanggal_terbang}}</td>
                    <td>{{$item->tanggal_tiba}}</td>
                    <td>{{$item->jam_berangkat}}</td>
                    <td>{{$item->jam_tiba}}</td>
                    <td>{{$item->terminal}}</td>
                <td>  
                 {{-- <a href="" class="btn btn-danger btn-sm">Hapus</a> --}}
                 <a href="" class="btn btn-warning btn-sm">Edit</a>
               </td>
            </tr>
            @endforeach
               
               
                </tbody>
              </table>
</div>

@endsection
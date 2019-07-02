@extends('layout.main')

@section('content')
<div class="row mt-4">
<div class="col-10 m-auto p-auto bg-success media-bod ">
    <a href="{{route('tambahtiket')}}" class="btn btn-primary form-group mt-3">Tambah Tiket</a>
        <table class="table">
                <thead>
                  <tr>
                    {{-- <th scope="col">Nama</th>
                    {{-- <th scope="col">Alamat</th> --}}
                    {{-- <th scope="col">Tanggal Lahir</th> --}}
                    <th scope="col">Nama Maskapai</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Harga </th>
                    <th scope="col">Bagasi Terdaftar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tikets as $item)
                      
                
                  <tr>
                  <td>{{$item->nama_maskapai}}</td>
                  <td>{{$item->kelas}}</td>
                  <td>Rp.{{number_format($item->harga,2,",",".")}}</td>
                  <td>{{$item->bagasi_terdaftar}}.Kg</td>
                <td>
                <form action="{{route('destroytiket',$item->id)}}"  method="POST">
                 {{ csrf_field() }}
                  <button class="btn btn-sm btn-danger">Delete</button>
                  {{ method_field('delete') }}
               </form>
                 <a href="" class="btn btn-warning btn-sm">Edit</a>
               </td>
            </tr>
            @endforeach
            
               
               
                </tbody>
              </table>
</div>

</div>

@endsection
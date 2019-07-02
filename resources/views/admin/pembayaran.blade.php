@extends('layoutuser.main')

@section('content')
<div class="container  m-auto p-auto">
    <div class="row p-3">
            <div class="card p-4 mt-3 m-auto p-auto" style="width: 40rem;">
                    <ul class="list-group list-group-flush">
<form action="{{route('searchpemesanan')}}" method="GET">
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputEmail4">Email Anda</label>
    <input type="text" class="form-control" name="nama" id="inputEmail4" placeholder="Masukan Email">
    </div>
</div>
<div class="form-group">
    <label for="inputAddress">Kode Booking</label>
    <input type="text" name="kodeBooking" class="form-control" id="inputAddress" placeholder="Masukkan Kode Booking">
</div>
<div class="form-group">
    <label for="inputAddress2">Bukti Pembayaran</label>
    <input type="file" name="bukti" class="form-control" id="inputAddress2" >
<button type="submit" class="btn btn-primary mt-2">Filter</button>
</form>
                    </ul>
                  </div>
    </div>
    </div>
</div>
@endsection
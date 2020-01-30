<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataPenerbangan;
use App\Pemesanan;
Use Carbon\Carbon;
use DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
      
        $pemesanan = DB::table('pemesanans')->where('id','=',$id)->orderBy('id','DESC')->get();
        // dd($pemesanan);
        return view('admin.indexpemesanan',['collection'=>$pemesanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $tanggal = Carbon::now();
       $date = $tanggal->toDateString();
    //    $date3 = $tanggal->addDays(-1);
       $date2 = $tanggal->addDays(29);   
        $pemesanan  = DB::table('data_penerbangans')
        ->join('tikets', 'data_penerbangans.id_tiket', '=', 'tikets.id')->select('data_penerbangans.*', 'tikets.id','tikets.kelas','tikets.harga','tikets.bagasi_terdaftar','tikets.nama_maskapai')->whereBetween('data_penerbangans.tanggal_terbang',[$date,$date2])->orderBy('data_penerbangans.id', 'desc')
        ->get();
        // dd($pemesanan);
        // dd($booking);
        return view('admin.tambahpemesanan',['collections'=>$pemesanan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
           $kode = str_random(8);
           $pemesanan = new Pemesanan;
      
           $pemesanan->id_tiket     =$request->get('idtiket');
           $pemesanan->id_penerbangan =$request->get('id');
           $pemesanan->nama_pelanggan=$request->get('nama');
           $pemesanan->alamat     =$request->get('alamat');
           $pemesanan->tanggal_lahir  =$request->get('tgl');
           $pemesanan->alamat_kota    =$request->get('kota');
           $pemesanan->alamat_prov   =$request->get('prov');
           $pemesanan->alamat_negara  =$request->get('negara');
           $pemesanan->kode_pos    =$request->get('pos');
           $pemesanan->status ='Tidak Aktif';
           $pemesanan->kode_booking =$kode;

           $pemesanan->save();
        return redirect()->route('indexpemesanan',$pemesanan->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pemesanan = Pemesanan::findOrFail($id);

        return view('admin.editpemesanan',['pemesanan'=>$pemesanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->status = $request->get('status');
        $pemesanan->save();

        return redirect()->route('datapemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function datapemesanan()
    {
       $datapemesanan = Pemesanan::orderBy('updated_at','DESC')->get();
        return view('admin.datapemesanan',['collection'=>$datapemesanan]);
    }

    public function detailpemesanan($id_tiket,$id_penerbangan)
    {
        $pemesanan  = DB::table('pemesanans')->join('tikets', 'pemesanans.id_tiket', '=', 'tikets.id')->join('data_penerbangans', 'pemesanans.id_penerbangan', '=', 'data_penerbangans.id')->where('pemesanans.id_tiket','=', $id_tiket)->where('pemesanans.id_penerbangan','=',$id_penerbangan)->select('data_penerbangans.*', 'tikets.*','pemesanans.*')->get();
        return view('admin.detailpemesanan',['pemesanan'=>$pemesanan]);
        
    }

    public function search(Request $request)
    {
        $nama = $request->get('nama');
        $kelas = $request->get('kelas');
        $kota_asal= $request->get('kotaAsal');
        $kota_tujuan = $request->get('kotaTujuan');
        $tanggal1 = $request->get('tanggal');
        $tanggal = Carbon::now();
       $date = $tanggal->toDateString();
    //    $date3 = $tanggal->addDays(-1);
       $date2 = $tanggal->addDays(29);   
        $pemesanan  = DB::table('data_penerbangans')
        ->join('tikets', 'data_penerbangans.id_tiket', '=', 'tikets.id')->select('data_penerbangans.*', 'tikets.id','tikets.kelas','tikets.harga','tikets.bagasi_terdaftar','tikets.nama_maskapai')
        ->where('tikets.nama_maskapai','LIKE',"%".$nama."%")
        ->Where('tikets.kelas','LIKE',"%".$kelas."%")
        ->Where('data_penerbangans.kota_asal','LIKE',"%".$kota_asal."%")
        ->Where('data_penerbangans.kota_tujuan','LIKE',"%".$kota_tujuan."%")
        ->Where('data_penerbangans.tanggal_terbang','LIKE',"%".$tanggal1."%")
        ->whereBetween('data_penerbangans.tanggal_terbang',[$date,$date2])
        ->get();

        // dd($pemesanan);
 
        return view('admin.searchpemesanan',['collections'=>$pemesanan]);
    }
}

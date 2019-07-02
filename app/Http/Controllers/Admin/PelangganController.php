<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\DataPenerbangan;
use App\User;
use DB;
class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan Semua Data Pelanggan
       $pelanggan = User::all();

        return view('admin.indexpelanggan', ['pelanggan'=>$pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id,$id_tiket)
    {
        //
        // $pemesanan = DataPenerbangan::findOrFail($id);
        $pemesanan  = DB::table('data_penerbangans')
        ->join('tikets', 'data_penerbangans.id_tiket', '=', 'tikets.id')->select('data_penerbangans.*', 'tikets.id','tikets.kelas','tikets.harga','tikets.bagasi_terdaftar','tikets.nama_maskapai')->where('id_tiket','=',$id_tiket)->get();
        // dd($pemesanan);
        
        return view('admin.tambahpelanggan',['collections'=>$pemesanan,'idtiket'=>$id_tiket,'id'=>$id]);
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
        // User::create([
        // 'nama'           =>$request->get('nama'),
        // 'email'          =>$request->get('email'),
        // 'password'       =>Hash::make($request->get('password')),
        // ]);
        // return redirect()->route('pemesanan');
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
        return view('admin.editpelanggan');
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
}

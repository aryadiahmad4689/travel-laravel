<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataPenerbangan;
use App\Tiket;
use Carbon\Carbon;

class DataPenerbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penerbangan = DataPenerbangan::all();
        return view('admin.indexpenerbangan',['penerbangans'=>$penerbangan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $tiket = Tiket::FindOrFail($id);
        return view('admin.tambahpenerbangan',['id'=>$tiket]);
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
     
        DataPenerbangan::create([
            'id_tiket' =>$request->get('idtiket'),
            'kota_asal' =>$request->get('asal'),
            'kota_tujuan' =>$request->get('tujuan'),
            'tanggal_terbang' =>$request->get('terbang'),
            'tanggal_tiba' =>$request->get('tiba'),
            'jam_berangkat'=>Carbon::createFromTime($request->get('jamb')),
            'jam_tiba'=>Carbon::createFromTime($request->get('jamt')),
            'terminal'=>$request->get('terminal')
        ]);


        return redirect()->route('indexpenerbangan');
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

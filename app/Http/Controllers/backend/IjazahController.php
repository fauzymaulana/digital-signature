<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Ijazah;
use Illuminate\Http\Request;

class IjazahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Ijazah',
            'navLink' => 'dataijazah',
            'dataIjazah' => Ijazah::all()
        ];

        return view('backend.pages.dataijazah.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = [
            'titlePage' => 'Tambah Data Ijazah',
            'navLink' => 'dataijazah',
        ];

        return view('backend.pages.dataijazah.create', $datas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateReq = $request->validate([
        	'nama_lengkap' => 'required',
        	'program_studi' => 'required',
        	'tahun_angkatan' => 'required',
        	'npm' => 'required',
            'ipk' => 'required',
            'digital_signature' => 'required'
        ]);

        try {
            $ijazah = new Ijazah;
            $ijazah->nama_lengkap = $validateReq['nama_lengkap'];
            $ijazah->program_studi = $validateReq['program_studi'];
            $ijazah->tahun_angkatan = $validateReq['tahun_angkatan'];
            $ijazah->npm = $validateReq['npm'];
            $ijazah->ipk = $validateReq['ipk'];
            $ijazah->digital_signature = $validateReq['digital_signature'];
            $ijazah->save();
            return redirect()->to('dataijazah')->with('success', 'Data Ijazah berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Ijazah $ijazah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
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
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        Ijazah::find($id)->delete();

        \Session::flash('sukses','Data Berhasil diHapus');
        return redirect('/barang');
    }

}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Ijazah;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Verifikasi',
            'navLink' => 'verifikasi'
        ];

        // return view('tes.index',compact([$ijaza1]));
        return view('frontend.pages.verifikasi', $datas);
    }

    public function cek(Request $request)
    {
        
        $validated = $request->validate([
            'ipk' => 'required',
            'digital_signature' => 'required|unique:ijazah,digital_signature',

        ]);

        return;
    }

   
}

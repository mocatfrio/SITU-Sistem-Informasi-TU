<?php

namespace App\Http\Controllers;
use DB;
use App\Keperluan;
use App\PermohonanSurat;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PermohonanSuratController extends Controller
{
    public function store(Request $request)
    {
    	$surat = new PermohonanSurat;

    	$surat->keperluan = Input::get('keperluan');
        $surat->status = Input::get(1);

    	$surat->save();

    	return redirect('/register');
    }
}

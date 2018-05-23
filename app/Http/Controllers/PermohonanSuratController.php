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
	public function index() {
		$user = Mahasiswa::where('id',session('key'))->value('nama');
		return view('formsurat2', compact('user'));
	}
    public function store(Request $request)
    {
    	$permohonan = new PermohonanSurat;

    	$permohonan->mhs_id = session('key');
    	$permohonan->surat_id = Input::get('keperluan');
    	$permohonan->tujuan = Input::get('tujuan');
    	$permohonan->nama_perusahaan = Input::get('nama_per');
    	$permohonan->alamat_perusahaan = Input::get('alamat_per');
    	$permohonan->status_id = Input::get('status');

    	$permohonan->save();

    	return redirect('/logged');

    }
}

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
    public function show() {
        $user = Mahasiswa::where('id',session('key'))->value('nama');

        $permohonan_surat = DB::table('permohonan_surat')->join('keperluan_surat','permohonan_surat.surat_id','=','keperluan_surat.id_surat')->join('status','permohonan_surat.status_id','=','status.id_status')
                ->where(['mhs_id'=>session('key')])->get();

        return view('lihatpermohonan', compact('user', 'permohonan_surat'));
    }
}

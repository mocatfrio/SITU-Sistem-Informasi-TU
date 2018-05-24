<?php

namespace App\Http\Controllers;
use DB;
use App\Keperluan;
use App\PermohonanSurat;
use App\Mahasiswa;
use Storage;
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

    public function showadmin() {
        $permohonan_surat = DB::table('permohonan_surat')->join('keperluan_surat','permohonan_surat.surat_id','=','keperluan_surat.id_surat')->join('status','permohonan_surat.status_id','=','status.id_status')
                ->get();

        return view('viewadmin', compact('user', 'permohonan_surat'));
    }
    public function print($id) {
        $no = PermohonanSurat::where('id_permohonan',$id)->value('id_permohonan');
        $tujuan = PermohonanSurat::where('id_permohonan',$id)->value('tujuan');
        $nama_per = PermohonanSurat::where('id_permohonan',$id)->value('nama_perusahaan');
        $alamat_per = PermohonanSurat::where('id_permohonan',$id)->value('alamat_perusahaan');
        $nama_mhs = Mahasiswa::where('id',session('key'))->value('nama');
        $nrp = Mahasiswa::where('id',session('key'))->value('nrp');


        // memanggil dan membaca template dokumen yang telah kita buat
        $document = Storage::disk('local')->get('surat magang.rtf');

        // isi dokumen dinyatakan dalam bentuk string
        $document = str_replace("#no", $no, $document);
        $document = str_replace("#tujuan", $tujuan, $document);
        $document = str_replace("#nama_per", $nama_per, $document);
        $document = str_replace("#alamat_per", $alamat_per, $document);
        $document = str_replace("#nama_mhs", $nama_mhs, $document);
        $document = str_replace("#nrp", $nrp, $document);

        $editstatus = PermohonanSurat::where('id_permohonan',$id)->first();
        $editstatus->status_id = 2;
        $editstatus->save();

        // header untuk membuka file output RTF dengan MS. Word
        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=surat magang.doc");
        header("Content-length: ".strlen($document));

        echo $document;
    }
}

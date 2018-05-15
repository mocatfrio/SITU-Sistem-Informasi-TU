<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Keperluan;
use App\Mahasiswa;

class KeperluanSuratController extends Controller
{
	public function index() {
		$user = Mahasiswa::where('id',session('key'))->value('nama');
		$keperluan_surat = Keperluan::All();
		return view('/keperluansuratt', compact('user','keperluan_surat'));
	}
}

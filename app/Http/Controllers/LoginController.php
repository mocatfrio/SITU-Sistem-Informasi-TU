<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mahasiswa;

class LoginController extends Controller
{
	public function latest()
	{
		$user = Mahasiswa::where('id',session('key'))->value('nama');
		// dd($gen);
		return view('welcome', compact('user'));
	}
}
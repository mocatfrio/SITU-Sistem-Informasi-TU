<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use DB;
use App\Http\Requests;

class MahasiswaController extends Controller
{
    public function store(Request $request)
    {
    	Mahasiswa::create($request->all());
    	return redirect('/login');
    }
    public function login(Request $request)
    {
    	$nrp = $request->input('nrp');
    	$pass = $request->input('password');
    	$check = DB::table('mahasiswa')->where(['nrp'=>$nrp,'password'=>$pass])->first();
    	if (isset($check))
    	{
    		session(['key' => $check->id]);
    		return redirect('/logged');
    	}
    	else
    	{
    		return redirect('/login');
    	}
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}

@extends('layouts.master')

@section('title')
	Mahasiswa Baru
@endsection

@section('content')
<div class="header">
    <a href="/login" class="bar">LOGIN</a>
</div>
<div class="container">
    <div class="column">
        <div class="column2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center"><strong>Daftar Mahasiswa Baru</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="mhsaction" method="post"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div>
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nama">
                            </div>
                        </div>
                        <div>
                            <label for="nrp" class="col-md-4 control-label">NRP</label>
                            <div class="col-md-6">
                                <input id="nrp" type="number" class="form-control" name="nrp">
                            </div>
                        </div>
                        <div>
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat">
                            </div>
                        </div>
                        <div>
                            <label for="ttl" class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <input id="ttl" type="date" class="form-control" name="ttl">
                            </div>
                        </div>
                        <div>
                            <label for="no_hp" class="col-md-4 control-label">Nomor HP</label>
                            <div class="col-md-6">
                                <input id="no_hp" type="number" class="form-control" name="no_hp">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div>
                            <label for="nama_ortu" class="col-md-4 control-label">Nama Ayah / Ibu</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nama_ortu">
                            </div>
                        </div>
                        <div>
                            <label for="pekerjaan_ortu" class="col-md-4 control-label">Pekerjaan Ayah / Ibu</label>
                            <div class="col-md-6">
                                <input id="pekerjaan_ortu" type="text" class="form-control" name="pekerjaan_ortu">
                            </div>
                        </div>
                        <div>
                            <label for="no_hp_ortu" class="col-md-4 control-label">Nomor HP Ayah / Ibu</label>
                            <div class="col-md-6">
                                <input id="no_hp_ortu" type="number" class="form-control" name="no_hp_ortu">
                            </div>
                        </div>
                        <div>
                            <label for="alamat_ortu" class="col-md-4 control-label">Alamat Ayah / Ibu</label>
                            <div class="col-md-6">
                                <input id="alamat_ortu" type="text" class="form-control" name="alamat_ortu">
                            </div>
                        </div>
                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
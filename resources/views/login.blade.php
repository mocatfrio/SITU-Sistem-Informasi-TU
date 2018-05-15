@extends('layouts.master')

@section('title')
	Mahasiswa Baru
@endsection

@section('content')
<div class="header">
    <a href="/register" class="bar">REGISTER</a>
</div>
<div class="container">
    <div class="column">
        <div class="column2"> 
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="login">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="nrp" class="col-md-4 control-label">NRP</label>
                            <div class="col-md-6">
                                <input id="nrp" type="number" class="form-control" name="nrp" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
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
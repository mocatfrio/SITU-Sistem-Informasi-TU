@extends('layouts.app')


@section('title')
	Keperluan Surat
@endsection

@section('content')
<div class="container">
    <div class="main-content"
        <!-- You only need this form and the form-validation.css -->
        <form class="form-validation" method="post" action="#">
            <div class="form-title-row">
                <h1>Keperluan Surat</h1>
            </div>
            <div class="form-row">
                <label>
                    <span>Pilih salah satu</span>
                    <select name="keperluan">
	                    @foreach($keperluan_surat as $k)
	                    <option value="{{$k->id_surat}}">{{$k->jenis_surat}}</option>
	                    @endforeach
                    </select>
                </label>
            </div>
            <div class="form-row" >
                <button type="next" style="cursor: pointer;">Next</button>
            </div>
        </form>
    </div>
</div>
@endsection


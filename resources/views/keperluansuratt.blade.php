@extends('layouts.app')


@section('title')
	Keperluan Surat
@endsection

@section('content')
<div class="container">
    <div class="main-content">
        <!-- You only need this form and the form-validation.css -->
        <form class="form-validation" method="post" action="permohonan">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
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
            <div class="form-row" id="demo">
                <button type="button" style="cursor: pointer;" onclick="loadDoc()">Next</button>
            </div>
        </form>
    </div>
</div>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "{{url('')}}/formsurat", true);
  xhttp.send();
}
</script>
@endsection


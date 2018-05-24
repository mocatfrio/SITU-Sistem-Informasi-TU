@extends('layouts.admin')

@section('title')
	Permohonan Surat
@endsection

@section('style')
<style>
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  }
</style>
@endsection

@section('content')
<div class="container">
    <div class="main-content">
      <table>
        <tr>
          <th>Nomor Surat</th>
          <th>Jenis Surat</th>
          <th>Status Surat</th>
          <th>Action</th>
          <th></th>
        </tr>
        @foreach($permohonan_surat as $p)
          <tr>
            <td>{{$p->id_permohonan}}</td>
            <td>{{$p->jenis_surat}}</td>
            <td>{{$p->nama_status}}</td>
            <td><a href="/print/{{$p->id_permohonan}}">Proses</a></td>
            <td></td>
          </tr>
        @endforeach
      </table>            
    </div>
</div>
@endsection


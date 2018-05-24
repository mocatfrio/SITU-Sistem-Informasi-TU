<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermohonanSurat extends Model
{
	protected $table='permohonan_surat';
	protected $primaryKey='id_permohonan';
	public $timestamps = false;
	public $incrementing = true;

	protected $fillable = ([
		'tujuan',
		'nama_per',
		'alamat_per',
		'status'
		]);

	public function Keperluan()
	{
		return $this->hasMany('App\Keperluan');
	}
	public function Mahasiswa()
	{
		return $this->belongsTo('App\Mahasiswa');
	}
    
}

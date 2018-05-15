<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermohonanSurat extends Model
{
	protected $table='permohonan_surat';
	protected $primaryKey='id';
	public $timestamp = true;
	public $incrementing = true;

	protected $fillable = ([
		'keperluan'
		]);


	public function Keperluan()
	{
		return $this->hasMany('App\Keperluan', 'keperluan_id');
	}
	public function Mahasiswa()
	{
		return $this->belongsTo('App\Mahasiswa');
	}
    
}

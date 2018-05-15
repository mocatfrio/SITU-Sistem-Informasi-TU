<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keperluan extends Model
{
    protected $table='keperluan_surat';
	protected $primaryKey='id';
	public $timestamp = true;
	public $incrementing = true;

	protected $fillable = ([
		'jenis_surat'
		]);

	public function PermohonanSurat()
	{
		return $this->belongsTo('App\PermohonanSurat');
	}
}

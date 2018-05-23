<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='Mahasiswa';
    protected $primaryKey='id';
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = ([
        'nama',
        'nrp',
        'alamat',
        'ttl',
        'no_hp',
        'email',
        'nama_ortu',
        'pekerjaan_ortu',
        'no_hp_ortu',
        'alamat_ortu',
        'password'
        ]);
    public function PermohonanSurat()
    {
        return $this->hasMany('App\PermohonanSurat');
    }
}

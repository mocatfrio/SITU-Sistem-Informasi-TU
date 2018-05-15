<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('nrp',20)->unique();
            $table->string('alamat', 150);
            $table->date('ttl');
            $table->string('no_hp', 15);
            $table->string('email');
            $table->string('nama_ortu', 50);
            $table->string('pekerjaan_ortu');
            $table->string('no_hp_ortu',15);
            $table->string('alamat_ortu', 150);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahasiswa');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableSantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tgl_masuk');
            $table->text('alamat');
            $table->string('sekolah')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('riwayat_penyakit')->nullable();
            $table->string('ukuran_kaos');
            $table->string('jenis_kelamin');
            $table->string('nik');
            $table->string('telp');
            $table->string('pondok');
            $table->year('tahun_keluar')->nullable();
            $table->tinyInteger('status');
            $table->integer('id_angkatan');
            $table->integer('id_user');
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
        Schema::dropIfExists('santri');
    }
}

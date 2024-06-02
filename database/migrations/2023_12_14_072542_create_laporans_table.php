<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            // identitas pelapor
            $table->string('nama_pelapor');
            $table->enum('gender_pelapor', ['laki-laki', 'perempuan']);
            $table->string('no_iden_pelapor');
            $table->enum('prodi_pelapor', ['TI', 'TIF', 'SI', 'PTI', 'TEKKOM']);
            $table->string('no_hp_pelapor');
            $table->string('email_pelapor');
            // identitas korban
            $table->string('nama_korban');
            $table->enum('gender_korban', ['laki-laki', 'perempuan']);
            $table->string('no_iden_korban');
            $table->enum('prodi_korban', ['TI', 'TIF', 'SI', 'PTI', 'TEKKOM']);
            $table->string('no_hp_korban');
            $table->string('email_korban');
            // deskripsi kejadian
            $table->string('perihal');
            $table->text('lokasi_kejadian');
            $table->text('deskripsi_kejadian');
            $table->text('tgl_waktu_kejadian');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('laporans');
    }
};
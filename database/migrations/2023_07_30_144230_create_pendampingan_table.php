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
        Schema::create('pendampingan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aplikasi');
            $table->string('perangkat_daerah');
            $table->string('status_aplikasi');
            $table->string('status_rekomendasi');
            $table->string('pic');
            $table->string('no_telp');
            $table->string('spesifikasi');
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
        Schema::dropIfExists('pendampingan');
    }
};

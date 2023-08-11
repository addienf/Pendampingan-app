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
        Schema::create('detail_pendampingan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pendampingan');
            $table->date('tanggal');
            $table->string('deskripsi');
            $table->string('keterangan');
            $table->string('upload_file');
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
        Schema::dropIfExists('detail_pendampingan');
    }
};

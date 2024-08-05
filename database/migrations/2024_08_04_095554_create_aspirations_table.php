<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->enum('jenis_aspirasi', [1, 2, 3]);
            $table->text('isi_aspirasi');
            $table->enum('status', [1, 2, 3]);
            $table->timestamp('tanggal')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('aspirations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('no_peminjaman', 10);
            $table->tinyInteger('book_id');
            $table->tinyInteger('pengunjung_id');
            $table->tinyInteger('pegawai_id');
            $table->tinyInteger('status');
            $table->boolean('is_deleted')->nullable()->default(false);
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('update_by')->nullable();
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
        Schema::dropIfExists('peminjaman');
    }
}

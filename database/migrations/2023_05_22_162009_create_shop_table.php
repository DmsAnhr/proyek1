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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user')->nullable();
            $table->string('kode_transaksi');
            $table->string('namaPeminjam')->nullable();
            $table->string('alamat');
            $table->integer('totalHarga');
            $table->integer('lama_sewa')->nullable();
            $table->string('payment')->nullable();
            $table->string('shipping')->nullable();
            $table->timestamp('tanggal_start')->useCurrent();
            $table->date('tanggal_finish')->nullable();
            $table->string('status')->default('proses');
            $table->integer('terlambat')->nullable();
            $table->integer('denda')->nullable();
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
        Schema::dropIfExists('transaksi');
    }
};

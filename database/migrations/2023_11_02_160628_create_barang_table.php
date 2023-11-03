<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_barang', 255);
            $table->integer('qty_barang');
            $table->string('gambar_thumbnail', 255);
            $table->uuid('kategori_barang_id');
            $table->foreign('kategori_barang_id')->references('id')->on('kategori_barang');
            $table->integer('harga_barang');
            $table->integer('diskon_barang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};

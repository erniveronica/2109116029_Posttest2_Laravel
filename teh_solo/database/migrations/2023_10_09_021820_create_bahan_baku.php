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
        Schema::create('bahan_baku', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('satuan', ['Kilogram (kg)','Gram (g)', 'Ounce (ons)','Mililiter (ml)','liter (l)','Bungkus','Kotak','Buah']);
            $table->integer('jumlah');
            $table->integer('harga');
            $table->date('tanggal_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_baku');
    }
};

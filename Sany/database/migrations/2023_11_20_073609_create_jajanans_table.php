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
        Schema::create('jajanans', function (Blueprint $table) {
            $table->id();
            $table->char('kode_jajanan',5)->unique();
            $table->string('nama_jajanan');
            $table->enum('jenis',['makanan','minuman']);
            $table->integer('modal');
            $table->date('tanggal_pembuatan');
            $table->float('harga',5,3);
            $table->boolean("ketersediaan_stok")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jajanans');
    }
};

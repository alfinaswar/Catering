<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kerjanjang_belanjas', function (Blueprint $table) {
            $table->id();
            $table->string('idUser');
            $table->string('idProduk');
            $table->integer('jumlah');
            $table->double('harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerjanjang_belanjas');
    }
};

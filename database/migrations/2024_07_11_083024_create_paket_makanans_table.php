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
        Schema::create('paket_makanans', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->nullable();
            $table->string('nama')->nullable();
            $table->string('deskripsi')->nullable();
            $table->double('harga', 10, 2);
            $table->string('idmakanan')->nullable();
            $table->string('idkue')->nullable();
            $table->string('idminuman')->nullable();
            $table->string('idbuah')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_makanans');
    }
};

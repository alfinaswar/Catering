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
        Schema::table('transaksi_details', function (Blueprint $table) {
            $table->string('idminuman')->nullable()->after('idmakanan');
            $table->string('idkue')->nullable()->after('idminuman');
            $table->string('idbuah')->nullable()->after('idkue');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_details', function (Blueprint $table) {
            $table->string('idminuman');
            $table->string('idkue');
            $table->string('idbuah');
        });
    }
};

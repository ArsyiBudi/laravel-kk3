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
        //
        Schema::table('t_kelas', function (Blueprint $table) {
            $table->string('nama_kelas', 50)->change();
            $table->string('nama_jurusan', 50)->change();
            $table->string('lokasi_tujuan', 50)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //

    }
};

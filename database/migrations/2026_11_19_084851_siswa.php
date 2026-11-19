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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
        $table->id('nis');
        $table->string('nama', 50);
        $table->string('kelas', 50);
        $table->string('jurusan', 50);
        $table->enum('Jenis_Kelamin', ['L','P']);
        $table->timestamps();
    });
    }
};

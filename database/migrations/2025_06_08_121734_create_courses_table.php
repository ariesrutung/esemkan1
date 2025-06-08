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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->string('semester');
            $table->string('judul_materi');
            $table->text('uraian_singkat');
            $table->string('nama_ketua_jurusan');
            $table->string('gambar')->nullable(); // diasumsikan gambar disimpan sebagai path/URL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

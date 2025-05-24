<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->integer('gambar')->default(0);
            $table->date('tanggal')->nullable();
            $table->time('jam')->nullable();
            $table->string('tempat')->nullable();
            $table->enum('kategori', ['pengumuman', 'berita', 'event'])->nullable(); // Diperbaiki di sini
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi');
    }
};

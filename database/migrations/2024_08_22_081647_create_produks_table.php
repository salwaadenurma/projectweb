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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama',20);
            $table->integer('stok');
            $table->integer('harga');
            $table->string('kategori');
            $table->unsignedBigInteger('kategoris_id')->nullable();
            $table->foreign('kategoris_id')->references('id')->on('kategoris')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};

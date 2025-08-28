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
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('author')->nullable();
        $table->year('year_published')->nullable();
        $table->string('isbn')->unique()->nullable();
        $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
        $table->foreignId('rack_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
        $table->string('cover_path')->nullable(); // path gambar cover
        $table->text('description')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

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
    Schema::create('book_copies', function (Blueprint $table) {
        $table->id();
        $table->foreignId('book_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        $table->string('copy_code')->unique(); // kode unik tiap eksemplar
        $table->enum('status', ['available', 'borrowed'])->default('available');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_copies');
    }
};

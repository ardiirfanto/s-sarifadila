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
        Schema::create('materi_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submateri_id')
                ->constrained('sub_materis')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_videos');
    }
};
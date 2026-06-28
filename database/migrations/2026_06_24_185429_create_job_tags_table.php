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
        Schema::dropIfExists('job_tag');
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('Jobs')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('Tags')->cascadeOnDelete();
            $table->unique(['job_id', 'tag_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
    }
};

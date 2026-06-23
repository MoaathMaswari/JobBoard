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

        Schema::drop('jobs');
        Schema::create('Jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('publisher');
            $table->string('description');
            $table->boolean('published');
            $table->timestamps();
        });
        Schema::create('Posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->boolean('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Jobs');
        Schema::dropIfExists('Posts');
    }
};

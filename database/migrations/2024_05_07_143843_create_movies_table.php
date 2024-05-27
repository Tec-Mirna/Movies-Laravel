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
        /* Creación de l atbla */
        Schema::create('movies', function (Blueprint $table) {
           

            $table->id()->autoIncrement();
            $table->string('title');
            $table->string('director');
            $table->string('image');
            $table->string('genre');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};

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
        Schema::create('item_colors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id'); // Links to the users table
            $table->foreignId('size_id');
            $table->integer('grey');
            $table->integer('yellow');
            $table->integer('blue');
            $table->integer('red');
            $table->integer('black');
            $table->integer('green');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_colors');
    }
};

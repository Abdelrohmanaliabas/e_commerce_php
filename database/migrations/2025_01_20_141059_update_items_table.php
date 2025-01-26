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
       Schema::create('items_details', function (Blueprint $table) {
       $table->id();
       $table->foreignId('item_id'); // Links to the users table
            $table->integer('num_rate');
            $table->double('rate');
            $table->string('docomntation');
            $table->string('high light');
            $table->string('details');
            
       
    });
       }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

<?php

use App\Models\User;
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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->string('zipcode');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Links to the users table



            //   'city'=>['required'],
            //   'country'=>['required'],
            //   'state'=>['required'],
            //   'zipcode'=>['required'],
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
      public function down()
      {
      Schema::dropIfExists('addresses');
      }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthday');
            $table->foreignId('bed_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->string('address');
            $table->string('phone');
            $table->string('photo')->nullable();
            $table->string('email')->unique();
            $table->enum('status',['checked-in','checked-out'])->default('checked-in');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};

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
        Schema::disableForeignKeyConstraints();

        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            $table->string('code', 12);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('avatar')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->string('gender', 6);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};

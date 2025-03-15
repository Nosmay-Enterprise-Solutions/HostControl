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

        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->string('code', 12)->unique();
            $table->string('role', 15)->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('partner_id')->nullable()->references('id')->on('partners');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};

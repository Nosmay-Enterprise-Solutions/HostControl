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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('code', 12)->unique();
            $table->enum('type', ['individual', 'corporate'])->default('individual');
            $table->string('companyname')->nullable();
            $table->string('surname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('billing_email')->unique();
            $table->string('contact', 20);
            $table->date('dob')->nullable();
            $table->date('registration_date')->nullable();
            $table->enum('id_type', ['passport', 'business_certificate', 'national_id'])->nullable();
            $table->string('id_number')->nullable();
            $table->string('id_image')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->string('status')->default('new-enquiry');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('partner_id')->nullable()->constrained('partners');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};

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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->char('document_number', 15)->unique();
            $table->char('first_name', 100);
            $table->char('last_name', 100);
            $table->char('address', 100)->nullable();
            $table->date('birth_date')->nullable();
            $table->char('phone_number', 15)->nullable();
            $table->char('email', 100)->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

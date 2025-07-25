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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('map_title');
            $table->string('payment_method'); // kbzpay / wavepay
            $table->boolean('is_paid')->default(false);
            $table->string('pdf_file')->nullable(); // storage path
            $table->timestamp('paid_at')->nullable();
            $table->string('status')->default('pending');
            $table->integer('amount')->nullable(); // Amount of the payment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

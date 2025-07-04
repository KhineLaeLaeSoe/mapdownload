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
        Schema::table('users', function (Blueprint $table) {
            //
             // Add Date of Birth
            $table->date('date_of_birth')->nullable(); // nullable() means it's optional

            // Add Gender
            $table->string('gender')->nullable(); // e.g., 'male', 'female', 'other'

            // Add Phone Number
            $table->string('phone_number')->unique()->nullable(); // unique() if each phone number must be unique, nullable() if optional

            // Add City
            $table->string('city')->nullable();

            // Add Address
            $table->text('address')->nullable(); // text for potentially longer addresses

            // Add Customer Photo
            $table->string('customer_photo')->nullable(); // Stores the path to the photo file
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            // Drop the columns in the reverse order they were added (good practice)
            $table->dropColumn([
                'date_of_birth',
                'gender',
                'phone_number',
                'city',
                'address',
                'customer_photo'
            ]);
        });
    }
};

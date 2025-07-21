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
        Schema::create('maps', function (Blueprint $table) {
            // $table->id();
            // $table->string('region'); // e.g., Yangon Region
            // $table->string('state');
            // $table->string('preview_image')->nullable();
            // $table->string('title');
            // // $table->string('image')->nullable();
            // $table->string('file_path');
            // $table->enum('type', ['free', 'paid']);
            // $table->decimal('price', 8, 2)->nullable();
            // $table->unsignedInteger('download_count')->default(0); 
            // $table->timestamps();
              $table->id();
    $table->string('title');
    $table->string('image_path'); // e.g. 'assets/images/maps/free/ahlone.jpg'
    $table->string('file_path')->nullable(); // e.g. 'storage/maps/ahlone.pdf'
    $table->integer('price')->default(0); // 0 = free
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maps');
    }
};

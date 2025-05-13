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
        Schema::create('marketplaces', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the marketplace
            $table->text('content_text'); // Marketplace description/text
            $table->foreignId('category1')->constrained('marketplace_categories'); // Category 1
            $table->foreignId('category2')->nullable()->constrained('marketplace_categories'); // Category 2 (nullable)
            $table->foreignId('category3')->nullable()->constrained('marketplace_categories'); // Category 3 (nullable)
            $table->foreignId('category4')->nullable()->constrained('marketplace_categories'); // Category 4 (nullable)
            $table->string('link')->nullable(); // External link
            $table->enum('external_link', ['ja', 'nein'])->default('nein'); // External link yes/no
            $table->enum('home', ['ja', 'nein'])->default('nein'); // Home placement yes/no
            $table->string('image')->nullable(); // Image path (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketplaces');

    }
};

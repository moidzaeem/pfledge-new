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
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->nullable();
            $table->foreignId('category1')->constrained('blog_categories'); // Category 1
            $table->foreignId('category2')->nullable()->constrained('blog_categories'); // Category 2 (nullable)
            $table->foreignId('category3')->nullable()->constrained('blog_categories'); // Category 3 (nullable)
            $table->foreignId('category4')->nullable()->constrained('blog_categories'); // Category 4 (nullable)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
};

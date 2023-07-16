<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->string('genresList')->nullable();
            $table->string('collectionList')->nullable();
            $table->string('categoryId')->nullable();
            $table->string('rating')->nullable();
            $table->string('slug')->unique();
            $table->mediumText('description')->nullable();
            $table->string('bookCover')->nullable();
            $table->string('status')->nullable();
            $table->string('isPublish')->default(Book::IS_PUBLISH['DRAFT']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

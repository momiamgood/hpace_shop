<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->text('desc')->nullable();
            $table->string('cover')->nullable();
            $table->double('price')->nullable();
            $table->foreignId('category_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
            $table->string('files');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

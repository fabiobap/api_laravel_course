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
        Schema::create('alternatives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained()->cascadeOnDelete();
            $table->uuid('resource_key');
            $table->string('title');
            $table->integer('order')->default(0);
            $table->boolean('is_correct')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['resource_key', 'question_id']);
            $table->fullText(['title']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatives');
    }
};

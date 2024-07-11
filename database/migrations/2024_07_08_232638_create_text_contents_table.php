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
        Schema::create('text_contents', function (Blueprint $table) {
            $table->id();
            $table->uuid('resource_key');
            $table->longText('content');
            $table->timestamps();
            $table->softDeletes();

            $table->index('resource_key');
            $table->fullText('content');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text_contents');
    }
};

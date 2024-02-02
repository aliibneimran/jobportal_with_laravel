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
        Schema::create('catdidate_details', function (Blueprint $table) {
            $table->id();
            $table->string('contact',20);
            $table->string('address',300);
            $table->string('image',50);
            $table->text('bio');
            $table->integer('candidate_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catdidate_details');
    }
};

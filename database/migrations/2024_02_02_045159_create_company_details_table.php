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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->string('type',20)->nullable();
            $table->string('contact',20)->nullable();
            $table->string('address',300)->nullable();
            $table->string('image',50)->nullable();
            $table->string('cover_image',50)->nullable();
            $table->text('bio')->nullable();
            $table->integer('company_id');
            $table->integer('package_id')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};

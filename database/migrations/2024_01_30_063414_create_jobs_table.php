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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('position',50);
            $table->integer('salary');
            $table->integer('vacancy');
            $table->string('image',50)->nullable();
            $table->boolean('availability');
            $table->dateTime('start_date')->useCurrent();
            $table->dateTime('end_date')->useCurrent();
            $table->integer('category_id');
            $table->integer('location_id');
            $table->integer('industry_id');
            $table->integer('company_id');
            $table->text('description');
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
        Schema::dropIfExists('jobs');
    }
};

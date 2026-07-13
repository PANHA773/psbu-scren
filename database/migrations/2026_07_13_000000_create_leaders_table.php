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
        Schema::create('leaders', function (Blueprint $table) {
            $table->id();
            $table->string('name_kh');
            $table->string('name_en');
            $table->string('role_kh')->default('នាយក');
            $table->string('role_en')->default('Rector');
            $table->string('image')->nullable();
            $table->text('message_kh')->nullable();
            $table->text('message_en')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('tiktok')->nullable();
            $table->unsignedSmallInteger('years_experience')->default(0);
            $table->unsignedSmallInteger('publications')->default(0);
            $table->unsignedSmallInteger('awards')->default(0);
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaders');
    }
};

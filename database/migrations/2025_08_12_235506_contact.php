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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('name');
            $table->string('value');
            $table->text('message');
            $table->boolean('public');
            $table->unsignedBigInteger('createdBy')->nullable();
            $table->timestamps();

            //FK
            $table->foreign('createdBy')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};

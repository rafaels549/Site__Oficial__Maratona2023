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
        Schema::create('page_cards', function (Blueprint $table) {
            $table->id();
            $table->longText("imagem");
            $table->unsignedBigInteger("page_id");
           $table->foreign("page_id")->references('id')
           ->on('pages');
           $table->string("titulo");
           $table->string("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_cards');
    }
};

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
        Schema::create('comics', function (Blueprint $table) {
            //di seguito i campi della tabella comics
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('thumb');
            $table->string('price');
            $table->string('series');
            $table->string('sale_date');
            $table->string('type');
            $table->text('artists');
            $table->text('writers');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};

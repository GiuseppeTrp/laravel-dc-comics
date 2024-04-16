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
            $table->id();
            $table->timestamps(); 
            $table->string('title');
            $table->text("description")->nullable();
            $table->text("thumb")->nullable();
            $table->string("series",80 );


            $table->text('writers');
            $table->text('artists');
            $table->string('type',30); 
            $table->date('sale_date');
            $table->string('price',10);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};

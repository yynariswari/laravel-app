<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Primary Key (Auto Increment)
            $table->string('title'); // Kolom title (String)
            $table->decimal('price', 10, 2); // Kolom price (Decimal, 10 angka, 2 desimal)
            $table->string('isbn')->unique(); // Kolom ISBN (String, unik)
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};

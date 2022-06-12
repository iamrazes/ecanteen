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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');  //Uploader
            $table->string('name');
            $table->enum('category', ['Makanan', 'Minuman', 'Lainnya']);
            $table->string('price');
            $table->string('stock');
            $table->longText('description');
            $table->string('cover');
            $table->enum('status', ['Available', 'Not Available']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

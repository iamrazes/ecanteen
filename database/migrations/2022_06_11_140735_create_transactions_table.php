<?php

use App\Models\Product;
use App\Models\User;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->unique();
            $table->integer('buyer_id');
            $table->integer('seller_id');
            $table->foreignIdFor(Product::class);
            $table->double('price');
            $table->enum('status',['Dipesan','Diproses','Berhasil','Dibatalkan']);

            // Dipesan = Transaksi berjalan
            // Diproses = Transaksi di konfirmasi (berlanjut)
            // Berhasil = Transaksi Selesai
            // Dibatalkan = Transaksi Batal

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
        Schema::dropIfExists('transactions');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->string('full_address', 200);
            $table->enum('shipment', ['JNE', 'POS', 'TIKI', 'ESL', 'PCP', 'RPX']);
            $table->enum('payment', ['Kartu Kredit', 'ATM/Bank Transfer', 'TCash', 'Indomaret / Alfamaret']);
            $table->string('ship_cost', 50);
            $table->string('total_cost', 50);
            $table->string('payment_proof', 100);
            $table->enum('status', ['Menunggu Bukti', 'Barang Dikirm', 'Tertunda']);
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
        Schema::dropIfExists('orders');
    }
}

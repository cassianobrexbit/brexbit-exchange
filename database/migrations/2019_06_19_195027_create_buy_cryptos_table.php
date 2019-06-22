<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyCryptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_cryptos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('crypto_name');
            $table->double('crypto_value', 15, 8);
            $table->double('crypto_rate', 8, 2);
            $table->double('brl_value', 8, 2);
            $table->string('crypto_address');
            $table->binary('filename',8192);
            $table->string('fileext');
            $table->string('status');
            $table->dateTime('confirmation_time')->nullable();
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('buy_cryptos');
    }
}

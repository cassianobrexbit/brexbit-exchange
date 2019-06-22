<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellCryptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_cryptos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('crypto_name');
            $table->double('crypto_value', 15, 8);
            $table->double('crypto_rate', 8, 2);
            $table->double('brl_value', 8, 2);
            $table->string('crypto_adress');
            $table->string('bank_name');
            $table->string('ag_number');
            $table->string('acc_number');
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
        Schema::dropIfExists('sell_cryptos');
    }
}

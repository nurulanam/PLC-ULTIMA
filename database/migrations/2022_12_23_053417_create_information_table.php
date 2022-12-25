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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->integer('farm_price')->nullable(true);
            $table->date('farm_date')->nullable(true);
            $table->date('load_date')->nullable(true);
            $table->string('refferal_name')->nullable(true);
            $table->string('name')->nullable(true);
            $table->string('mobile_number')->nullable(true);
            $table->string('personal_email')->nullable(true);
            $table->string('personal_password')->nullable(true);
            $table->string('platin_world_email')->nullable(true);
            $table->string('platin_world_passowrd')->nullable(true);
            $table->string('refferal_link')->nullable(true);
            $table->string('account')->nullable(true);
            $table->string('card')->nullable(true);
            $table->string('wallet_1')->nullable(true);
            $table->string('wallet_2')->nullable(true);
            $table->string('wallet_3')->nullable(true);
            $table->string('wallet_4')->nullable(true);
            $table->string('wallet_5')->nullable(true);
            $table->string('wallet_6')->nullable(true);
            $table->string('wallet_7')->nullable(true);
            $table->string('wallet_8')->nullable(true);
            $table->string('wallet_9')->nullable(true);
            $table->string('wallet_10')->nullable(true);
            $table->string('wallet_11')->nullable(true);
            $table->string('wallet_12')->nullable(true);
            $table->string('wallet_13')->nullable(true);
            $table->string('wallet_14')->nullable(true);
            $table->string('wallet_15')->nullable(true);
            $table->string('farm_1')->nullable(true);
            $table->string('farm_2')->nullable(true);
            $table->string('farm_3')->nullable(true);
            $table->string('farm_4')->nullable(true);
            $table->string('farm_5')->nullable(true);
            $table->string('farm_6')->nullable(true);
            $table->string('farm_7')->nullable(true);
            $table->string('farm_8')->nullable(true);
            $table->string('farm_9')->nullable(true);
            $table->string('farm_10')->nullable(true);
            $table->string('farm_11')->nullable(true);
            $table->string('farm_12')->nullable(true);
            $table->string('farm_13')->nullable(true);
            $table->string('farm_14')->nullable(true);
            $table->string('farm_15')->nullable(true);
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
        Schema::dropIfExists('information');
    }
};

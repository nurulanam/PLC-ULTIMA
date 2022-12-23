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
            $table->string('refferal_name')->nullable(true);
            $table->string('name');
            $table->string('mobile_number')->nullable(true);
            $table->string('personal_email')->nullable(true);
            $table->string('password')->nullable(true);
            $table->string('platin_world_email')->nullable(true);
            $table->string('platin_world_passowrd')->nullable(true);
            $table->string('refferal_link')->nullable(true);
            $table->string('account')->nullable(true);
            $table->string('card')->nullable(true);
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

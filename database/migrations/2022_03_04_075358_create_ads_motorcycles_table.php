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
        Schema::create('ads_motorcycles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('title');
            $table->integer('type');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('company_id');
            $table->integer('model_id');
            $table->integer('specification');
            $table->integer('mileage');
            $table->integer('price');
            $table->integer('status_motor');
            $table->integer('status_engine');
            $table->integer('body');
            $table->integer('petrol_type');
            $table->integer('clynder');
            $table->integer('gear');
            $table->integer('color');
            $table->integer('is_insurance');
            $table->text('description');
            $table->text('additions');
            $table->text('address');
            $table->text('name');
            $table->text('email');
            $table->text('phone');
            $table->boolean('is_special')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('ads_motorcycles');
    }
};

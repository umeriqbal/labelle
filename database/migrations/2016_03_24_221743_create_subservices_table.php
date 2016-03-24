<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subservices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('service_id');
            $table->string('subservice_name');
            $table->string('subservice_duration');
            $table->decimal('full_price', 5, 2);
            $table->decimal('discounted_price', 5, 2);
            $table->unique(['service_id', 'subservice_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subservices');
    }
}

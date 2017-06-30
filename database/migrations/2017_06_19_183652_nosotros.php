<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nosotros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name',50);
			$table->string('url_img',400)->nullable();
			$table->string('img_description',200);
            $table->timestamps();
			$table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nosotros');
    }
}

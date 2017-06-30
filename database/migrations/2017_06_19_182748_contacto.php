<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->increments('id');
			$table->string('adress',150);
			$table->string('phone',30);
			$table->string('email',100);
			$table->string('schedule',300);
			$table->text('url_maps');
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
        Schema::drop('contacto');
    }
}

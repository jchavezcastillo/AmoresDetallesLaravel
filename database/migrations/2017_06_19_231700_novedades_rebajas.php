<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NovedadesRebajas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedades_rebajas', function (Blueprint $table) {
           $table->increments('id');
			$table->integer('type');
			$table->string('url_img',500);
			$table->string('description',500);
			$table->string('url_redirect',500);
			$table->tinyInteger('status');
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
        Schema::drop('novedades_rebajas');
    }
}

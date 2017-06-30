<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoNosotros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_nosotros', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title',100);
			$table->string('description',500);
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
        Schema::drop('info_nosotros');
    }
}

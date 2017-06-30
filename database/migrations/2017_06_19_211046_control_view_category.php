<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ControlViewCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_view_category', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('view_id');
			$table->unsignedInteger('category_id');
			$table->tinyInteger('status');
            $table->timestamps();
			
			$table->foreign('category_id')->references('id')->on('categorys');
			$table->foreign('view_id')->references('id')->on('views');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('control_view_category');
    }
}

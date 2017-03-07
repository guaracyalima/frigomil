<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSobresTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sobres', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('slogan');
            $table->longText('coldireita');
            $table->longText('coldesquerda');
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
		Schema::drop('sobres');
	}

}

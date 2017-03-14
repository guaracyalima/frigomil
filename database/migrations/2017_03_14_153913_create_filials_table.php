<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilialsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filials', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('endereco');
            $table->string('telefone');
            $table->string('whatsapp');
            $table->string('email');
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
		Schema::drop('filials');
	}

}

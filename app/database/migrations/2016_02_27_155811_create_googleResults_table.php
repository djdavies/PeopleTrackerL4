<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoogleResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('google_results', function ($table)
		{
            $table->increments('id');
            $table->integer('people_id');
            $table->timestamps();
            $table->string('url');
            $table->string('title');
            $table->string('content');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('google_results');
	}
}

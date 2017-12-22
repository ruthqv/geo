<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{     


		if (!Schema::hasTable('countries'))  {	

		Schema::create('countries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->string('iso');
			$table->boolean('active')->default(1);
			$table->integer('zone_id')->unsigned()->index();
			$table->foreign('zone_id')->references('id')->on('zones');				
			$table->timestamps();
			$table->softDeletes();
	

		});
	}
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}

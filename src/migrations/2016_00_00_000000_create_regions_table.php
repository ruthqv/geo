<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	

	if (!Schema::hasTable('regions'))  {	


		Schema::create('regions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->integer('country_id')->unsigned();
			$table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
			$table->boolean('active')->default(1);
					
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
		Schema::drop('regions');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReport extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('report', function($table) {
			$table->increments('intReportId');
			$table->text('strImageReportPath');
			$table->string('strFullName', 100);
			$table->string('dtmReport', 100);
			$table->text('strUrlReport');
			$table->text('strRemarks');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonationRequestsTable extends Migration {

	public function up()
	{
		Schema::create('donation_requests', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('patient_name');
			$table->string('patient_phone');
			$table->integer('city_id')->unsigned();
			$table->string('hospital_address');
			$table->text('details');
			$table->decimal('letitude', 10,8);
			$table->decimal('longitude',10.,8);
			$table->integer('client_id')->unsigned();
			$table->decimal('quantity');
		});
	}

	public function down()
	{
		Schema::drop('donation_requests');
	}
}
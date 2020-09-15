<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
//		Schema::table('clients', function(Blueprint $table) {
//			$table->foreign('blood_type_id')->references('id')->on('blood_types')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('clients', function(Blueprint $table) {
//			$table->foreign('city_id')->references('id')->on('cities')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('cities', function(Blueprint $table) {
//			$table->foreign('governorate_id')->references('id')->on('governorates')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('posts', function(Blueprint $table) {
//			$table->foreign('category_id')->references('id')->on('categories')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('client_post', function(Blueprint $table) {
//			$table->foreign('client_id')->references('id')->on('clients')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('client_post', function(Blueprint $table) {
//			$table->foreign('post_id')->references('id')->on('clients')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('donation_requests', function(Blueprint $table) {
//			$table->foreign('city_id')->references('id')->on('cities')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('donation_requests', function(Blueprint $table) {
//			$table->foreign('client_id')->references('id')->on('clients')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
//		Schema::table('notifications', function(Blueprint $table) {
//			$table->foreign('donation_request_id')->references('id')->on('donation_requests')
//						->onDelete('no action')
//						->onUpdate('no action');
//		});
	}

	public function down()
	{
//		Schema::table('clients', function(Blueprint $table) {
//			$table->dropForeign('client_blood_type_id_foreign');
//		});
//		Schema::table('clients', function(Blueprint $table) {
//			$table->dropForeign('client_city_id_foreign');
//		});
//		Schema::table('cities', function(Blueprint $table) {
//			$table->dropForeign('city_governorate_id_foreign');
//		});
//		Schema::table('posts', function(Blueprint $table) {
//			$table->dropForeign('post_category_id_foreign');
//		});
//		Schema::table('client_post', function(Blueprint $table) {
//			$table->dropForeign('client_post_client_id_foreign');
//		});
//		Schema::table('client_post', function(Blueprint $table) {
//			$table->dropForeign('client_post_post_id_foreign');
//		});
//		Schema::table('donation_requests', function(Blueprint $table) {
//			$table->dropForeign('donation_requests_city_id_foreign');
//		});
//		Schema::table('donation_requests', function(Blueprint $table) {
//			$table->dropForeign('donation_requests_clien_id_foreign');
//		});
//		Schema::table('notifications', function(Blueprint $table) {
//			$table->dropForeign('notifications_donation_request_id_foreign');
//		});
	}
}
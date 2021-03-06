<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'keys', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'unique_id' )->unique();
			$table->integer( 'type_id' )->unsigned();
			$table->foreign( 'type_id' )->references( 'id' )
				  ->on( 'type_keys' )->onDelete( 'cascade' );
			$table->integer( 'user_id' )->unsigned();
			$table->foreign( 'user_id' )->references( 'id' )
			      ->on( 'users' )->onDelete( 'cascade' );
			$table->boolean( 'active' );
			$table->mediumText( 'key' );
			$table->mediumText( 'ips' )->nullable();
			$table->boolean( 'check_login' );

			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'keys' );
	}
}

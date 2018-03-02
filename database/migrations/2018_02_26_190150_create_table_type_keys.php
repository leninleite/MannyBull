<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTableTypeKeys extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'type_keys', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'name' );
			$table->string( 'description' )->nullable();
			$table->timestamps();
        } );
        
        // Insert first user
        DB::table('type_keys')->insert(
            array(
                'name' => 'Synchronous Key',
                'description' => 'Key that can use to encrytp an decrypt data.'
            )
        );

         // Insert first user
         DB::table('type_keys')->insert(
            array(
                'name' => 'Asynchronous Key / Public Key',
                'description' => 'This Key can be use to encrytp data.'
            )
        );

        // Insert first user
        DB::table('type_keys')->insert(
            array(
                'name' => 'Asynchronous Key / Private Key',
                'description' => 'This Key can be use to decrypt data.'
            )
        );
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'type_keys' );
	}
}
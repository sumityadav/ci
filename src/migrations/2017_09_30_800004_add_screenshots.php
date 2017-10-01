<?php

use Illuminate\Database\Schema\Blueprint;
use PragmaRX\Support\Migration;

class AddScreenshots extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		Schema::table('ci_runs', function(Blueprint $table)
		{
			$table->json('screenshots')->nullable();
            $table->dropColumn('png');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function migrateDown()
	{
        Schema::table('ci_runs', function(Blueprint $table)
        {
            $table->dropColumn('screenshots');
            $table->text('png')->nullable();
        });
	}
}

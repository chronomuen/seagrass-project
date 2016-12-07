<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOthervalueLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('location', function (Blueprint $table) {
			$table->char('observationType',100);
			$table->integer('depth');
			$table->char('sedimentType',100);
			$table->char('waterClarity',100);
			$table->char('species',100);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location', function (Blueprint $table) {
			$table->dropColumn('observationType');
			$table->dropColumn('depth');
			$table->dropColumn('sedimentType');
			$table->dropColumn('waterClarity');
			$table->dropColumn('species');
		});
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
			$table->decimal('longitude', 5, 2);
			$table->decimal('latitude', 5, 2);
            $table->date('date');
            $table->string('observation');
			$table->decimal('depth', 5, 2);
            $table->time('time');
            $table->string('sediment');
            $table->string('clarity');
            $table->string('type');            
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reports');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdeptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edepts', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
            $table->string('content');
			$table->string('teachers_id');
			//$table->string('prefs_id');
			$table->string('featrued');
			$table->string('contentd');
			
			$table->string('featruedg');
			$table->string('featruedm');
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
        Schema::dropIfExists('edepts');
    }
}

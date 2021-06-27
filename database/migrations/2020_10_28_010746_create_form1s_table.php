<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form1s', function (Blueprint $table) {
             $table->bigIncrements('id');
			$table->string('name');
            $table->string('stage');
			$table->string('teachers_id');
			//$table->string('prefs_id');
			$table->string('featrued');
			$table->string('typestu');
			$table->string('addres');
			$table->string('bd');
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
        Schema::dropIfExists('form1s');
    }
}

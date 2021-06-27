<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calluses', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title');
			$table->string('facebook');
			$table->string('youtube');
			$table->string('instagram');
			$table->string('telegram');
			$table->string('e_learning');
			$table->integer('t_number');
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
        Schema::dropIfExists('calluses');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('repairInfo', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('users_id');
          $table->string('items');
          $table->string('make');
          $table->timestamps();
          $table->string('message1');
          $table->string('message2');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairInfo');
    }
}

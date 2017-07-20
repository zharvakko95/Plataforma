<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('curso', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->longtext('logotipo')->nullable();
          $table->integer('id_areaFK');
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

          Schema::dropIfExists('curso');
    }
}

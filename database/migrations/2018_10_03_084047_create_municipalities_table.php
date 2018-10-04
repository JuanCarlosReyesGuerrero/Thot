<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 3);
            $table->string('name', 255);
            $table->string('unifiedcode', 6);
            $table->integer('department_id')->unsigned();
            $table->string('department_code', 2);
            $table->boolean('active');
            $table->timestamps();

            //Relations
            $table->foreign('department_id')->references('id')->on('departments')
            ->onDelete('cascade')
            ->onUpdate('cascade');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoresTable extends Migration
{
    /**
     * Run the migrations.
     * Tabla de nucleos
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 3);
            $table->string('name', 100);
            $table->string('address', 100);
            $table->string('phone', 20);
            $table->integer('department_id')->unsigned();
            $table->string('directorName', 30);
            $table->string('directorPhone', 30);
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
        Schema::dropIfExists('cores');
    }
}

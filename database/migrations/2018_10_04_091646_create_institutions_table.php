<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Thot\Calendar;
//use Thot\Sector;
//use Thot\LegalProperty;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('daneCode', 12);
            $table->string('name', 100);
            $table->string('nit', 20);
            $table->string('rectorName', 50);
            $table->integer('calendar_id')->unsigned();
            $table->integer('sector_id')->unsigned();
            $table->integer('legalProperty_id')->unsigned();
            $table->integer('numberVenues');
            $table->integer('core_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->boolean('subsidy');
            $table->integer('disability_id')->unsigned();
            $table->integer('exceptionalCapacity_id')->unsigned();
            $table->integer('ethnicity_id')->unsigned();
            $table->integer('guard_Id')->unsigned();
            $table->integer('novelty_id')->unsigned();
            $table->integer('methodology_id')->unsigned();
            $table->integer('serviceProvider_id')->unsigned();
            $table->string('DecreeCreation', 30);
            $table->string('director', 30);
            $table->string('secretary', 30);
            $table->string('approval', 30);
            $table->string('motto', 255);
            $table->string('shield', 255);
            $table->integer('department_id')->unsigned();
            $table->integer('municipality_id')->unsigned();
            $table->integer('zone_id')->unsigned();
            $table->string('neighborhood', 30);
            $table->string('address', 100);
            $table->string('phone', 20);
            $table->string('fax', 20);
            $table->string('website', 20);
            $table->string('email', 20);
            $table->string('numberLicense', 10);
            $table->integer('costRegimes_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->integer('association_id')->unsigned();
            $table->integer('annualRate_id')->unsigned();
            $table->boolean('status');
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
        Schema::dropIfExists('institutions');
    }
}

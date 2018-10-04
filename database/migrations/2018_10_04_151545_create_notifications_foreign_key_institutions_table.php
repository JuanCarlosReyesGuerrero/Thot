<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsForeignKeyInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('institutions', function ($table) {
     
            //Relations            
            $table->foreign('calendar_id')->references('id')->on('calendars')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('legalProperty_id')->references('id')->on('legal_properties')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('core_id')->references('id')->on('cores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('disability_id')->references('id')->on('disabilities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('exceptionalCapacity_id')->references('id')->on('exceptional_capacities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ethnicity_id')->references('id')->on('ethnicities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('guard_Id')->references('id')->on('guards')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('novelty_id')->references('id')->on('novelties')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('methodology_id')->references('id')->on('methodologies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('serviceProvider_id')->references('id')->on('service_providers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('costRegimes_id')->references('id')->on('cost_regimes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('annualRate_id')->references('id')->on('annual_rates')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

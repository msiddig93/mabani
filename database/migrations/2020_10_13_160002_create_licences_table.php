<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class CreateLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_name');
            $table->string('phone');

            $table->bigInteger('purpose_id')->unsigned()->nullable();
            $table->foreign('purpose_id')->references('id')->on('purposes')
            ->onDelete('cascade');

            $table->bigInteger('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('districts')
            ->onDelete('cascade');

            $table->bigInteger('user_id')->nullable()->default(0);

            
            $table->string('land_number')->nullable();
            $table->string('part')->nullable();
            $table->string('certificate')->nullable();
            $table->string('prototype')->nullable();
            $table->string('blueprint')->nullable();
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
        Schema::dropIfExists('licences');
    }
}

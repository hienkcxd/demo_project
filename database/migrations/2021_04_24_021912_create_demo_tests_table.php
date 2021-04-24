<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rate')->unsigned();
            $table->integer('sysstolic')->unsigned();
            $table->integer('diastolic')->unsigned();
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
        Schema::dropIfExists('demo_tests');
    }
}

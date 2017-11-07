<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->integer('caseId')->unsigned();
            $table->integer('price')->unsigned();
            $table->text('note');
            $table->string('photo')->nullable();
            $table->timestamps();

              $table->foreign('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
              $table->foreign('caseId')->references('id')->on('cases')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donates');
    }
}

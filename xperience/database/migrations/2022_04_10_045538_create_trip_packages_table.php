<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_packages', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('trip_id')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_packages');
    }
};

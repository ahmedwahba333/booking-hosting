<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertyservices', function (Blueprint $table) {
            $table->id();
            // $table->integer('services_id')->unsigned();
            // $table->integer('properties_id')->unsigned();

            $table->foreignId('services_id')->constrained("services")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId('properties_id')->constrained("properties")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('propertyservices');
    }
}

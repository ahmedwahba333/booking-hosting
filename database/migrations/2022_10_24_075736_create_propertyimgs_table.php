<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyimgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("propertyimgs", function (Blueprint $table) {
            $table->id();
            $table->foreignId("properties_id")->constrained("properties")->onDelete("cascade")->onUpdate("cascade");
            $table->string("image");

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
        Schema::dropIfExists("propertyimgs");
    }
}

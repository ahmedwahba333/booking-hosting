<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("properties", function (Blueprint $table) {
            $table->id();
            $table->string("country");
            $table->string("city");
            $table->string("street");
            $table->integer("capacity");
            $table->float("price");
            $table->enum("isavailable", ["yes", "no"]);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists("properties");
    }
}

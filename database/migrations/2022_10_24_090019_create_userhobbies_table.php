<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserhobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userhobbies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hobbies_id')->constrained('hobbies')->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('users_id')->constrained('users')->onUpdate("cascade")->onDelete("cascade");
            // $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('userhobbies');
    }
}

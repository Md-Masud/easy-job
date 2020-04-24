<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownerinformations', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedInteger('counrty_id');
            $table->unsignedInteger('user_id');
            $table->string('name',60);
            $table->string('slug',60);
            $table->longText('description');
            $table->string('email',100)->unique();
            $table->string('web_address',100)->unique();
            $table->string('facebook',100)->unique();
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
        Schema::dropIfExists('ownerinformations');
    }
}

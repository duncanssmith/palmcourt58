<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path');
            $table->string('extension');
            $table->string('title');
            $table->text('description');
            $table->unsignedTinyInteger('active');
            $table->unsignedTinyInteger('function');
            $table->unsignedTinyInteger('banner');
            $table->unsignedSmallInteger('hierarchy');
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
        Schema::dropIfExists('menus');
    }
}

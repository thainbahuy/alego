<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_photo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sub_menu_id')->unsigned()->nullable();
            $table->text('name')->nullable();
            $table->text('author')->nullable();
            $table->string('editor_designer',200)->nullable();
            $table->string('director_photographer',200)->nullable();
            $table->string('producer',200)->nullable();
            $table->text('description')->nullable();
            $table->text('image_cover')->nullable();
            $table->text('image_link')->nullable();
            $table->integer('position')->nullable();
            $table->foreign('sub_menu_id')->references('sub_menu_id')->on('sub_menu')->onDelete('cascade');
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
        Schema::dropIfExists('event_photo');
    }
}

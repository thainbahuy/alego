<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sub_menu_id')->unsigned();
            $table->text('name');
            $table->text('author');
            $table->string('editor_designer',200);
            $table->string('director_photographer',200);
            $table->string('producer',200);
            $table->text('description');
            $table->text('image_cover');
            $table->text('video_link');
            $table->integer('type');
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
        Schema::dropIfExists('event');
    }
}

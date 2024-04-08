<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelinePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->timestamps();
            $table->date('event_date');
            $table->enum('timeline_type',['law','event'])->default('law');
            $table->primary('id');
            $table->foreign('id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timeline_posts');
    }
}

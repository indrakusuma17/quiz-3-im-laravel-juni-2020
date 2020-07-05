<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddUsersIdToFollowerMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follower_map', function (Blueprint $table) {
            $table->bigInteger('follower_id')->unsigned()->nullable();
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('following_id')->unsigned()->nullable();
            $table->foreign('following_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follower_map');
    }
}

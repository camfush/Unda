<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('friends', function (Blueprint $table) {
          $table->unsignedInteger('friend1');
          $table->unsignedInteger('friend2');
          $table->timestamps();
          $table->foreign('friend1')->references('id')->on('users');
          $table->foreign('friend2')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('friends');
    }
}

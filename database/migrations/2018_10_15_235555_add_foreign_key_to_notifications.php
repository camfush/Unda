<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::table('notifications', function (Blueprint $table) {
         $table->unsignedInteger('source_user_id');
         $table->string('notification_type');
         $table->foreign('source_user_id')->references('id')->on('users');
       });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('notifications', function (Blueprint $table) {
          $table->dropIfExists('source_user_id');
          $table->dropIfExists('notification_type');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Schema::dropIfExists('messages');

        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->foreignId("sender_id")->constrained("admins");

            /* $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on('admins');*/
            /*    $table->unsignedBigInteger('receiver_id');
            $table->foreign('receiver_id')->references('id')->on('admins')->cascadeOnDelete()->cascadeOnUpdate();*/
            $table->text('content');
            $table->string('message_subject');
           
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
        Schema::dropIfExists('messages');
    }
}

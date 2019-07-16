<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFellowshipMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fellowship_member', function (Blueprint $table) {
            $table->unsignedBigInteger('fellowship_id');
            $table->foreign('fellowship_id')->references('id')->on('fellowships');
            $table->unsignedBigInteger('member_id');
            $table->foreign('member_id')->references('id')->on('members');
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
        Schema::dropIfExists('fellowship_member');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('legal_name');
            $table->string('chinese_name');
            $table->string('nickname');
            $table->string('ic_number');
            $table->string('email');
            $table->string('mobile_phone');
            $table->string('house_phone');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->unsignedTinyInteger('baptized');
            $table->string('baptized_in');
            $table->string('membership_in');
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
        Schema::dropIfExists('members');
    }
}

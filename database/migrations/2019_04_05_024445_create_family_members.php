<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('member_id');
            $table->foreign('member_id')->references('id')->on('members');
            $table->unsignedBigInteger('family_member_id')->nullable()->default(null);;
            $table->foreign('family_member_id')->references('id')->on('members');
            $table->string('name')->nullable()->default(null);
            $table->string('relationship')->nullable()->default(null);
            $table->string('mobile_phone')->nullable()->default(null);
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
        Schema::dropIfExists('family_members');
    }
}

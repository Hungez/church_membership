<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIcColumnMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function($table) {
            $table->longText('ic_number')->change();
            $table->string('chinese_name')->nullable()->default(null)->change();
            $table->string('nickname')->nullable()->default(null)->change();
            $table->string('email')->nullable()->default(null)->change();
            $table->string('mobile_phone')->nullable()->default(null)->change();
            $table->string('house_phone')->nullable()->default(null)->change();
            $table->string('address2')->nullable()->default(null)->change();
            $table->integer('postcode')->after('address2')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function($table) {
            $table->string('ic_number')->change();
            $table->string('chinese_name')->change();
            $table->string('nickname')->change();
            $table->string('email')->change();
            $table->string('mobile_phone')->change();
            $table->string('house_phone')->change();
            $table->string('address2')->change();
            $table->dropColumn('postcode');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('roles', 5)->after('email')->default('USER');
            $table->text('address')->after('email')->nullable();;
            $table->string('phone', 13)->after('email')->unique()->nullable();
            $table->string('username', 16)->after('email')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('roles');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('username');
        });
    }
}
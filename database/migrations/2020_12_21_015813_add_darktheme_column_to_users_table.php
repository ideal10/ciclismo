<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDarkthemeColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * Adds 'darktheme' column to 'users' table
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('darktheme')
                  ->after('remember_token')
                  ->default(false);
        });
    }

    /**
     * Reverse the migrations.
     * 
     * Drops the 'darktheme' column from 'users' table
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('darktheme');
        });
    }
}

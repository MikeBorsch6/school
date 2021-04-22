<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserIdColumnInCoursesTable extends Migration
{

    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('user_id')->nullable(false)->change();
        });
    }
}

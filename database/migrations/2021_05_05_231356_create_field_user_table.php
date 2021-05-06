<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldUserTable extends Migration
{
    public function up()
    {
        Schema::create('field_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('field_id');
            $table->boolean('major');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('field_user');
    }
}

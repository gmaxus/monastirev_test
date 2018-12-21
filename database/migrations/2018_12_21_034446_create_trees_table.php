<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreesTable extends Migration
{

    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->nestedSet();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('trees', function (Blueprint $table) {
            $table->dropNestedSet();
        });
    }
}

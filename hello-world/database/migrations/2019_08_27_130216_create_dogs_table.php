<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration {

    public function up () {

        Schema::create('dogs', function (Blueprint $table) {
            $table -> bigIncrements('id');

            $table -> string ('name', 32) -> nullable (false);
            $table -> string ('breed', 32) -> nullable (false);
            $table -> integer ('score');

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
}

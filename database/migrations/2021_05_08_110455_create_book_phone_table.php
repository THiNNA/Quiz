<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_phone', function (Blueprint $table) {
            $table->id();
            $table->string('bp_name', 255);
            $table->string('bp_tel', 255);
            $table->string('bp_addr', 255);
            $table->string('bp_img', 255);
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
        Schema::dropIfExists('book_phone');
    }
}

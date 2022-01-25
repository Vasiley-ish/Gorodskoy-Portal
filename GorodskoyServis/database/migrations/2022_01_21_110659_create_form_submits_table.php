<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSubmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_submits', function (Blueprint $table) {
            $table->id();
            $table->String('login');
            $table->Binary('image');
            $table->Binary('image_after');
            $table->String('title');
            $table->String('category');
            $table->String('discription');
            $table->String('status');
            $table->String('disprove_reason');
           
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
        Schema::dropIfExists('form_submits');
    }
}

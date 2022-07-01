<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vegetables', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->integer("new_price");
            $table->integer("old_price");
            $table->text("description");
            $table->string("image");
            $table->unsignedInteger("category_id");
            $table->foreign('category_id')->references('id')->on('categoris')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('vegetables');
    }
};

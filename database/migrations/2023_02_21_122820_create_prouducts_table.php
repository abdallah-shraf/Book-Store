<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProuductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prouducts', function (Blueprint $table) {
            $table->id();
            $table->string('ProductsName',150);
            $table->longText('AboutProduct');
            $table->unsignedBigInteger('sectionID');
            $table->foreign('sectionID')->references('id')->on('sections')->onDelete('cascade');
            $table->string('ProductImage');
            $table->float('UnitePrice');
            $table->string('Author',50);
            $table->string('Created_by',999);

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
        Schema::dropIfExists('prouducts');
    }
}

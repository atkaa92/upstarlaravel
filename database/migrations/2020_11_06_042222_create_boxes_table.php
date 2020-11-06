<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description');
            $table->string('img');
            $table->boolean('is_custom')->default(false);
            $table->unsignedBigInteger('resubscribe_period');
            $table->decimal('free_shipping_from');

            $table->foreign('resubscribe_period')->references('id')->on('receive_options');

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
        Schema::dropIfExists('boxes');
    }
}

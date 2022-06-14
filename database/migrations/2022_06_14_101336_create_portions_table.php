<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portions', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('goods_id')->unsigned()->nullable(false)->default(0);
            $table->string('article')->nullable(false)->default('');
            $table->integer('initial_amount')->unsigned()->nullable(false)->default(0);
            $table->integer('current_amount')->unsigned()->nullable(false)->default(0);
            $table->integer('booked')->unsigned()->nullable(false)->default(0);
            $table->enum('status', ['off', 'on', 'suspended'])->default('off');
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
        Schema::dropIfExists('portions');
    }
}

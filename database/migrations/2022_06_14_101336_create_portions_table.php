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
            $table->increments('id');
            $table->unsignedInteger('goods_id')->nullable(false)->default(0);
            $table->unsignedInteger('article_id')->nullable(false)->default(0);
            $table->float('price', 8, 2)->nullable(false)->default(0);
            $table->float('min_price', 8, 2)->nullable(false)->default(0);
            $table->unsignedInteger('initial_amount')->nullable(false)->default(0);
            $table->unsignedInteger('current_amount')->nullable(false)->default(0);
            $table->unsignedInteger('booked')->nullable(false)->default(0);
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

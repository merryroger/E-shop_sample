<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('categoty_id')->unsigned()->nullable(false)->default(0);
            $table->integer('manufacturer_id')->unsigned()->nullable(false)->default(0);
            $table->integer('cgroup_id')->unsigned()->nullable();
            $table->string('article')->unique()->nullable(false)->default('');
            $table->string('preview')->nullable();
            $table->string('description')->nullable(false)->default('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}

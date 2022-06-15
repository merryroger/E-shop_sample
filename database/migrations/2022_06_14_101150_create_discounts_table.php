<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false)->default('');
            $table->string('description')->nullable();
            $table->string('algorithm')->nullable(false)->default('');
            $table->string('activate_hash')->nullable();
            $table->float('upper_limit', 8, 2)->nullable();
            $table->boolean('apply_till_exhaust')->nullable(false)->default(false);
            $table->dateTime('apply_since')->nullable();
            $table->dateTime('apply_till')->nullable();
            $table->boolean('isAffected')->nullable(false)->default(false);
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
        Schema::dropIfExists('discounts');
    }
}

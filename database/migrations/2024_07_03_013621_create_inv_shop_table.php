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
        Schema::create('inv_shop', function (Blueprint $table) {
            $table->id();
            $table->string('s_name')->nullable();
            $table->string('s_address')->nullable();
            $table->string('s_logo')->nullable();
            $table->unsignedBigInteger('o_id')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('inv_shop');
    }
};

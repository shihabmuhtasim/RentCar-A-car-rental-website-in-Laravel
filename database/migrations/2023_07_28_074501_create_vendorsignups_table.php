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
        Schema::create('vendorsignups', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('phone',15);
            $table->string('username',50);
            $table->string('email',50);
            $table->string('password',500);
            $table->string('buisness_name',50);
            $table->string('address',50);
            $table->string('buisness_lisence_no',200);
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
        Schema::dropIfExists('vendorsignups');
    }
};

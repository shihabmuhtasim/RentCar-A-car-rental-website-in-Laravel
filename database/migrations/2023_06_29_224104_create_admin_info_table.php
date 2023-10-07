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
        Schema::create('admin_info', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('name',50);
            $table->string('phone',15);
            $table->string('username',50);
            $table->string('email',50);
            $table->string('password',500);
            $table->string('reference_code',50);
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
        Schema::dropIfExists('admin_info');
    }
};

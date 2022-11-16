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
        Schema::create('site_setting', function (Blueprint $table) {
            $table->id();
            $table->string('title',55);
            $table->string('alias',55);
            $table->string('logo',55);
            $table->string('facebook',55);
            $table->string('twitter',55);
            $table->string('tiktok',55);
            $table->string('address',55);
            $table->string('email',55)->unique();
            $table->string('phone',);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('site_setting');
    }
};

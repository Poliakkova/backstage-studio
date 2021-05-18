<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('No data')->nullable();
            $table->string('photo')->default('user.svg')->nullable();
            $table->string('position')->default('No data')->nullable();
            $table->string('experience')->default('No data')->nullable();
            $table->string('specializing')->default('No data')->nullable();
            $table->string('style')->default('No data')->nullable();
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
        Schema::dropIfExists('workers');
    }
}

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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->text('password');
            $table->text('specialization')->nullable();
            $table->text('graduation_year')->nullable();
            $table->text('university')->nullable();
            $table->text('phone')->nullable();
            $table->text('city')->nullable();
            $table->text('country')->nullable();
            $table->text('state')->nullable();
            $table->text('zip_code')->nullable();
            $table->text('photo')->nullable();
            $table->text('token')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('doctors');
    }
};

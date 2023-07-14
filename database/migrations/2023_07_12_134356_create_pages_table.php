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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('short_heading');
            $table->text('heading');
            $table->integer('heading_status');
            $table->text('signup_doctor_heading');
            $table->integer('signup_doctor_status');
            $table->text('signin_doctor_heading');
            $table->integer('signin_doctor_status');
            $table->text('signup_patient_heading');
            $table->integer('signup_patient_status');
            $table->text('signin_patient_heading');
            $table->integer('signin_patient_status');
            $table->text('doctor_forget_password_heading');
            $table->text('doctor_reset_password_heading');
            $table->text('patient_forget_password_heading');
            $table->text('patient_reset_password_heading');
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
        Schema::dropIfExists('pages');
    }
};

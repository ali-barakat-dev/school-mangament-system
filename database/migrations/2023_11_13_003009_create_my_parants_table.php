<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyParantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_parants', function (Blueprint $table) {
            $table->id();
            $table->string('Email')->unique();
            $table->string('Password');
            //fatherinfomation
            $table->string('Name_father');
            $table->string('National_ID_father');
            $table->string('Pasport_ID_father');
            $table->string('Phone_father');
            $table->string('Job_father');
            $table->bigInteger('Blood_tybe_father_id')->unsigned();
            $table->bigInteger('Nationally_father_id')->unsigned();
            $table->bigInteger('Religaion_father_id')->unsigned();
            $table->string('Address_father');
            //Mother infomation
            $table->string('Name_Mother');
            $table->string('National_ID_Mother');
            $table->string('Pasport_ID_Mother');
            $table->string('Phone_Mother');
            $table->string('Job_Mother');
            $table->bigInteger('Blood_tybe_Mother_id')->unsigned();
            $table->bigInteger('Nationally_Mother_id')->unsigned();
            $table->bigInteger('Religaion_Mother_id')->unsigned();
            $table->string('Address_Mother');
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
        Schema::dropIfExists('my_parants');
    }
}

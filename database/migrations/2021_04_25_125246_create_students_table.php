<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('nim');
            $table->string('nim');
            $table->longText('image');
            $table->string('majors_id');
            $table->string('gender');
            $table->string('email');
            $table->longText('address');
            $table->char('handphone');
            $table->string('religion');
            $table->string('placeofbirth');
            $table->date('dateofbirth');
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}

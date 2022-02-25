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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disability_id')->default(null)->nullable();
            $table->unsignedBigInteger('gender_id');
            $table->string('name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('unique_personal_clave')->unique();
            $table->string('email')->unique();
            $table->string('phone',45);
            $table->string('school_origin');
            $table->string('street');
            $table->string('suburb');
            $table->string('postal_code');
            $table->dateTime('registration_date');
            $table->string('folio_number')->unique();
            $table->boolean('token_payment')->default(false);

            $table->foreign('disability_id')
                ->references('id')
                ->on('disabilities');

            $table->foreign('gender_id')
                ->references('id')
                ->on('genders');
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
        Schema::dropIfExists('candidates');
    }
};

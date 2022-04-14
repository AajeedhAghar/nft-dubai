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
        Schema::create('investors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('country_code')->nullable();
            $table->integer('phone')->nullable();
            $table->string('interests')->nullable();
            $table->string('investor_role')->nullable();
            $table->string('interested_locations')->nullable();
            $table->integer('investment_min')->nullable();
            $table->integer('investment_max')->nullable();
            $table->text('currency')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->text('business_factors')->nullable();
            $table->text('company_description')->nullable();
            // $table->string('indsutries')->nullable();

            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_id');


            // $table->text('industries')->nullable();
            // $table->string('location')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investors');
    }
};

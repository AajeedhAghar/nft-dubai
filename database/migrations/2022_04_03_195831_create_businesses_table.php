<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->integer('country_code')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->nullable();
            $table->boolean('display_contact')->default(false);
            $table->boolean('display_company')->default(false);

            $table->string('role')->nullable();
            $table->date('establish_date')->nullable();
            $table->text('interest')->nullable();
            $table->string('location')->nullable();
            // $table->string('indsutries')->nullable();
            
            $table->integer('employees_number')->nullable();
            $table->string('entity_type')->nullable();
            $table->string('description')->nullable();
            $table->text('highlights')->nullable();
            $table->text('facility_details')->nullable();
            $table->text('currency')->nullable();
            $table->integer('Avg_monthly_sales')->nullable();
            $table->integer('year_sales')->nullable();
            $table->integer('EBITDA')->nullable();
            $table->text('assets')->nullable();
            $table->text('Phisycal_assets_value')->nullable();
      
            $table->boolean('receiving_quotations')->nullable();
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->unsignedBigInteger('profile_id');



            // $table->text('photo')->nullable();
            // $table->text('document')->nullable();
            // $table->text('proof')->nullable();
        });
    }

     
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
};

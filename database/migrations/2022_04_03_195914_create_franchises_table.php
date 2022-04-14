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
        Schema::create('franchises', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('country_code')->nullable();
            $table->text('phone')->nullable();
            $table->string('designation')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('offering')->nullable();
            $table->text('brand_description')->nullable();
            $table->text('all_products_services')->nullable();
            $table->string('brand_start_year')->nullable();
            $table->string('brand_location')->nullable();
            $table->integer('existing_outlets_count')->nullable();
            $table->text('expectation')->nullable();
            $table->text('support')->nullable();
            $table->text('procedure')->nullable();
            $table->integer('franchise_format_count')->nullable();
            $table->string('expand_locations')->nullable();
            // $table->string('indsutries')->nullable();
           
          
            $table->timestamps();
 
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->unsignedBigInteger('profile_id');
         

            // $table->string('current_plan_title')->nullable();
            // $table->decimal('current_plan_price', $precision = 10, $scale = 2)->nullable();

            // $table->string('brand_logo')->nullable();
            // $table->string('store_photo')->nullable();
            // $table->string('brochure')->nullable();
            // $table->string('business_proof')->nullable();

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('franchises');
    }

};


 
 
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
        Schema::create('formats', function (Blueprint $table) {

            $table->bigIncrements('id');
                $table->string('name')->nullable();
                $table->decimal('min_required_space')->nullable();
                $table->decimal('max_required_space')->nullable();
                $table->decimal('min_investment')->nullable();
                $table->decimal('max_investment')->nullable();
                $table->integer('brand_fee')->nullable();
                $table->integer('staff_number')->nullable();
                $table->text('charged_royality')->nullable();
                $table->integer('monthly_sales')->nullable();
                $table->integer('profit_margin')->nullable();
                $table->timestamps();

 


            $table->foreign('franchise_id')->references('id')->on('franchises');
            $table->unsignedBigInteger('franchise_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formats');
    }
};








 
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ["id"=> "1", "name"=> "Basic Plan", "content" => "Basic Advisor Profile, 2 Introductions,
            Lifetime Validity", "type"=>"Advisor", "price"=>"0.00","created_at" => null , "updated_at" => null, ],

            ["id"=> "2", "name"=> "Active Plan", "content" => "Premium Advisor Profile, 10 Introductions, Lifetime Validity,
            Metrics Of All Businesses, View Contact Details, View Business Name, Email Support", "type"=>"Advisor", "price"=>"645.00","created_at" => null , "updated_at" => null, ],

            ["id"=> "3", "name"=> "Premium Plan", "content" => "Premium Advisor Profile, 25 Introductions, Lifetime Validity,
            Metrics Of All Businesses, View Contact Details, View Business Name, Email Support", "type"=>"Advisor", "price"=>"605.00","created_at" => null , "updated_at" => null, ],

            ["id"=> "4", "name"=> "Yearly Plan", "content" => "Premium Advisor Profile, Unlimited Introductions, 1 year Validity,
            Metrics Of All Businesses, View Contact Details, View Business Name, Email Support", "type"=>"Advisor", "price"=>"1500.00","created_at" => null , "updated_at" => null, ],
        ];

        Plan::insert($data);
    }

}

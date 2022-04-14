<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Investor;
class InvestorsSeeder extends Seeder
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

            ["id"=> "1", "name"=>"NFT Dubai", "email"=>"nftdubai@gmail.com","country_code" => "+971","phone"=>"0502003001","interests" => "Investing Business",
            "investor_role"=>"Individual Investor/Buyer","interested_locations" => "United Arab Emirates, Malaysia","investment_min" => "100000","investment_max" =>"1000000",
            "currency" => "AED","company_name" => "NFT DUBAI", "designation" => "Project Manager","buiness_factors" => "Technological Development",
            "company_description" =>"NFT Transaction in dubai first time","user_id" => "101","created_at" => null , "updated_at" => null],

        ];

        Investor::insert($data);
    }
}

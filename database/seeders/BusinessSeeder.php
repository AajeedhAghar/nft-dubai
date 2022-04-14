<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Business;
class BusinessSeeder extends Seeder
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

            ["id"=> "1", "name"=>"NFT Dubai","company_name" => "","country_code" => "+971","phone"=>"0502003001", "email"=>"nftdubai@gmail.com","role" => "","establish_date" => "2016-03-21",
            "display_contact" => "",
            "interest" => "Investing Business", "location" => "United Arab Emirates", "employees_number" => "50", "entity_type" => "Private Limited Company","description"=>"", "highlights" => "", "facility_details" => "",
            "investor_role"=>"Individual Investor/Buyer","interested_locations" => "United Arab Emirates, Malaysia","investment_min" => "100000","investment_max" =>"1000000",
            "currency" => "AED","Avg_monthly_sales" => "NFT DUBAI", "year_sales" => "","EBITDA" => "assets", "Phisycal_assets_value" => "", "receiving_quotations" => "", "plan" => "",
            "user_id" => "101","created_at" => null , "updated_at" => null],

        ];

        Business::insert($data);
    }
}

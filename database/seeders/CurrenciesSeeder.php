<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrenciesSeeder extends Seeder
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
            ["id"=> "1", "name"=> "United Arab Emirates dirham", "short_name" => "AED", "api_id"=>"د.إ","created_at" => null , "updated_at" => null],
            ["id"=> "2", "name"=> "Dollars", "short_name" => "USD", "api_id"=>"$","created_at" => null , "updated_at" => null],
            ["id"=> "3", "name"=> "Riyals", "short_name" => "SAR", "api_id"=>"﷼","created_at" => null , "updated_at" => null],
            ["id"=> "4", "name"=> "Pounds", "short_name" => "GBP", "api_id"=>"£","created_at" => null , "updated_at" => null],
            ["id"=> "5", "name"=> "Euro", "short_name" => "EUR", "api_id"=>"€","created_at" => null , "updated_at" => null],
            ["id"=> "6", "name"=> "Rupees", "short_name" => "INR", "api_id"=>"₹","created_at" => null , "updated_at" => null],
            ["id"=> "7", "name"=> "Ringgits", "short_name" => "MYR", "api_id"=>"RM","created_at" => null , "updated_at" => null],
        ];

        Currency::insert($data);
    }
}

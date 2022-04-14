<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industry;
class IndustriesSeeder extends Seeder
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
            ["id"=>"1", "name" =>"Energy", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"2", "name" =>"Industrial", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"3", "name" =>"Finance", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"4", "name" =>"Healthcare", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"5", "name" =>"Technology", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"6", "name" =>"Building, Construction and Maintenance", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"7", "name" =>"Retail Shops", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"8", "name" =>"Education", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"9", "name" =>"Logistics", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"10", "name" =>"Media", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"11", "name" =>"Travel & Lesiure", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"12", "name" =>"Textiles", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"13", "name" =>"Business Services", "sector"=>"Industry Sector", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"14", "name" =>"Electronic Equipment", "sector"=>"Technology", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"15", "name" =>"Coal", "sector"=>"Energy", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"16", "name" =>"Integrated Oil and Gas", "sector"=>"Energy", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"17", "name" =>"Apparel Stores", "sector"=>"Retail Shops", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"18", "name" =>"Oil & Gas Exploration and Production", "sector"=>"Energy", "details"=>"", "created_at" => null , "updated_at" => null],
            ["id"=>"19", "name" =>"Freight & Logistics", "sector"=>"Logistics", "details"=>"", "created_at" => null , "updated_at" => null],

        ];

        Industry::insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
class ProfileSeeder extends Seeder
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
            ["id"=> "1", "type"=> "Business Profile", "activation" => "Active Business", "status"=>"onhold","created_at" => null , "updated_at" => null, "user_id"=>"1"],

        ];

        Profile::insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProfilePlan;
class ProfilePlanSeeder extends Seeder
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
            ["id"=> "1", "profile_id"=> "1", "plan_id"=>"1","created_at" => null , "updated_at" => null],

        ];

        ProfilePlan::insert($data);
    }
}

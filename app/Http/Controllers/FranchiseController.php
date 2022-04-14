<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Format;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\File;
use App\Models\IndustryProfile;
use App\Models\Socialmedia;
use App\Models\ProfilePlan;

class FranchiseController extends Controller
{
    
    public function index()
    {

    }

    
    public function create()
    {
        return view('franchises.create');

    }

    
    public function store(Request $request)
    {
      // 1. Saving Profile table Details
        $profile = new Profile;
        $profile->type =  'franchise';
        // $profile->user_id =   auth::user()->id;
        $profile->user_id =   1;

  
     if( !$profile->save())
    {

    }
    else
    {
        //  Saving Franchise table Details

        $franchise = new Franchise;
        $franchise->name = $request->name;
        $franchise->email = $request->email;
        $franchise->phone = $request->phone;
        $franchise->designation = $request->designation;
        $franchise->country_code = $request->country_code;
        $franchise->brand_name = $request->brand_name;
        $franchise->offering = $request->offering;
        $franchise->brand_description = $request->brand_description;
        $franchise->all_products_services = $request->all_products_services;
        $franchise->brand_start_year = $request->brand_start_year;
        $franchise->brand_location = $request->brand_location;
        $franchise->existing_outlets_count = $request->existing_outlets_count;
        $franchise->expectation = $request->expectation;
        $franchise->support = $request->support;
        $franchise->expand_locations = $request->expand_location;
        $franchise->procedure = $request->procedure;
        $franchise->franchise_format_count = $request->franchise_format_count;
        $franchise->profile_id = $profile->id;


      

      }


     
     if( $franchise->save())
     {
        //"franchise_format_count"
        $format = new Format;
        $format->franchise_id = $franchise->id;
        $format->name = $request->format_name;
        $format->min_required_space = $request->min_required_space;
        $format->max_required_space = $request->max_required_space;
        $format->min_investment = $request->min_investment;
        $format->max_investment = $request->max_investment;
        $format->brand_fee = $request->brand_fee;
        $format->staff_number = $request->staff_number;
        $format->charged_royality = $request->charged_royality;
        $format->monthly_sales = $request->monthly_sales;
        $format->profit_margin = $request->profit_margin;
  
        $format->save();

        $franchise->format()->save($format);
      
     }

     

            // 3.Saving Industry   Details (Loop)

            
            //  $industryProfilesModels = [];
            // foreach ($request->industryProfiles as $industryProfile) {
            //     $industryProfilesModels[] = new IndustryProfile($industryProfile);
            // }
            
            // $profile->industryProfiles()->saveMany($skillModels);
 
            if ($request->filled('industry_id'))
            {
            $industryProfile = new IndustryProfile;
            $industryProfile->profile_id=$profile->id;
            $industryProfile->industry_id=$request->industry_id;
            $profile->industryProfiles()->save($industryProfile);
            }

            //     $skillModels = [];
            // foreach ($request->skills as $skill) {
            //     $skillsModels[] = new Skill($skill);
            // }
            
            // $user->skills()->saveMany($skillModels);


            
            // // 4.Saving File   Details
             

            
            //     $fileModels = [];
            // foreach ($request->files as $file) {
            //     $skillsModels[] = new File($skill);
            // }
            
            // $user->skills()->saveMany($skillModels);



            // $request->validate([
            //     'file' => 'required|mimes:csv,txt,xlx,xls,pdf,png|max:2048'
            //     ]);
            // $file = new File;
            // if($request->file() && $request->filled('fileName')) {
            //     $fileName = $profile->name.$request->type.'_'.$req->file->getClientOriginalName();
            //     $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            //     $file->name =   $fileName;
            //     $file->type =   $request->type;
            //     $file->path = '/storage/' . $filePath;
            // return back()
            // ->with('success','File has been uploaded.')
            // ->with('file', $fileName);

            // $profile->files()->save($file);

            // 5.Saving Social Media   Details (validation)
            $socialmedia = new Socialmedia;
            $socialmedia->website = $request->website;
            $socialmedia->instagram = $request->instagram;
            $socialmedia->linkedin = $request->linkedin;
            $socialmedia->google = $request->google;
            $socialmedia->facebook = $request->facebook;
            $socialmedia->other = $request->other;
            $profile->socialmedia()->save($socialmedia);

            // // 6.Saving    Profileplan    Details

               
            //     $fileModels = [];
            // foreach ($request->files as $file) {
            //     $skillsModels[] = new File($skill);
            // }
            
            // $user->skills()->saveMany($skillModels);


            if ($request->filled('plan_id'))
            {
            $profilePlan = new ProfilePlan;
            $profilePlan->profile_id = $profile->id;
            $profilePlan->plan_id = $request->plan_id;
            $profile->profilePlans()->save($profilePlan);
            }
        
     
     

        

    //         $myItems = [
    //             ['title'=>'HD Topi','description'=>'It solution stuff'],
    //             ['title'=>'HD Topi 2','description'=>'It solution stuff 2'],
    //             ['title'=>'HD Topi 3','description'=>'It solution stuff 3']
    //         ];
    
    
    // DB::table("items")->insert($myItems);

// for()
// {
//     path?
//     $profile->files()->saveMany([
//         ['name' => 'Comment 1'],
//         ['file_name' => 'Comment 2'],
//         ['file_name' => 'Comment 2'],
//       ]);
// }
     
      
 
    }

    
    public function show(Franchise $franchise)
    {
        //
    }

    
    public function edit(Franchise $franchise)
    {
        //
    }

    
    public function update(Request $request, Franchise $franchise)
    {
        //
    }

  
    public function destroy(Franchise $franchise)
    {
        //
    }
}

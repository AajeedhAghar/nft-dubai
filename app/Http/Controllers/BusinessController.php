<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\File;
use App\Models\IndustryProfile;
use App\Models\Profile;
use App\Models\Socialmedia;
use App\Models\ProfilePlan;
use App\Models\Industry;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();

        return view('businesses.index', compact('businesses'));
    }


    public function create(Request $request)
    {

        $industries = Industry::all();
        $plans = Plan::all();

        return view('businesses.create' ,compact('businesses','industries','plans'));

    }

 
    public function store(Request $request)
    {
        //  dd($request);

        // 1. Saving Profile   Details
        $profile = new Profile;
        $profile->type =  'business';
        // $profile->user_id =   auth::user()->id;
        $profile->user_id =   1;


        if( !$profile->save())
        {
    
        }
        else
        {
        // 2.Saving Business   Details
    
            $business = new Business;
            $business->name = $request->name;
            $business->company_name = $request->company_name;
            $business->phone = $request->phone;
            $business->email = $request->email;
            $business->role = $request->role;
            $business->display_contact = 1;
            $business->display_company = 1;
            $business->establish_date = $request->establish_date;
            $business->interest = $request->interest;
            $business->location = $request->location;
            $business->employees_number = $request->employees_number;
            $business->entity_type = $request->entity_type;
            $business->description = $request->description;
            $business->highlights = $request->highlights;
            $business->description = $request->description;
            $business->highlights = $request->highlights;
            $business->facility_details = $request->facility_details;
            $business->currency = $request->currency;
            $business->Avg_monthly_sales = $request->Avg_monthly_sales;
            $business->year_sales = $request->year_sales;
            $business->EBITDA = $request->EBITDA;
            $business->assets = $request->assets;
            $business->Phisycal_assets_value = $request->Phisycal_assets_value;
            $business->receiving_quotations = $request->receiving_quotations;
            $profile->business()->save($business);

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

                // $skillModels = [];
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



            $request->validate([
                'business_proof' => 'mimes:csv,txt,pdf,png,pdf,docx,doc,txt|max:2048'
                ]);
            $file = new File;
                    if(isset($request->business_proof) ){
                $fileName = $profile->name.'_'.$request->type.'_'.$request->business_proof->getClientOriginalName();
                $filePath = $request->file('business_proof')->storeAs('uploads\businesses', $fileName, 'public');
                $file->name =   $fileName;
                $file->type =   $request->type;
                $file->path = '/storage/' . $filePath;
            // return back()
            // ->with('success','File has been uploaded.')
            // ->with('file', $fileName);

            $profile->files()->save($file);
                }
                else 
                {
                    dd("file");
                }

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
            // if ($request->filled('plan_id'))
            // {
            // $profilePlan = new ProfilePlan;
            // $profilePlan->profile_id = $profile->id;
            // $profilePlan->plan_id = $request->plan_id;
            // $profile->profilePlans()->save($profilePlan);
            // }
        
     
     

        

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
  

return back()->with('message', 'item stored successfully');

          }
        }


    
    public function show(Business $business)
    {
        return view('businesses.show', compact('business'));
    }
 
    public function edit(Business $business)
    {
        return view('businesses.edit', compact('business'));
    }

    
    public function update(Request $request, Business $business)
    {
        $business->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    
    public function destroy(Business $business)
    {
        $business->delete();

        return back()->with('message', 'item deleted successfully');
    }
}

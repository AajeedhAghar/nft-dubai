<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InvestorController extends Controller
{
    
    public function index()
    {

        $investors = Investor::all();

        return view('investors.index', compact('investors'));
    }

     
    public function create(Request $request)
    {
        return view('investors.create');
      
    }
 
    public function store(Request $request)
    {
      
           // 1. Saving Profile table Details
           $profile = new Profile;
           $profile->type =  'investor';
           // $profile->user_id =   auth::user()->id;
           $profile->user_id =   1;
   
     
        if( !$profile->save())
       {
   
       }
       else
       {
           //  Saving Investor table Details
   
           $investor = new Investor;
           $investor->name = $request->name;
           $investor->email = $request->email;
           $investor->phone = $request->phone;
           $investor->country_code = $request->country_code;
           $investor->interests = $request->interests;
           $investor->investor_role = $request->investor_role;
           $investor->interested_locations = $request->interested_locations;
           $investor->investment_max = $request->investment_max;
           $investor->investment_min = $request->investment_min;
           $investor->currency = $request->currency;
           $investor->company_name = $request->company_name;
           $investor->designation = $request->designation;
           $investor->business_factors = $request->business_factors;
           $investor->company_description = $request->company_description;
       
   
   
   
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

     
    public function show(Investor $investor)
    {
        return view('investors.show', compact('investor'));
        
    }

    
    public function edit(Investor $investor)
    {
        return view('investors.edit', compact('investor'));
      
    }

     
    public function update(Request $request, Investor $investor)
    {
        $investor->update($investor->all());

        return back()->with('message', 'item updated successfully');
    }

   
    public function destroy(Investor $investor)
    {
        $investor->delete();

        return back()->with('message', 'item deleted successfully');
}
}

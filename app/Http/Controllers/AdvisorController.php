<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\IndustryProfile;
use App\Models\Socialmedia;

class AdvisorController extends Controller
{
   
    public function index()
    {
        
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        
        // 1. Saving Profile   Details
        $profile = new Profile;
        $profile->type =  'advosir';
        $profile->user_id =   auth::user()->id;


        if( !$profile->save())
        {
    
        }
        else
        {
        // 2.Saving Advisor   Details


    
         $advisor = new Advisor;
         $profile->advisor()->save($advisor);


         // 3.Saving Industry   Details (Loop)

            
         $industryProfilesModels = [];
         foreach ($request->industryProfiles as $industryProfile) {
             $industryProfilesModels[] = new IndustryProfile($industryProfile);
         }
         
         $profile->industryProfiles()->saveMany($skillModels);

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

         $profile->files()->save($file);

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



  

}

          }


     
    public function show(Advisor $advisor)
    {
        //
    }

     
    public function edit(Advisor $advisor)
    {
        //
    }

   
    public function update(Request $request, Advisor $advisor)
    {
        //
    }

   
    public function destroy(Advisor $advisor)
    {
        //
    }
}




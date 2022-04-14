<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    
    public function index()
    {
      
    }

  
    public function create()
    {
        return view( );
    }
 
    public function store(Request $request)
    {
    }

  
    public function show(Activity $activity)
    {
        //
    }

   
    public function edit(Activity $activity)
    {
        //
    }
 
    public function update(Request $request, Activity $activity)
    {
        //
    }

   
    public function destroy(Activity $activity)
    {
        //
    }
}

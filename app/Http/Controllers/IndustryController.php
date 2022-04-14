<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    
    public function index()
    {
        $industries = Industry::all();

        return view('industries.index', compact('industries'));
    }

    
    public function create()
    {
        return view('industries.create');

    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'short_name' => 'required|max:20',
            
        ]);
      
        Industry::create($request->all());
        return redirect()->route('industries.index')
                        ->with('success','item created successfully.');
    }
 
    public function show(Industry $industry)
    {
        return view('industries.show', compact('industry'));

    }

   
    public function edit(Industry $industry)
    {
        return view('industries.edit', compact('industry'));

    }

   
    public function update(Request $request, Industry $industry)
    {
        $industry->update($request->all());

    return back()->with('message', 'item updated successfully');
    }

    
    public function destroy(Industry $industry)
    {
        
    $industry->delete();

    return back()->with('message', 'item deleted successfully');
    }
}


 



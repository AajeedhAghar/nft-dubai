<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
class PlanController extends Controller
{

    public function index()
    {
        $plans = Plan::all();

        return view('plans.index', compact('plans'));
    }

    public function create()
    {
        return view('plans.create');

    }


    public function store(Request $request)
    {
        $request->validate([

        ]);

<<<<<<< HEAD
 
      
        Plan::create($request->all());
        return redirect()->route('plans.index')
                        ->with('success','item created successfully.');


       
=======

>>>>>>> f95d1f4231085134371eabaa6ca63aedf743bcb8
        return redirect()->route('plans.index')
                        ->with('success','item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        return view('plans.show', compact('plan'));

    }


    public function edit(Plan $plan)
    {
        return view('plans.edit', compact('plan'));

    }

    public function update(Request $request, Plan $plan)
    {
        $plan->update($request->all());

        return back()->with('message', 'item updated successfully');
    }


    public function destroy(Plan $plan)
    {
        $plan->delete();

        return back()->with('message', 'item deleted successfully');
    }
}




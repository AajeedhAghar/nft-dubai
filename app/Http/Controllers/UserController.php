<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

    public function index()
    {
        $businesses = Business::all();

        return view('businesses.index', compact('businesses'));
    }


    public function create()
    {
        return view('businesses.create');
    }


    public function store(Request $request)
    {
        Business::create($request->all());

        return back()->with('message', 'item stored successfully');
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

    public function profileActivation()
    {

    }

    public function profileStatus()
    {

    }

    public function changeRole()
    {

    }

}

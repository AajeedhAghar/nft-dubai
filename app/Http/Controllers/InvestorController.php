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

        return view('layouts.investor.createInvestorProfile');

    }

    public function store(Request $request)
    {


        $request->merge(['user_id' => Auth::user()->id]);
        Investor::create($request->all());

        return back()->with('success', 'Investor created successfully..');

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

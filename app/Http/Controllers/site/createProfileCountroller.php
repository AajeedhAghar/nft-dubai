<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class createProfileCountroller extends Controller
{
    public function creteBusiness(){
        return view('layouts.business.createBusinessProfile');
    }
    public function creteFranchise(){
      return view('layouts.franchise.createFranchiseProfile');
    }
    public function creteInvestor(){
       return view('layouts.investor.createInvestorProfile');
    }
}

@extends('layouts.master')
@section('metaDesc')
@endsection

@section('links')
    <style>
        .create-main .container-fluid .row-custon .col-create-otr .col-create-inr .form-main .single-copy {
            display: flex;
        }

        .create_business_profile .input-otr-select{
            margin-left: -30px;
        }
    </style>



@endsection
@section('pageName') @lang('pagesname.website') @endsection

@section('body')
    <div class="create-main create_business_profile">
        <div class="container-fluid">
            <div class="row create-inr">
                <div class="col-lg-8 col-heading-otr">
                    <div class="heading-inr">
                        <h3 class="heading heading-h3">Register Investor Profile</h3>
                    </div>
                </div>
            </div>
            <span class="line"></span>
            <div class="row row-custon">
                <div class="col-lg-8 col-create-otr">
                    <div class="col-create-inr">
                        <form class="form-main" method="post">
                            @csrf
                            <h4 class="head-2 heading-h4">Confidential Information</h4>
                            <div class="row">
                                <div class="col-md-6 input-otr">
                                    <label for="name" class="label form-label">Your Full Name</label>
                                    <input type="text" class="input" id="name" name="name">
                                </div>
                                <div class="col-md-6 input-otr">
                                    <label for="investor_email" class="label form-label">Enter official email for quick verification</label>
                                    <input type="email" class="input" id="investor_email" name="investor_email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 input-otr">
                                    <label for="phone_number" class="label form-label">Your Mobile Number</label>
                                    <input type="number" class="input" id="phone_number " name="phone_number">
                                </div>
                            </div>

                            <span class="line"></span>

                            <h4 class="head-2 heading-h4">Your Requirements</h4>
                            <div class="row mb-3">
                                <label for="investor_interested" class="col-sm-3 col-form-label">You are interested in</label>
                                <div class="col-sm-7 input-otr" id="investor_interested">
                                    <div class="check">
                                        <label>
                                    <span class="check-inner">
                                        <input type="checkbox" class="input-check opacity-0 absolute" name="intersted[]">
                                        <svg class="fill-current" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="8" fill="#366CE3"/></svg>
                                    </span>
                                            <span class="select-none">Acquiring / Buying a Business</span>
                                        </label>
                                    </div>
                                    <div class="check">
                                        <label>
                                    <span class="check-inner">
                                        <input type="checkbox" class="input-check opacity-0 absolute" name="intersted[]">
                                        <svg class="fill-current" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="8" fill="#366CE3"/></svg>
                                    </span>
                                            <span class="select-none">Investing in a Business</span>
                                        </label>
                                    </div>
                                    <div class="check">
                                        <label>
                                    <span class="check-inner">
                                        <input type="checkbox" class="input-check opacity-0 absolute" name="intersted[]">
                                        <svg class="fill-current" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="8" fill="#366CE3"/></svg>
                                    </span>
                                            <span class="select-none">Lending to a Business</span>
                                        </label>
                                    </div>
                                    <div class="check">
                                        <label>
                                    <span class="check-inner">
                                        <input type="checkbox" class="input-check opacity-0 absolute" name="intersted[]">
                                        <svg class="fill-current" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="8" fill="#366CE3"/></svg>
                                    </span>
                                            <span class="select-none">Buying Property / Plant / Machinery</span>
                                        </label>
                                    </div>
                                    <div class="check">
                                        <label>
                                    <span class="check-inner">
                                        <input type="checkbox" class="input-check opacity-0 absolute" name="intersted[]">
                                        <svg class="fill-current" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="8" fill="#366CE3"/></svg>
                                    </span>
                                            <span class="select-none">Taking up a Franchise / Distributorship / Sales Agency</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="row copyies-main single-copy">
                                <label for="select_investor_type" class="col-sm-3 col-form-label">You are a(n)</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="" id="select_investor_type" name="type">
                                        <option value="Energy">Individual Investor / Buyer</option>
                                        <option value="industry">Corporate Investor / Buyer</option>
                                        <option value="Finance">Lender/Bank</option>
                                        <option value="Finance">Lender/Financial Institution</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row copyies-main single-copy">
                                <label for="select_investor_industry" class="col-sm-3 col-form-label">Select industries you are interested in</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="form-control" id="select_investor_industry" name="industry">
                                        <option value="Energy">Energy</option>
                                        <option value="industry">industry</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Healthcare">Healthcare</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row copyies-main single-copy">
                                <label for="select_locations_interested" class="col-sm-3 col-form-label">Select locations you are interested in</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="form-control" id="select_investor_industry" name="select_locations_interested" multiple>
                                        <option value="asia">asia</option>
                                        <option value="africa">africa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_investment" class="col-sm-3 label">Provide your investment range</label>
                                <div class="col-sm-3 input-otr">
                                    <input type="number" class="input" placeholder="" id="franchise_investment" name="min_investment">
                                </div>
                                <div class="col-sm-1 ">
                                    <span class="input-group-text ">To</span>
                                </div>
                                <div class="col-sm-3" input-otr>
                                    <input type="number" class="input" placeholder="" name="max_investment ">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="investor_location" class="col-sm-3 col-form-label">Your current location</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="investor_location" name="investor_location">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="investor_workAt" class="col-sm-3 col-form-label">Company you work at</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="investor_workAt" name="investor_workAt">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="investor_designation" class="col-sm-3 col-form-label">Your designation</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="investor_designation" name="designation">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="investor_LinkedIn" class="col-sm-3 col-form-label">Your LinkedIn profile</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="investor_LinkedIn" name="investor_LinkedIn">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="company_sector" class="col-sm-3 col-form-label">Your company's sector</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="company_sector" name="company_sector">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="investor_factors " class="col-sm-3 col-form-label">Factors you look for in a business</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="investor_factors" name="investor_factors "></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="about_yourself " class="col-sm-3 col-form-label">About yourself</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="about_yourself" name="about_yourself "></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="investor_picture" class="col-sm-3 label">Profile picture</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="investor_picture" name="investor_picture">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="investor_proof" class="col-sm-3 label">Attach proof of business for faster verification</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="investor_proof" name="investor_proof">
                                </div>
                            </div>


                            <h4 class="head-2 heading-h4">Select a Plan</h4>
                            <div class="col-sm-10 ">
                                <div class=" input-otr">
                                    <input class="input-check" type="radio" name="plan_investor" id="investor_active">
                                    <label class="label" for="investor_active">
                                        Active Plan
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10 ">
                                <div class=" input-otr">
                                    <input class="input-check" type="radio" name="plan_investor" id="investor_premium">
                                    <label class="label" for="investor_premium">
                                        Premium Plan
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10 ">
                                <div class=" input-otr">
                                    <input class="input-check" type="radio" name="plan_investor" id="yearly_premium">
                                    <label class="label" for="yearly_premium">
                                        Yearly Plan
                                    </label>
                                </div>
                            </div>


                            </br>
                            <div class="col-sm-10 ">
                                <div class="input-otr">
                                    <input class="input-check" type="checkbox" id="gridCheck1" checked>
                                    <label class="label" for="gridCheck1">
                                        I accept the Terms of Engagement
                                    </label>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection

@section('scripts')

    <script>

    </script>

@endsection

@extends('layouts.master')
@section('metaDesc')
@endsection

@section('links')
    <style>
        .create-main .container-fluid .row-custon .col-create-otr .col-create-inr .form-main .single-copy {
            display: flex;
        }
        .create_franchise_profile .input-otr-select{
            margin-left: -30px;
        }

    </style>
@endsection
@section('pageName') @lang('pagesname.website') @endsection

@section('body')
    <div class="create-main create_franchise_profile">
        <div class="container-fluid">
            <div class="row create-inr">
                <div class="col-lg-8 col-heading-otr">
                    <div class="heading-inr">
                        <h3 class="heading heading-h3">Register Your Franchise / Distributorship Profile</h3>
                    </div>
                </div>
            </div>
            <span class="line"></span>
            <div class="row row-custon">
                <div class="col-lg-8 col-create-otr">
                    <div class="col-create-inr">
                        <form class="form-main" method="post">
                            <h4 class="head-2 heading-h4">Confidential Information</h4>
                            <div class="row input-otr">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Authorized Person Name</label>
                                    <input type="text" class="input" id="name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Enter official email for quick verification</label>
                                    <input type="text" class="input" id="email" name="email">
                                </div>
                            </div>
                            <div class="row input-otr">
                                <div class="col-md-6">
                                    <label for="phone_number " class="form-label">Mobile Number</label>
                                    <input type="number" class="input" id="phone_number " name="phone_number ">
                                </div>
                                <div class="col-md-6">
                                    <label for="designation" class="form-label">Your Designation</label>
                                    <input type="text" class="input" id="designation" name="designation">
                                </div>
                            </div>
                            <span class="line"></span>

                            <h4 class="head-2 heading-h4">Brand Details</h4>
                            <div class="row mb-3">
                                <label for="brand_name" class="col-sm-3 label">Brand Name</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="brand_name" name="brand_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="brand_name" class="col-sm-3 label">Website</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="brand_name" name="brand_name">
                                </div>
                            </div>
                            <fieldset class="row mb-6">
                                <legend class="label col-sm-3 pt-0">I am offering</legend>

                                <div class="col-sm-7">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="franchise_offering" id="franchise_opportunity" value="Franchise Opportunity" checked>
                                        <label class="form-check-label" for="franchise_opportunity">
                                            Franchise Opportunity
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="franchise_offering" id="dealership_opportunity" value="Dealership Opportunity">
                                        <label class="form-check-label" for="dealership_opportunity">
                                            Dealership Opportunity
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="franchise_offering" id="reseller_opportunity" value="Reseller Opportunity">
                                        <label class="form-check-label" for="reseller_opportunity">
                                            Reseller Opportunity
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="franchise_offering" id="distributor_opportunity" value="Distributor Opportunity">
                                        <label class="form-check-label" for="distributor_opportunity">
                                            Distributor Opportunity
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="franchise_offering" id="sales_partner_pportunity" value="Sales Partner Opportunity">
                                        <label class="form-check-label" for="sales_partner_pportunity">
                                            Sales Partner Opportunity
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row copyies-main single-copy">
                                <label for="select_franchise_industry" class="col-sm-3 label">Select your Industry</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="" id="select_franchise_industry" name="industry">
                                        <option value="Energy">Energy</option>
                                        <option value="industry">industry</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Healthcare">Healthcare</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_description" class="col-sm-3 label">About Your Brand</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="franchise_description" name="description "></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_services" class="col-sm-3 label">Mention all products/services your brand provides</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="franchise_services" name="franchise_services "></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="brand_start" class="col-sm-3 label">When did your brand start operations?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="brand_start" name="brand_start">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_located" class="col-sm-3 label">Where is your brand's headquarters located?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class=" input" id="franchise_located" name="franchise_located">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_outlets" class="col-sm-3 label">How many outlets do you already have globally?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="franchise_outlets" name="franchise_outlets">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_expectation" class="col-sm-3 label">What is your expectation from the user who takes up this opportunity</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="franchise_expectation" name="franchise_expectation "></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_support" class="col-sm-3 label">What kind of support can the franchisee expect from you?</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="franchise_support" name="franchise_support "></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_procedure" class="col-sm-3 label">What is the procedure to obtain your Franchise?</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="franchise_procedure" name="franchise_procedure "></textarea>
                                </div>
                            </div>
                            <div class="row copyies-main single-copy">
                                <label for="select_franchise_expand" class="col-sm-3 label">Mention cities/states/countries you want to expand in</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="form-control" id="select_franchise_expand" name="franchise_expand">
                                        <option value="africa">africa</option>
                                        <option value="asia">asia</option>
                                        <option value="north ameriac">north ameriac</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row copyies-main single-copy">
                                <label for="franchise_Formats" class="col-sm-3 label">How many Franchise Formats do you provide?</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="form-control" id="franchise_Formats" name="franchise_Formats">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <span class="line"></span>

                            <h4 class="head-2 heading-h4">Format 1</h4>
                            <div class="row mb-3">
                                <label for="franchise_format_name" class="col-sm-3 label">Format Name</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="franchise_format_name" name="format_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_format_name" class="col-sm-3 label">Space Required</label>
                                <div class="col-sm-4 input-otr">
                                    <input type="number" class="input" placeholder="Min Squre ft" name="min_required_space ">
                                </div>
                                <div class="col-sm-1 ">
                                    <span class="input-group-text ">To</span>
                                </div>
                                <div class="col-sm-4" input-otr>
                                    <input type="number" class="input" placeholder="Max Squre ft" name="max_required_space ">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="investment_min" class="col-sm-3 form-label">Total Investment Needed</label>
                                <div class="col-sm-4 input-otr">
                                    <input id="investment_min" type="number" class="input" placeholder="Min Investment" name="min_investment">
                                </div>
                                <div class="col-sm-1">
                                    <span class="input-group-text">To</span>
                                </div>
                                <div class="col-sm-4 input-otr">
                                    <input type="number" class="input" placeholder="Max Investment" name="max_investment">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchise_brand_investment" class="col-sm-3 label">What is the brand fee included in this investment?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="text" class="input" id="franchise_brand_investment" name="brand_investment">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="staff_number" class="col-sm-3 label">Average number of staff required</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="staff_number" name="staff_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="charged_royality " class="col-sm-3 label">Mention details of Royalty charged or Commission paid</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="charged_royality" name="highlights" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="average_monthly" class="col-sm-3 label">Average Monthly Sales per franchisee</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="average_monthly" name="average_monthly">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="average_EBITDA" class="col-sm-3 label">Average EBITDA / Operating Profit Margin of the franchise</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="average_EBITDA" name="average_EBITDA">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="franchisee_photos" class="col-sm-3 label">Add Brand Logo</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="franchisee_photos" name="franchisee_photos">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="photos_Stores" class="col-sm-3 label">Add Photos of your Facility / Stores</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="photos_Stores" name="photos_Stores">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchisee_documents" class="col-sm-3 label">Add Brochures & Documents</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="franchisee_documents" name="franchisee_documents">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="franchisee_proof" class="col-sm-3 label">Attach Proof of Business </label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="franchisee_proof" name="franchisee_proof">
                                </div>
                            </div>

                            <h4 class="head-2 heading-h4">Select a Plan</h4>
                            <div class="col-sm-10 ">
                                <div class=" input-otr">
                                    <input class="input-check" type="radio" name="plan_franchise" id="premium_franchise">
                                    <label class="label" for="premium_franchise">
                                        Premium Franchise
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class=" input-otr">
                                    <input class="input-check" type="radio" name="plan_franchise" id="professional_franchise">
                                    <label class="label" for="professional_franchise">
                                        Professional Franchise
                                    </label>
                                </div>
                            </div>


                        </br>
                            <div class="col-sm-10 ">
                                <div class="input-otr">
                                    <input class="input-check" type="checkbox" id="gridCheck1">
                                    <label class="label" for="gridCheck1">
                                        I accept 1% finder's fee (payable post transaction) and other terms of engagement
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


@endsection

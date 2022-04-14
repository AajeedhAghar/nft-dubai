@extends('layouts.master')
@section('metaDesc')
@endsection

@section('links')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .create-main .container-fluid .row-custon .col-create-otr .col-create-inr .form-main .single-copy {
            display: flex;
        }

         select{
            width: 100%;
            background-color: #F2F2F2;
            color: #999999;
            padding: 10px 24px;
            border-radius: 16px;
            font-size: 16px;
            line-height: 32px;
            font-family: "DMSans-Bold";

        }
          .select-styled ,  .select-options{
            display: none;
        }

        .select2-container--default .select2-selection--multiple , .select2-container--default .select2-selection--single {
            background-color: #F2F2F2;
            font-size: 16px;
            font-family: "DMSans-Bold";
            border: 0.5px solid #e6e6e6;
            border-radius: 4px;

            height: 40px;
        }

        .select-new{
            margin: 0 0 36px 0;
        }
        .input {
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #F2F2F2;
            font-size: 16px;
            line-height: 32px;
            font-family: "DMSans-Bold";
            color: #000000;
            border: none;
            transition: 0.2s;
            margin-left: 27px;
        }
        .create-main .container-fluid .row-custon .col-create-otr .col-create-inr .form-main .input-otr .input {
            margin-left: 0;
        }
        .form-label {
            margin-left: 36px;
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
                        <h3 class="heading heading-h3">Register Business Profile</h3>
                    </div>
                </div>
            </div>
            <span class="line"></span>
            <div class="row row-custon">
                <div class="col-lg-8 col-create-otr">
                    <div class="col-create-inr">
                        <form class="form-main" method="post" action=#"">
                            @csrf
                            <h4 class="head-2 heading-h4">Confidential Information</h4>
                            <div class="row">
                                <div class="col-md-6 input-otr">
                                    <label for="name" class="label form-label">Your Name</label>
                                    <input type="text" class="input" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 input-otr">
                                    <label for="company_name" class="label form-label">Company Name</label>
                                    <input type="text" class="input" id="company_name" name="company_name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 input-otr">
                                    <label for="phone_number" class="label form-label">Mobile Number</label>
                                    <div class="row">
                                        @include('layouts.helper.code_country')
                                        <div class="col-sm-6">
                                            <input type="number" class="input" id="phone_number " name="phone_number" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 input-otr">
                                    <label for="official_email" class="label form-label">Enter official email for quick verification</label>
                                    <input type="email" class="input" id="official_email" name="email" required>
                                </div>
                            </div>

                            <span class="line"></span>

                            <h4 class="head-2 heading-h4">Business Information</h4>

                            <div class="row select-new">
                                <label for="select_business_type" class="col-sm-3 col-form-label">You are a(n)</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="" id="select_business_type" name="type" >
                                        <option value="Business_Owner">Business Owner / Director</option>
                                        <option value="Management">Management Member</option>
                                        <option value="Advisor">Advisor / Business Broker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row select-new">
                                <label for="select_business_interest" class="col-sm-3 col-form-label">You are interested in</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="form-control" id="select_business_interest" name="interest">
                                        <option value="FULL_SALE">Full sale of business</option>
                                        <option value="FINANCIAL_INVESTMENT">Partial stake sale of business/investment</option>
                                        <option value="BUSINESS_LOAN">Loan for business</option>
                                        <option value="ASSET_SALE">Selling or Leasing out Business Assets</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row select-new">
                                <label for="business_established" class="col-sm-3 col-form-label">When was the business established?</label>
                                <div class="col-sm-7 input-otr-select">
                                    @include('layouts.helper.established_date')
                                </div>
                            </div>
                            <div class="row select-new">
                                <label for="select_business_industry" class="col-sm-3 col-form-label">Select business' industry</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="form-control" id="select_business_industry" name="industry[]" multiple>
                                        <option value="Energy">Energy</option>
                                        <option value="industry">industry</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Healthcare">Healthcare</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Building">Building, Construction and Maintenance</option>
                                        <option value="Food">Food & Beverage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row select-new">
                                <label for="business_located" class="col-sm-3 col-form-label">Where is the business located / headquartered?</label>
                                <div class="col-sm-7 input-otr-select">
                                    @include('layouts.helper.country_located')
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_employees_number" class="col-sm-3 col-form-label">How many permanent employees does the business have?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="business_employees_number" name="employees_number">
                                </div>
                            </div>
                            <div class="row select-new">
                                <label for="select_entity_type" class="col-sm-3 col-form-label">Select business legal entity type</label>
                                <div class="col-sm-7 input-otr-select">
                                    <select class="form-control" id="select_entity_type" name="entity_type">
                                        <option value="SOLE_PROPRIETORSHIP">Sole Proprietorship/Sole Trader</option>
                                        <option value="PARTNERSHIP">General Partnership</option>
                                        <option value="LIMITED_LIABILITY_PARTNERSHIP">Limited Liability Partnership (LLP)</option>
                                        <option value="PRIVATE_LIMITED_COMPANY">Limited Liability Company (LLC)</option>
                                        <option value="PUBLIC_LIMITED_COMPANY">Private Limited Company</option>
                                        <option value="PUBLIC_LIMITED_COMPANY">Public Limited Company</option>
                                        <option value="S_CORPORATION">S Corporation</option>
                                        <option value="C Corporation">C Corporation</option>
                                        <option value="OTHER">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_description" class="col-sm-3 label">Describe the business in a single line</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="business_description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_highlights " class="col-sm-3 col-form-label">Mention highlights of the business including number of clients, growth rate, promoter experience, business relationships, awards, etc</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="business_highlights" name="highlights"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_products" class="col-sm-3 col-form-label">List all products and services of the business</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="business_products" name="products"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_facility_details" class="col-sm-3 col-form-label">Describe your facility such as built-up area, number of floors, rental/lease details</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="business_facility_details" name="facility_details"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="avg_monthly_sales" class="col-sm-3 col-form-label">At present, what is your average monthly sales?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="avg_monthly_sales" name="avg_monthly_sales">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="year_sales" class="col-sm-3 col-form-label">What was your latest reported yearly sales?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="year_sales" name="year_sales">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_EBITDA" class="col-sm-3 col-form-label">What is the EBITDA / Operating Profit Margin Percentage?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="business_EBITDA" name="EBITDA">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_assets" class="col-sm-3 col-form-label">List all the tangible and intangible assets the buyer would get</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="business_assets" name="assets"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Phisycal_assets_value" class="col-sm-3 col-form-label">What is the value of physical assets owned by the business?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="Phisycal_assets_value" name="Phisycal_assets_value">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="value_collateral" class="col-sm-3 col-form-label">What is the value of collateral you can provide?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="value_collateral" name="value_collateral">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="loan_amount" class="col-sm-3 col-form-label">What loan amount are you seeking?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="loan_amount" name="loan_amount">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="maximum_yearly_interest" class="col-sm-3 col-form-label">What is the maximum yearly interest you can pay?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="maximum_yearly_interest" name="maximum_yearly_interest">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="years_repay_loan" class="col-sm-3 col-form-label">In how many years will you repay the loan?</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="number" class="input" id="years_repay_loan" name="years_repay_loan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="reason_seeking" class="col-sm-3 col-form-label">Reason for seeking a loan</label>
                                <div class="col-sm-7 input-otr">
                                    <textarea class="textarea input" id="reason_seeking" name="reason_seeking"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="business_photos" class="col-sm-3 label">Add business and product photos</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="business_photos" name="business_photos">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_documents" class="col-sm-3 label">Add business documents</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="business_documents" name="business_documents">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_proof" class="col-sm-3 label">Attach proof of business for faster</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="business_proof" name="business_proof">
                                </div>
                            </div>


                            <h4 class="head-2 heading-h4">Select a Plan</h4>
                            <div class="col-sm-10 ">
                                <div class=" input-otr">
                                    <input class="input-check" type="radio" name="plan_business" id="active_business">
                                    <label class="label" for="active_business">
                                        Active Business
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10 ">
                                <div class=" input-otr">
                                    <input class="input-check" type="radio" name="plan_business" id="fast_track_Business">
                                    <label class="label" for="fast_track_Business">
                                        Fast Track Business
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10 ">
                                <div class=" input-otr">
                                    <input class="input-check" type="radio" name="plan_business" id="professional_business">
                                    <label class="label" for="professional_business">
                                        Professional Business
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            //create business profile
            $('#select_business_type').select2();
            $('#select_business_interest').select2();
            //$('#select_business_industry').select2();
            $("#select_business_industry").select2({
                maximumSelectionLength: 2
            });
            $("#select_country").select2({
                maximumSelectionLength: 2
            });
            $('#select_entity_type').select2();
            $('#countryCode').select2();
            $('#business_established').select2();


        });
    </script>

@endsection

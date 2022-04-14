 <html>
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
                        <form class="form-main" method="post"   action="{{ route('businesses.store') }}"  enctype="multipart/form-data">
                      
                            <div class="row mb-3">
                                <label for="business_located" class="col-sm-3 col-form-label">Where is the business located / headquartered?</label>
                            <div class="row mb-3">
                                <label for="business_proof" class="col-sm-3 label">Attach proof of business for faster</label>
                                <div class="col-sm-7 input-otr">
                                    <input type="file" class="form-control" id="business_proof" name="business_proof">
                                </div>
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

    </html>
 
{{-- 
<div class="swiper-slide" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);height: 1000px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center" style="color: rgb(0,167,255);margin-bottom: 19px;">STEP 2: DEPENDENT(s) or BENEFICIARY(ies)</h3>
                <form action="function/bedata.func.php" method="post" class="text-center d-flex d-xl-flex flex-row justify-content-center align-items-center flex-wrap justify-content-xl-center align-items-xl-center">
                    <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">SPOUSE DATA</h3>
                    
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">SPOUSE NAME</p>

                        <input class="form-control" type="text" name="sfname" value="" placeholder="First Name" disabled>
                        <input class="form-control" type="text" name="smname" value="" placeholder="Middle Name" disabled>
                        <input class="form-control" type="text" name="slname" value="" placeholder="Last Name" disabled>
                        <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                        <input name="sbdate" class="form-control" value="" type="date">
                      </div>
                      
                      <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">CHILDREN DATA</h3>
                     
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">CHILDREN&nbsp; NAME</p>
                        <input class="form-control" type="text" name="cfname1" value="" placeholder="First Name" disabled>
                        <input class="form-control" type="text" name="cmname1" value="" placeholder="Middle Name" disabled>
                        <input class="form-control" type="text" name="clname1" value="" placeholder="Last Name" disabled>
                        <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                        <input class="form-control" name="cbdate1" value="" type="date" disabled>
                      </div>
                     
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">FULL NAME</p>
                        <input class="form-control" type="text" name="ofname1" value=""  placeholder="First Name" disabled>
                        <input class="form-control" type="text" name="omname1" value=""  placeholder="Middle Name" disabled>
                        <input class="form-control" type="text" name="olname1" value=""  placeholder="Last Name" disabled>
                        <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                        <input class="form-control" name="obdate1" value=""  type="date" disabled>
                      </div>
                     

                    </form>
            </div>
        </div>
    </div>
</div> --}}

  <div class="swiper-slide" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);height: 1000px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h3 class="text-center" style="color: rgb(0,167,255);margin-bottom: 19px;">STEP 2: DEPENDENT(s) or BENEFICIARY(ies)</h3>
                  <form action="function/bedata.func.php" method="post" class="text-center d-flex d-xl-flex flex-row justify-content-center align-items-center flex-wrap justify-content-xl-center align-items-xl-center">
                      <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">SPOUSE DATA</h3>
                        <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">SPOUSE NAME</p>
                          <input type="hidden" name="userid" value="">
                          <input class="form-control" type="text" name="sfname" placeholder="First Name">
                          <input class="form-control" type="text" name="smname" placeholder="Middle Name">
                          <input class="form-control" type="text" name="slname" placeholder="Last Name">
                          <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                          <input name="sbdate" class="form-control" type="date">
                        </div>
                        <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">CHILDREN DATA</h3>
                        <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">CHILDREN&nbsp; NAME</p>
                          <input class="form-control" type="text" name="cfname1" placeholder="First Name">
                          <input class="form-control" type="text" name="cmname1" placeholder="Middle Name">
                          <input class="form-control" type="text" name="clname1" placeholder="Last Name">
                          <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                          <input class="form-control" name="cbdate1" type="date">
                        </div>
                        <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">CHILDREN&nbsp; NAME</p>
                          <input class="form-control" type="text" name="cfname2" placeholder="First Name">
                          <input class="form-control" type="text" name="cmname2" placeholder="Middle Name">
                          <input class="form-control" type="text" name="clname2" placeholder="Last Name">
                          <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                          <input class="form-control" name="cbdate2" type="date">
                        </div>
                        <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">CHILDREN&nbsp; NAME</p>
                          <input class="form-control" type="text" name="cfname3" placeholder="First Name">
                          <input class="form-control" type="text" name="cmname3" placeholder="Middle Name">
                          <input class="form-control" type="text" name="clname3" placeholder="Last Name">
                          <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                          <input class="form-control" name="cbdate3" type="date">
                        </div>

                        <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;"><br>Other Beneficiary/IES(If without spouse &amp; child and parents are both deceased:<br><br></h3>
                        <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">FULL NAME</p>
                          <input class="form-control" type="text" name="ofname1" placeholder="First Name">
                          <input class="form-control" type="text" name="omname1" placeholder="Middle Name">
                          <input class="form-control" type="text" name="olname1" placeholder="Last Name">
                          <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                          <input class="form-control" name="obdate1" type="date">
                        </div>
                        <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">FULL NAME</p>
                          <input class="form-control" type="text" name="ofname2" placeholder="First Name">
                          <input class="form-control" type="text" name="omname2" placeholder="Middle Name">
                          <input class="form-control" type="text" name="olname2" placeholder="Last Name">
                          <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                          <input class="form-control" name="obdate2" type="date">
                        </div>
                        <button class="btn btn-primary" type="submit" name="be_btn" style="width: 239px;margin-bottom: 29px;">SAVE STEP 2</button>
                      </form>
              </div>
          </div>
      </div>
  </div>


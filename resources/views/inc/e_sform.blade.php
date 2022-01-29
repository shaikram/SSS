
@if ($message = Session::get('error'))
<div class="alert alert-danger">
  <strong>{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@foreach ($pdata as $res)
<div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h3 class="text-center" style="color: rgb(0,167,255);margin-bottom: 19px;">FORM FOR USER: </h3>
                <h3 class="text-center" style="color: rgb(0,167,255);margin-bottom: 19px;">STEP 1: PERSONAL DATA</h3>
                <form id="main1" class="d-flex d-xl-flex flex-row justify-content-center align-items-center flex-wrap justify-content-xl-center align-items-xl-center" action="set-personaldata"  method="post">
                    @csrf
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">FULL NAME</p>
                        <input type="hidden" name="pdid" value="{{ $res->PDID }}">
                        <input type="hidden" name="userid" value="{{ $res->USERID }}">
                        <input class="form-control" id="input1" type="text" name="firstname" placeholder="First Name" value="{{ $res->FIRSTNAME }}">
                        <input class="form-control" id="input2" type="text" name="midname" placeholder="Middle Name" value="{{ $res->MIDNAME }}">
                        <input class="form-control" id="input3" type="text" name="lastname" placeholder="Last Name" value="{{ $res->LASTNAME }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                        <input class="form-control" id="input4" name="birthdate" type="date" value="{{ $res->BIRTHDATE }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">GENDER</p>
                        @if ($res->GENDER == 'male')
                        <input type="radio" class="radio" name="gender" value="male" checked="checked">
                        <label for="male" class="radio_label">Male</label><br>
                        <input type="radio" class="radio" name="gender" value="female">
                        <label for="female" class="radio_label">Female</label><br>
                        @else
                        <input type="radio" class="radio" name="gender" value="male">
                        <label for="male" class="radio_label">Male</label><br>
                        <input type="radio" class="radio" name="gender" value="female" checked="checked">
                        <label for="female" class="radio_label">Female</label><br>
                        @endif
                        
                        <input type="hidden" name="" id="input5"  value="aaaaaaaaaaaaaaaaaaa">

                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">CIVIL STATUS</p>
                        <input class="form-control" id="input6" type="text" placeholder="Civil Status" name="civilstat" value="{{ $res->CIVILSTATUS }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 14px;">TAX IDENTIFICATION NO: (IF ANY)</p>
                          <input class="form-control" id="input7" type="text" placeholder="xxx-xxxx-xxxx" name="taxid" value="{{ $res->TAXIDENTITY }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">NATIONALITY</p>
                          <input class="form-control" id="input8" type="text" placeholder="Nationality" name="nationality" value="{{ $res->NATIONALITY }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">RELIGION</p>
                          <input class="form-control" id="input9" type="text" placeholder="YOUR RELIGION" name="religion" value="{{ $res->RELIGION }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">PLACE OF BIRTH</p>
                          <input class="form-control" id="input10" type="text" placeholder="City/Municipality" name="city" value="{{ $res->CITY }}">
                          <input class="form-control" id="input11" type="text" placeholder="Province" name="province" value="{{ $res->PROVINCE }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">MOBILE NO.</p>
                          <input class="form-control" type="text" id="input12" placeholder="Mobile No." name="mobileno" value="{{ $res->MOBILENO }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">EMAIL ADDRESS</p>
                          
                          <input class="form-control" type="text" value="{{ $res->EMAIL }}" disabled>
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">TELEPHONE NO.</p>
                          <input class="form-control" type="text" id="input13" placeholder="Mobile No." name="telno" value="{{ $res->TELNO }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">FATHER'S NAME</p>
                          <input class="form-control" type="text" id="input14" name="ffname" placeholder="First Name" value="{{ $res->FTFIRSTNAME }}">
                          <input class="form-control" type="text" id="input15" name="fmname" placeholder="Middle Name" value="{{ $res->FTMIDNAME }}">
                          <input class="form-control" type="text" id="input16" name="flname" placeholder="Last Name" value="{{ $res->FTLASTNAME }}">
                      </div>
                      <div class="form-group d-xl-flex align-items-xl-center">
                          <p class="text-center" style="font-size: 22px;">MOTHER'S MAIDEN NAME</p>
                          <input class="form-control" type="text" id="input17" name="mfname" placeholder="First Name" value="{{ $res->MTFIRSTNAME }}">
                          <input class="form-control" type="text" id="input18" name="mmname" placeholder="Middle Name" value="{{ $res->MTMIDNAME }}">
                          <input class="form-control" type="text" id="input19" name="mlname" placeholder="Last Name" value="{{ $res->MTLASTNAME }}">
                      </div>
                      <button class="btn btn-primary" type="submit" name="pd_btn" style="width: 239px;margin-bottom: 29px;"> SAVE </button>
                    </form>

            </div>
        </div>
    </div>
</div>
@endforeach

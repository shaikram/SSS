{{-- 
<div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center" style="color: rgb(0,167,255);margin-bottom: 19px;">STEP 3(OPTIONAL): FOR SELF-EMPLOYED/OFW/NON-WORKING SPOUSE</h3>
                <form id="main3" class="text-center d-flex d-xl-flex flex-row justify-content-center align-items-center flex-wrap justify-content-xl-center align-items-xl-center">
                    <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">SELF-EMPLOYED(SE)</h3>
                    <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">PROFESSION BUSINESS</p>
                        <input type="hidden" name="userid" value="">
                        <input class="form-control" id="input" value="" type="text" name="profession" placeholder="Profession Business" disabled>
                        <p class="text-center" style="font-size: 13px;">YEAR PROF./BUSINESS STARTED</p>
                        <input class="form-control" id="input" value="" type="date" name="dateb" disabled>
                        <p class="text-center" style="font-size: 13px;">MONTHLY EARNINGS</p>
                        <input class="form-control" id="input" value="" type="number" name="monthlearn" placeholder="Monthly Earnings" disabled>
                      </div>
                    <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">OVERSEAS FILIPINO WORKER(OFW)</h3>
                    <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">FOREIGN ADDRESS</p>
                        <input class="form-control" id="input4" value="" type="text" name="fadd" placeholder="Foreign Address" disabled>
                        <p class="text-center" style="font-size: 22px;">MONTHLY EARNINGS</p>
                        <input class="form-control" id="input5" value="" type="number" name="monthlyforeign" placeholder="Your Monthly Earning" disabled>
                      </div>
                    <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">QUESTION( YES OR NO )</h3>

                    <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">Are you applying for membership in the FLEX-FUND Program?</p>
                        <h2><h2>
                        <input class="form-control" type="text"style="background:rgb(0,96,147);border:1px solid rgb(0,96,147);"disabled>
                      </div>
                      <!-- <button class="btn btn-primary" type="submit" name="se_btn" style="width: 269px;margin-bottom: 29px;">SAVE STEP 3</button> -->
                    </form>
            </div>
        </div>
    </div>
</div> --}}
@foreach ($option as $res)
    

<div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center" style="color: rgb(0,167,255);margin-bottom: 19px;">STEP 3(OPTIONAL): FOR SELF-EMPLOYED/OFW/NON-WORKING SPOUSE</h3>
                <form method="post" action="function/sedata.func.php" id="main3" class="text-center d-flex d-xl-flex flex-row justify-content-center align-items-center flex-wrap justify-content-xl-center align-items-xl-center">
                    <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">SELF-EMPLOYED(SE)</h3>
                    <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">PROFESSION BUSINESS</p>
                        <input type="hidden" name="userid" value="">
                        <input class="form-control" id="input" type="text" name="profession" placeholder="Profession Business" value="{{ $res->PROFESSION }}">
                        <p class="text-center" style="font-size: 13px;">YEAR PROF./BUSINESS STARTED</p>
                        <input class="form-control" id="input" type="date" name="dateb" value="{{ $res->YEARBUSINESS }}">
                        <p class="text-center" style="font-size: 13px;">MONTHLY EARNINGS</p>
                        <input class="form-control" id="input" type="number" name="monthlearn" placeholder="Monthly Earnings" value="{{ $res->MONTHLYEARN }}">
                      </div>
                    <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">OVERSEAS FILIPINO WORKER(OFW)</h3>
                    <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">FOREIGN ADDRESS</p>
                        <input class="form-control" id="input4" type="text" name="fadd" placeholder="Foreign Address" value="{{ $res->FOREIGNADD }}">
                        <p class="text-center" style="font-size: 22px;">MONTHLY EARNINGS</p>
                        <input class="form-control" id="input5" type="number" name="monthlyforeign" placeholder="Your Monthly Earning" value="{{ $res->MONTHLYFEARN }}">
                      </div>
                    <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">QUESTION( YES OR NO )</h3>

                    <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">Are you applying for membership in the FLEX-FUND Program?</p>
                        <select class="form-control" name="flex">
                          @if ($res->FLEX == 'YES')
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                          @else
                          <option value="NO">NO</option>
                          <option value="YES">YES</option>
                          @endif
                          
                        </select>
                        <input class="form-control" type="text"style="background:rgb(0,96,147);border:1px solid rgb(0,96,147);"disabled>
                      </div>
                      <button class="btn btn-primary" type="submit" name="se_btn" style="width: 269px;margin-bottom: 29px;"> SAVE </button>
                    </form>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach

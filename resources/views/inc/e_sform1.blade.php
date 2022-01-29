
@php
    $a = 1;
    $b = 1;
@endphp
<div class="swiper-slide" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);height: 1000px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center" style="color: rgb(0,167,255);margin-bottom: 19px;">STEP 2: DEPENDENT(s) or BENEFICIARY(ies)</h3>
                <form action="set-beneficiaries" method="post" class="text-center d-flex d-xl-flex flex-row justify-content-center align-items-center flex-wrap justify-content-xl-center align-items-xl-center">
                  @csrf
                    <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">SPOUSE DATA</h3>
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">SPOUSE NAME</p>
                        @foreach ($spouse as $res)
                        <input type="hidden" name="spid" value="{{ $res->spid }}">
                        <input class="form-control" type="text" name="sfname" placeholder="First Name" value="{{ $res->fname }}">
                        <input class="form-control" type="text" name="smname" placeholder="Middle Name" value="{{ $res->mname }}">
                        <input class="form-control" type="text" name="slname" placeholder="Last Name" value="{{ $res->lname }}">
                        <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                        <input name="sbdate" class="form-control" type="date" value="{{ $res->bdate }}">
                        
                        @endforeach
                      </div>
                      
                      <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;">CHILDREN DATA</h3>
                      <input type="hidden" name="cchild" value="{{ $cchild }}">
                      @foreach ($children as $res)
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">CHILDREN&nbsp; NAME</p>
                        <input type="hidden" name="chid{{ $a }}" value="{{ $res->chid }}">
                        <input class="form-control" type="text" name="cfname{{ $a }}" placeholder="First Name" value="{{ $res->fname }}">
                        <input class="form-control" type="text" name="cmname{{ $a }}" placeholder="Middle Name" value="{{ $res->mname }}">
                        <input class="form-control" type="text" name="clname{{ $a }}" placeholder="Last Name" value="{{ $res->lname }}">
                        <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                        <input class="form-control" name="cbdate{{ $a }}" type="date" value="{{ $res->bdate }}">
                      </div>   
                      @php
                        $a++;
                      @endphp              
                      @endforeach
                      

                      <h3 class="text-center" style="color: rgb(255,255,255);margin-bottom: 0px;"><br>Other Beneficiary/IES(If without spouse &amp; child and parents are both deceased:<br><br></h3>
                      @foreach ($other as $res)
                      <div class="form-group d-xl-flex align-items-xl-center">
                        <p class="text-center" style="font-size: 22px;">FULL NAME</p>
                        <input class="form-control" type="text" name="ofname{{ $b }}" placeholder="First Name" value="{{ $res->fname }}">
                        <input class="form-control" type="text" name="omname{{ $b }}" placeholder="Middle Name" value="{{ $res->mname }}">
                        <input class="form-control" type="text" name="olname{{ $b }}" placeholder="Last Name" value="{{ $res->lname }}">
                        <p class="text-center" style="font-size: 22px;">DATE OF BIRTH</p>
                        <input class="form-control" name="obdate{{ $b }}" type="date" value="{{ $res->bdate }}">
                      </div>
                      @php
                        $b++;
                      @endphp 
                      @endforeach
                      
                      <button class="btn btn-primary" type="submit" name="be_btn" style="width: 239px;margin-bottom: 29px;"> SAVE </button>
                    </form>
            </div>
        </div>
    </div>
</div>


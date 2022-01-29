<div class="maincontent_div simple-slider">
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
    <div class="div_white swiper-container">
      <div class="swiper-wrapper">
        @include('inc/main1')
        @include('inc/main3')
        @include('inc/main2')
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  
  </div>
  
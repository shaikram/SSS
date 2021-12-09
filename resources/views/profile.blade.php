@if (session('email') !== NULL) 
  @extends('layout.app')
  @section('title')
  Social Security System
  @endsection
  @section('links')
    @include('inc/links')
  @endsection
  @section('content')
    @foreach ($data as $row)
      @include('inc/navmain')
      @include('inc/profilecontent')
      @include('inc/mainfooter')
    @endforeach
  @endsection
  @section('scripts')
    @include('inc/script')
  @endsection
@elseif (session('email') == NULL)
<script type="text/javascript">
    window.location = "login";
</script>
@else
<script type="text/javascript">
    window.location = "login";
</script>
@endif
@if (session('email') !== NULL) 
 @extends('layout.app')
    @section('title')
    Social Security System
    @endsection
    @section('links')
      @include('inc/links')
      <style media="screen">
      body{
        background: #355e88;
      }
      table, th, td {
        /* border: 1px solid black; */
        padding: 10px 0 10px 0;
      }
    </style>
    @endsection
    @section('content')
      @foreach ($data as $row)
        @include('inc/preloader')
        <div id="content">
            @include('inc/navmain')
            @include('inc/maincontent')
            @include('inc/mainfooter')
        </div>
      @endforeach
    @endsection
    @section('scripts')
      @include('inc/script')
      <script language="JAVASCRIPT">
        $(function(){
          $('#web_preload').fadeOut(1000,function(){
            $('#content').fadeIn(500);
          });
        });
    </script>
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
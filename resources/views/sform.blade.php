@if (session('email') !== NULL) 
  @extends('layout.app')
  @section('title')
  Personal Data | Social Security System
  @endsection
  @section('links')
    @include('inc/links')
    <style media="screen">
        .radio{
          width:25px;
          height:25px;
        }
        .radio_label{
          font-size: 15px;
          padding: 5px 10px 0 0;
        }
        
        
        .mainnavs{
          width:100%;
          height:auto;
          padding:10px 5px 40px 5px;
          background: #4c7cad;
          color:#fff;
        }
        .mainnavs ul a li{
          list-style: none;
          float:left;
          padding: 10px;
          font-family: arial;
          font-weight:bold;
          color:#fff;
        }
        .mainnavs ul a li:hover{
          color:#dde36b;
        }
        body{
          color: rgb(255,255,255);
          background-color: rgb(0,96,147);
        }
      </style>
  @endsection
  @section('content')
    @foreach ($data as $row)
      @include('inc/navmain')
      @include('inc/mainnav')
      @include('inc/sform')
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
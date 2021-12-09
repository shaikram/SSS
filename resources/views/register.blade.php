@extends('layout.app')
@section('title')
Register | Social Security System
@endsection
@section('links')
  @include('inc/links')
@endsection
@section('content')
  @include('inc/nav')
  @include('inc/regform')
  @include('inc/footer')
@endsection
@section('scripts')
  @include('inc/script')
@endsection

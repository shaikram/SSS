@extends('layout.app')
@section('title')
Login | Social Security System
@endsection
@section('links')
  @include('inc/links')
@endsection
@section('content')
  @include('inc/nav')
  @include('inc/loginform')
  @include('inc/footer')
@endsection
@section('scripts')
  @include('inc/script')
@endsection

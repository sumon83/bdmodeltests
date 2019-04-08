@extends('layouts.app_layout')
@section('content')
    @include('layouts.header')
    {{$logged_in_user}}
@show
@endsection
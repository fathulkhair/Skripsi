@extends('dashboard.layouts')
@section('content')

@include('dashboard.nav')

<!-- Sidebar menu-->
@include('dashboard.sidebar')

@include('dashboard.form')



<script src="{{asset('dashboard/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/main.js')}}"></script>
<script src="{{asset('dashboard/js/plugins/pace.min.js')}}"></script>

@endsection

@extends('dashboard.psikolog.layouts')
@section('content')

@include('dashboard.psikolog.nav')

<!-- Sidebar menu-->
@include('dashboard.psikolog.sidebar')





<script src="{{asset('dashboard/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/main.js')}}"></script>
<script src="{{asset('dashboard/js/plugins/pace.min.js')}}"></script>

@endsection

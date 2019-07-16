@extends('Frontend.master')
@section('title')
    Exam Page
@endsection
@section('content')
<h1 style="text-align:center;margin-top:10%;margin-bottom:20px">Welcome to Online Exam - Start Now</h1>
<div class="row col-md-6" style="margin:0 auto;margin-bottom:4%">
	<div class="card col-md-6">
		<img src="{{ asset('images') }}/online_exam.png"/>
	</div>
	<div class="card col-md-5" style="margin-left:50px">
	<h2>Start Test</h2>
	<ul>
		<li><a href="{{ route('user.test') }}">Start Now...</a></li>
	</ul>
	</div>
  </div>
</div>

@endsection

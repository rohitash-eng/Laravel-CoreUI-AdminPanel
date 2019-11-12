@extends('layouts.admin')
@section('content')
@if ($errors->any())
	<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	</div><br />
@endif
<form class="add-feild" method="post" action="{{ route('advertisements.store') }}">
	@csrf
	<div class="row bottom-mrg">                  
			<div class="col-md-6 col-sm-6">
				<div class="input-group"> 
					<input type="text" name="title" class="form-control" placeholder="Your ads Title"> 
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="input-group"> 
					<input type="text" name="address" class="form-control" placeholder="Type your full address e.g B9, sec 3, kiwitech company Noida,201301"> 
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="input-group"> 
					<input type="text" name="goole_live_address" class="form-control" placeholder="Choose your google current address"> 
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="input-group"> 
					<input type="text" class="form-control" placeholder="Enter your ads height and width (X*X) e.g. hoding on roof 16x16"> 
				</div>
			</div>
			<div class="col-md-12 col-sm-12"> <textarea class="form-control" placeholder="Write about your ads"></textarea> </div>
		
	</div>
	<div class="row bottom-mrg extra-mrg">
			<div class="col-md-12 col-sm-12"> 
				<button class="btn btn-success btn-primary small-btn">Submit your Ads</button> 
			</div>
	</div>
</form>
@endsection
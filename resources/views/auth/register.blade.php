@extends('master.main-auth')

@section('title', 'Register')

@section('no-content')

@include('includes.flash.error')

	
<div class="body" style="padding-top: 120px;height: 100%;background: rgb(38,37,38);width: 100%;padding-bottom: 55px;">
        <div class="border rounded shadow login-center" style="font-size: 16px;background: rgba(255,255,255,0.91);height: 100%;">
           <form action="{{ route('post.register') }}" method="post">
                <div class="form-group text-center"><img class="img-fluid" style="width: 100px; padding-top: 50px" src="assets2/img/lo.png"></div>
                
            <div class="form-group d-flex justify-content-center"><h3>Register</h3></div>
		@csrf
		 <div class="form-group d-flex justify-content-center">
			<input class="form-control" style="width: 200px;" type="text" id="username" name="username" placeholder="Username"> </div>
			@error('username')
			 <div class="form-group d-flex justify-content-center">
				<small class="text-danger">{{ $errors->first('username') }}</small>
			</div>
			@enderror
		
		 <div class="form-group d-flex justify-content-center">
			<input class="form-control" style="width: 200px;" type="password" id="password" name="password" placeholder="Password">
		</div>
		 <div class="form-group d-flex justify-content-center">
			<input class="form-control" style="width: 200px;" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"> </div>
			@error('password')
			 <div class="form-group d-flex justify-content-center">
				<small class="text-danger">{{ $errors->first('password') }}</small>
			</div>
			@enderror
		
		 <div class="form-group d-flex justify-content-center">
			<input class="form-control" style="width: 200px;" type="password" id="pin" name="pin" maxlength="6" placeholder="PIN (6 numeric digits)">
		</div>
		 <div class="form-group d-flex justify-content-center">
			<input class="form-control" style="width: 200px;" type="password" id="pin_confirmation" name="pin_confirmation" maxlength="6" placeholder="Confirm PIN"> </div>
			@error('pin')
			 <div class="form-group d-flex justify-content-center">
				<small class="text-danger">{{ $errors->first('pin') }}</small>
			</div>
			@enderror
		
		 <div class="form-group d-flex justify-content-center">
			<input class="form-control" style="width: 200px;" type="text" id="reference_code" name="reference_code" value="{{ $reference_code }}" placeholder="Reference (optional)"> </div>
			@error('reference_code')
			 <div class="form-group d-flex justify-content-center">
				<small class="text-danger">{{ $errors->first('reference_code') }}</small>
			</div>
			@enderror
	 <div class="form-group d-flex justify-content-center">
		@include('includes.forms.captcha') </div>
	</form>
	<div class="mt-10">
<div class="form-group d-flex justify-content-center">		<a href="{{ route('login') }}">➜ Click here to login</a> </div>
	</div>
        </div>
    </div>

@stop
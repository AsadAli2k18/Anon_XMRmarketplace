@extends('master.main-auth')

@section('title', 'Login')

@section('no-content')

@include('includes.flash.success')
@include('includes.flash.error')

<div class="body" style="padding-top: 60px;height: 100%;background: rgb(38,37,38);width: 100%;padding-bottom: 55px;">
        <div class="border rounded shadow login-center" style="font-size: 16px;background: rgba(255,255,255,0.91);height: 100%;">
            <form style="padding-top: 32px;" action="{{ route('post.login') }}" method="post">
                 @csrf
                <div class="form-group text-center"><img class="img-fluid" style="width: 100px;" src="assets2/img/lo.png"></div>
                <div class="form-group d-flex justify-content-center">Login</div>
                <div class="form-group d-flex justify-content-center"><input class="form-control" type="text" style="width: 200px;" id="username" name="username" placeholder="Username">
                @error('username')
			<div class="error">
				<small class="text-danger">{{ $errors->first('username') }}</small>
			</div>
			@enderror</div>
                <div class="form-group d-flex justify-content-center"><input class="form-control" type="password" style="width: 200px;" id="password" name="password" placeholder="Password"></div>
                <div class="form-group d-flex justify-content-center"><a style=margin-top:5px !important; href="{{ route('resetpassword') }}">Forgot password?</a></div>
			@error('password')
			<div class="error">
				<small class="text-danger">{{ $errors->first('password') }}</small>
			</div>
			@enderror
	

	<div class="form-group d-flex justify-content-center">	@include('includes.forms.captcha')</div>
            
            </form>
<div class="form-group d-flex justify-content-center">      <a href="{{ route('register') }}">➜ Sign Up</a> </div>
<div class="inblock"style=height:fit-content;>
			<p><br><br></p>
		</div>
        </div>
    </div>
	</div>
@stop
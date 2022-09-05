
@extends('master.main-auth')

@section('title', 'Two-factor verification')

@section('no-content')
@include('includes.flash.error')
<div class="body" style="padding-top: 120px;height: 100%;background: rgb(38,37,38);width: 100%;padding-bottom: 55px;">
        <div class="border rounded shadow login-center" style="font-size: 16px;background: rgba(255,255,255,0.91);height: 100%;">
           <form action="{{ route('post.verifylogin') }}" method="post" style="padding-top: 32px;">
                <div class="form-group text-center"><img class="img-fluid" style="width: 100px;" src="assets2/img/lo.png"></div>
                
               
          

           
		@csrf
		  <div class="form-group d-flex justify-content-center">
 	<h3>Two-factor verification (2FA)</h3> </div>
		   <div class="form-group d-flex justify-content-center">

			Decrypt the message below with your PGP private key to access your account!
		</div>
   <div class="form-group d-flex justify-content-center">		<textarea rows="12" cols="42" disabled style="background-color:#202225;color:whitesmoke;padding:5px;margin:5px!important;border:2px whitesmoke solid;border-radius:15px;width:65%;">{{ session()->get('encrypted_message') }}</textarea> </div>    <div class="form-group d-flex justify-content-center">
	Verification code</div>
	   <div class="form-group d-flex justify-content-center">	<input type="text" id="verification_code" name="verification_code" style="width: 50%;background-color:#202225;color:whitesmoke;padding:5px;margin:5px!important;border:2px whitesmoke solid;border-radius:15px;text-align:center;"> </div>
	    <div class="form-group d-flex justify-content-center"><button class="btn btn-dark" style="width: 200px;background: rgb(13,110,253);border-style: none;border-radius: 119px;" type="Submit">Submit</button></div>
	     <div class="form-group d-flex justify-content-center">
	     		<a href="{{ route('logout') }}"><button class="btn btn-dark" style="width: 200px;background: rgb(13,110,253);border-style: none;border-radius: 119px;" type="button" >Logout</button></a>
	     </div>
		
			
		<div class="inblock"style=height:fit-content;>
			<p><br><br></p>
		</div>
	</form>
        </div>
    </div>


@stop


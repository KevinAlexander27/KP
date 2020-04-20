@extends('layout/main')

@section('title','Login')

@section('php')

@endsection

@section('asset')
<link rel="stylesheet" type="text/css" href="asset/css/login.css">
@endsection

@section('isi')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				
					<span class="login100-form-title p-b-33">
						Login
					</span>
					<form action="/login" method="POST">

					<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<input type="checkbox" onclick="showPass()">Show Password
					<div class="container-login100-form-btn m-t-20">
						<input type="submit" class="login100-form-btn" name="login" value="login"/>
					</div>

					
				</form>

			</div>
		</div>
	</div>
</form>
</div>
@endsection
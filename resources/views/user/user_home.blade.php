	@extends('layout/main')

	@section('title','Home')

	@section('asset')
	<link rel="stylesheet" type="text/css" href="asset/css/login.css">
	@endsection

	@section('isi')
	Welcome, 
			<?php
			if(isset($_SESSION['username']))
			{
			
			echo $_SESSION['username'];
			echo ' <a class="btn btn-sm btn-outline-secondary" href="/login">Log out</a>
					<a class="btn btn-sm btn-outline-secondary" href="changepass.php">Change Password</a>';
			

			}
			?>
	<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
						<form action="/user_view">	
					<form class="login100-form validate-form">
						<span class="login100-form-title p-b-33">
							Welcome !
						</span>
				
						<div class="container-login100-form-btn m-t-20">
							<button class="login100-form-btn">
								Input Nilai
							</button>
						</div>
				</form>
		<form action="/user_inputnilai">
						<div class="container-login100-form-btn m-t-20">
							<button class="login100-form-btn">
								View Nilai
							</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</form>
	@endsection
@extends('layout/main')

@section('title','Page Kelas')

@section('asset')
<link rel="stylesheet" type="text/css" href="asset/css/login.css">
@endsection

@section('isi')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                
				<form action="/admin_kelas_old">	
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Page Kelas
					</span>
			
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Update Data Kelas
						</button>
					</div>
                </form>
                
	            <form action="/admin_kelas_new">
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							New kelas
					</div>
				</form>
				
	<form action="/admin_home">
		<button>Back</button>
	</form>                

			</div>
		</div>
	</div>
</form>
@endsection
@extends('layout/main')

@section('title','Admin Home')

@section('asset')
<link rel="stylesheet" type="text/css" href="asset/css/login.css">
@endsection

@section('isi')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                
				<form action="/admin_guru">	
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Welcome !
					</span>
			
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Guru
						</button>
					</div>
                </form>
                
	            <form action="/admin_siswa">
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Siswa
						</button>
					</div>
                </form>
                
                <form action="/admin_kelas">
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Kelas
						</button>
					</div>
                </form>
				
				<form action="/admin_pelajaran">
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Pelajaran
						</button>
					</div>
                </form>

                <form action="/admin_nilai">
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Nilai
						</button>
					</div>
                </form>

                <form action="/admin_periodeinput">
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Periode Input
						</button>
					</div>
                </form>

			</div>
		</div>
	</div>
</form>
@endsection
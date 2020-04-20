@extends('layout/main')

@section('title','View Nilai')

@section('asset')
<link rel="stylesheet" type="text/css" href="asset/css/input.css">
@endsection

@section('style')
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
@endsection

@section('isi')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-1100 p-r-1100 p-t-130 p-b-100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						View Data Siswa !
					</span>
					
				</form>
				<table>
					<tr>
					<th>Id</th>
					<th>Username</th>
					<th>Password</th>
					</tr>

				</table>

				<form action="/user_home">
					<button>Back</button>
				</form>
			</div>
		</div>
	</div>
</form>
@endsection
@extends('layout/main')

@section('title','Periode Input')

@section('asset')
<link rel="stylesheet" type="text/css" href="asset/css/login.css">
@endsection

@section('isi')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
					<span class="login100-form-title p-b-33">
						Periode input
                    </span>
                    
					<div class="input-group mb-3">
                        <div class="input-group-prepend">
                      <form action="/periodeinput" method="POST">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                        <label for="birthday">Start:</label><br>
                        <input type="date" id="start" name="start">
                        <br><br>
                        <label for="birthday">End:</label><br>
                        <input type="date" id="end" name="end">
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </form>
                

					<form action="/admin_home">
						<button>Back</button>
					</form>
			</div>
		</div>
	</div>
@endsection
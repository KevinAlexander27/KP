@extends('layout/main')

@section('title','Siswa')

@section('asset')
<link rel="stylesheet" type="text/css" href="asset/css/input.css">
@endsection

@section('isi')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-1100 p-r-1100 p-t-130 p-b-100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Siswa
					</span>
					<iframe style="padding-left: 50px; padding-right: 50px;" class="iframecoba" src="https://docs.google.com/spreadsheets/d/1bjgb88udNbDE2nczKpte4T9tY6BGtMnqYscjmHBapWw/edit?usp=sharing&amp;single=true&amp;widget=true&amp;headers=false
					"width=100% height=500px></iframe>	
					
					
					
					<br>
						 
				</form>
						<!--FORM INPUT CSV-->
				<form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data"> 
					<div class="input-row">
						<label class="col-md-4 control-label" id="cob1">
						<a href="Book1.xlsx" download="proposed_file_name">Download Excel Format</a>
						</label><br>
						<label class="col-md-4 control-label" id="cob1">Choose CSV File</label> <br>
						<label class="col-md-4 control-label" id="cob1">
						<input type="file" name="file" id="file" accept=".csv">
						</label><br>
						<label class="col-md-4 control-label" id="cob1">
						<button type="submit" id="submit" name="import" class="btn-submit" >Import</button>
						</label>
						<br/>
					</div>
					<div id="labelError"></div>
				</form>
					<form action="/admin_home">
					<label class="col-md-4 control-label" id="cob1">
						<button id="bback">Back</button>
					</label>
					</form>
			</div>
		</div>
	</div>
</form>
@endsection 
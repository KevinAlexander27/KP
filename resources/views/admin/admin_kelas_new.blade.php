@extends('layout/main')

@section('title','New Kelas')

@section('asset')
<link rel="stylesheet" type="text/css" href="asset/css/login.css">
@endsection

@section('isi')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<!-- <form class="login100-form validate-form"> -->
					<span class="login100-form-title p-b-33">
						Input data Kelas
                    </span>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                    <form action="/newkelas" method="POST">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                          <label for="exampleInputEmail1">Nama Kelas</label>
                          <input type="text" class="form-control" id="nama" name="nama">



                          <label for="exampleInputEmail1">Nama Guru Wali Kelas</label>
                          <input type="text" class="form-control" id="wali" name="wali">

                        
                        <!-- <div class="form-group">
						  <label for="exampleInputPassword1">Pelajaran</label>
						  
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            mapel1
                          </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              mapel2
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              mapel3
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              mapel4
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              mapel5
                            </label>
                          </div> -->
                       <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

				<!-- </form> -->
					<form action="/admin_kelas">
						<button>Back</button>
					</form>
			</div>
		</div>
	</div>
<!-- </form> -->
@endsection
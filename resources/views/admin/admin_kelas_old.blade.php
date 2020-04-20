@extends('layout/main')

@section('title','Kelas')

@section('asset')
<link rel="stylesheet" type="text/css" href="asset/css/input.css">
@endsection

@section('isi')
@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Data Kelas
                    </span>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kelas</label>
						<div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        <button type="submit" class="btn btn-primary">Search</button>
                        </div>
						</div>
					<form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Guru Wali Kelas</label>
                          <input type="text" class="form-control">
                        </div>
                        
                        <div class="form-group">
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
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form> -->
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">id</th>
<th scope="col">nama kelas</th>
<th scope="col">nama wali</th>
<th scope="col">aksi</th>
</tr>
</thead>
<tbody>
@foreach($kelas as $kl)
<tr>
<th scope="row">{{$loop->iteration}}</th>
<td>{{$kl->id}}</td>
<td>{{$kl->nama}}</td>
<td>
@php
  echo App\Http\Controllers\admincontroller::cariguru($kl->id_wali);
@endphp
</td>
<td>
<a href="" class="badge badge-success">edit</a>
<a href="/deletekelas/{{$kl->id}}" class="badge badge-danger">delete</a>
</td>
</tr>
@endforeach
</tbody>
<table>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

				</form>
					<form action="/admin_kelas">
						<button>Back</button>
					</form>
			</div>
		</div>
	</div>
</form>
@endsection
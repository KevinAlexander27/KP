@extends('layout/main')

@section('title','Guru')

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
						Edit data guru
                    </span>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- <form>
						<div class="form-group">
                        <label for="exampleInputEmail1">Nama Guru</label>
						<div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        <button type="submit" class="btn btn-primary">Search</button>
                        </div>
						</div>
                        
                        <div class="form-group">
						  <label for="exampleInputPassword1">Pelajaran yang diajar</label>
						  
						  <div class="input-group mb-3">
							<div class="input-group-prepend">
							  <label class="input-group-text" for="inputGroupSelect01">Kelas:</label>
							</div>
							<select class="custom-select" id="inputGroupSelect01">
							  <option selected>Kelas</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							</select>
							<select class="custom-select" id="inputGroupSelect01">
								<option selected>Pararel</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
							  </select>
						  </div>

                          <div class="form-check">
                              mapel 1<br>
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              mapel1
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                              mapel2
                            </label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form> -->

<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">id</th>
<th scope="col">nama</th>
<th scope="col">user</th>
<th scope="col">pass</th>
<th scope="col">status</th>
<th scope="col">aksi</th>
</tr>
</thead>
<tbody>
@foreach($guru as $gr)
<tr>
<th scope="row">{{$loop->iteration}}</th>
<td>{{$gr->id}}</td>
<td>{{$gr->nama}}</td>
<td>{{$gr->user}}</td>
<td>{{$gr->pass}}</td>
<td>{{$gr->status}}</td>
<td>
<a href="/editguru/{{$gr->id}}" class="badge badge-success">edit</a>
<a href="/deleteguru/{{$gr->id}}" class="badge badge-danger">delete</a>
</td>
</tr>
@endforeach
</tbody>
<table>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                      </form>
					<form action="/admin_guru">
						<button>Back</button>
					</form>
			</div>
		</div>
	</div>
</form>
@endsection
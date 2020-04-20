<!-- <a href=""></a><br> -->

<!-- @extends('layout/main')

@section('title','')

@section('script')
@endsection

@section('style')
@endsection

@section('isi')
@endsection -->

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<a href="/login">login</a><br>

<br>User site<br>

<a href="/user_home">user home</a><br>
<a href="/user_inputnilai">user input nilai</a><br>
<a href="/user_view">user_view</a><br>

<br>Admin site<br>
<a href="/admin_home">admin_home</a><br>
<a href="/admin_guru">admin_guru</a><br>
<a href="/admin_guru_new">admin_guru_new</a><br>
<a href="/admin_guru_old">admin_guru_old</a><br>
<a href="/admin_siswa">admin_siswa</a><br>
<a href="/admin_kelas">admin_kelas</a><br>
<a href="/admin_kelas_new">admin_kelas_new (masih ada err)</a><br>
<a href="/admin_kelas_old">admin_kelas_old (masih ada err)</a><br>
<a href="/admin_pelajaran">admin_pelajaran</a><br>
<a href="/admin_pelajaran_old">admin_pelajaran_old</a><br>
<a href="/admin_pelajaran_new">admin_pelajaran_new</a><br>
<a href="/admin_nilai">admin_nilai</a><br>
<a href="/admin_periodeinput">admin_periodeinput</a><br>

<br>
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
<a href="" class="badge badge-success">edit</a>
<a href="/deleteguru/{{$gr->id}}" class="badge badge-danger">delete</a>
</td>
</tr>
@endforeach
</tbody>
<table>
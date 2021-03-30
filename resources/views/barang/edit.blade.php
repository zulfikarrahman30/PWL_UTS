@extends('mahasiswa.layout')
@section('content')
<div class="containermt-5">
<div class="row justify-content-center align-items-center">
<div class="card"style="width:24rem;">
<div class="card-header">Edit mahasiswa</div>
<div class="card-body">
@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops!
</strong>Thereweresomeproblemswithyourinput.<br><br>
<ul>@foreach($errors->all() as $error)
	<li>{{$error}}</li>
@endforeach
</ul></div>
@endif
<form method="post"action="{{route('mahasiswa.update',['mahasiswa'=>$mahasiswa->nim])}}"id="myForm">
@csrf
@method('PUT')
<div class="form-group">
	<label for="Nim">Nim</label>
<input type="text"name="nim"class="form-control"id="Nim"value="{{$mahasiswa->nim}}"aria-describedby="Nim"></div>
<div class="form-group">
<label for="Nama">Nama</label>
<input type="text"name="nama"class="form-control"id="Nama"value="{{$mahasiswa->nama}}"aria-describedby="Nama">
</div>
<div class="form-group">
<labelfor="Kelas">Kelas</label>
<input type="Kelas"name="kelas"class="form-control"id="Kelas"value="{{$mahasiswa->kelas}}"aria-describedby="Kelas"></div>
<div class="form-group">
	<labelfor="Jurusan">Jurusan</label>
<input type="Jurusan"name="jurusan"class="form-control"id="Jurusan"value="{{$mahasiswa->jurusan}}"aria-describedby="Jurusan">
</div>
<div class="form-group">
	<label for="No_Handphone">No_Handphone</label>
<input type="No_Handphone"name="no_handphone"class="form-control"id="no_handphone"value="{{$mahasiswa->no_handphone}}"aria-describedby="No_Handphone">
</div>
<div class="form-group">
	<label for="No_Handphone">Email</label>
<input type="email"name="email"class="form-control"id="no_handphone"value="{{$mahasiswa->email}}"aria-describedby="No_Handphone">
</div>
<div class="form-group">
	<label for="No_Handphone">Tgl Lahir</label>
<input type="date"name="tanggal_lahir"class="form-control"id="no_handphone"value="{{$mahasiswa->tanggal_lahir
}}"aria-describedby="No_Handphone">
</div>
<button type="submit"class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection
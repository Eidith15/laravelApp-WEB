@extends('layout/main')

@section('judul', 'Form Ubah Mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h1 class="mt-3">From Ubah Mahasiswa</h1>
				<form method="post" action="/students/{{$student->id}}">
					@method('put')
					@csrf
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{$student->nama}}">
				    @error('nama')
				    <div class="invalid-feedback">{{$message}}</div>
				    @enderror
				  </div>
				  <div class="form-group">
				    <label for="nrp">NRP</label>
				    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan nrp" name="nrp" value="{{$student->nrp}}">
				    @error('nrp')
				    <div class="invalid-feedback">{{$message}}</div>
				    @enderror
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan email" name="email" value="{{$student->email}}">
				    @error('email')
				    <div class="invalid-feedback">{{$message}}</div>
				    @enderror
				  </div>
				  <div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan jurusan" name="jurusan" value="{{$student->jurusan}}">
				    @error('jurusan')
				    <div class="invalid-feedback">{{$message}}</div>
				    @enderror
				  </div>

				  <button type="submit" class="btn btn-primary">Ubah Data</button>				  
				</form>
		</div>
	</div>
</div>
@endsection
@extends('layouts.app')
@section('body')


<h1 class="mb-0">Detail</h1>
<hr>


    @csrf

    <div class="mb-3">
        <label for="nam" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" readonly>
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" readonly>
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $mahasiswa->prodi }}" readonly>
    </div>
    <div class="mb-3">
        <label for="fakultas" class="form-label">Fakultas</label>
        <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{ $mahasiswa->fakultas }}" readonly>
    </div>
    <br>
    <br>

<a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali</a>
<br>
<br>
    <br>

@endsection

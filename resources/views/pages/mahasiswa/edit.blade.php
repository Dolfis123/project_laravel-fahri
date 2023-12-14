@extends('layouts.app')
@section('body')
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali</a>
        <br>
        <br>
        <div class="mb-3">
            <label for="nam" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" >
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}">
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <select class="form-control" id="prodi" name="prodi" >
                <option value="D3 Teknik Komputer" {{ $mahasiswa->prodi == 'D3 Teknik Komputer' ? 'selected' : '' }}>D3 Teknik Komputer</option>
                <option value="S1 Teknik Informatika" {{ $mahasiswa->prodi == 'S1 Teknik Informatika' ? 'selected' : '' }}>S1 Teknik Informatika</option>
                <!-- Add other options based on your needs -->
            </select>
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <select class="form-control" id="fakultas" name="fakultas">
                <option value="Teknik" {{ $mahasiswa->fakultas == 'Teknik' ? 'selected' : '' }}>Teknik</option>
                <option value="Teknik Pertambangan dan Perminyakan" {{ $mahasiswa->fakultas == 'Teknik Pertambangan dan Perminyakan' ? 'selected' : '' }}>Teknik Pertambangan dan Perminyakan</option>
                <!-- Add other options based on your needs -->
            </select>
        </div>

        <div class="row">
            <button class="btn btn-warning">Update</button>
        </div>
    </form>
    <br>
    <br>
    <br>
@endsection

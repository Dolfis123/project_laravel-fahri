@extends('layouts.app')
@section('body')
<a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali</a>
<br>
<br>
    <h1 class="mb-0">Tambah</h1>
    <hr>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <select class="form-control" id="prodi" name="prodi" >
                <option value=""></option>
                <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                <option value="D3 Teknik Listrik">D3 Teknik Listrik</option>
                <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                <option value="D3 Teknik Perminyakan">D3 Teknik Perminyakan</option>
                <option value="S1 Teknik Pertambangan">S1 Teknik Pertambangan</option>
                <option value="S1 Ekonomi Pemabngunan">S1 Ekonomi Pemabngunan</option>
                <option value="S1 Ekonomi Bisnis">S1 Ekonomi Bisnis</option>
                <option value="S1 Biologi">S1 Biologi</option>
                <option value="S1 Kimia">S1 Kimia</option>
                <option value="S1 Bahasa Indonesia">S1 Bahasa Indonesia</option>
                <option value="S1 Bahasa Inggris">S1 Bahasa Inggris</option>
                <option value="S1 Pertanian">S1 Pertanian</option>
                <option value="S1 Kelautan">S1 Kelautan</option>
                <option value="S1 Kehutanan">S1 Kehutanan</option>
                <!-- Tambahkan opsi prodi lainnya sesuai kebutuhan -->
            </select>
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <select class="form-control" id="fakultas" name="fakultas">
                <option value=""></option>
                <option value="Teknik">Teknik</option>
                <option value="Teknik Pertambangan dan Perminyakan">Teknik Pertambangan dan Perminyakan</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="FKIP">FKIP</option>
                <option value="Kelautan">Kelautan</option>
                <option value="Biologi">Biologi</option>
                <option value="Kehutanan">Kehutanan</option>
                <option value="Teknik Pertanian">Teknik Pertanian</option>
                <!-- Tambahkan opsi fakultas lainnya sesuai kebutuhan -->
            </select>
        </div>
        <div class="row">
            <button class="btn btn-success">Submit</button>
        </div>
    </form>
    <br>
    <br>
    <br>
@endsection

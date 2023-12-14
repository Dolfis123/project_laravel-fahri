@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

    <table class="table table-hover">
<thead  class="table-light">
<tr>
    <th>#</th>
    <th>Nama</th>
    <th>Nim</th>
    <th>Prodi</th>
    <th>Fakultas</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
    @if($mahasiswas->count()> 0)

    @foreach ($mahasiswas as $mahasiswa )

    <tr>
        <td class="align-middle">{{ $loop->iteration }}</td>
        <td class="align-middle">{{ $mahasiswa->nama }}</td>
        <td class="align-middle">{{ $mahasiswa->nim }}</td>
        <td class="align-middle">{{ $mahasiswa->prodi }}</td>
        <td class="align-middle">{{ $mahasiswa->fakultas }}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" type="button" class="btn btn-secondary">Show</button>
                <a href="{{ route('mahasiswa.edit', $mahasiswa->id )}}" type="button" class="btn btn-warning">Edit</button>
                    <a href="#" class="btn btn-danger py-0" onclick="event.preventDefault(); if (confirm('Hapus?')) document.getElementById('delete-form-{{ $mahasiswa->id }}').submit();">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Hapus</button>
                    </a>
                    <form id="delete-form-{{ $mahasiswa->id }}" action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>


              </div>
        </td>
    </tr>
</tbody>

@endforeach
@else
<tr>
    <td class="text-center" colspan="5">Mahasiswa tidak ada</td>
</tr>
@endif
    </table>
    @endsection
    <br>
    <br>
    <br>

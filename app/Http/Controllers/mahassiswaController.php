<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahassiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = mahasiswa::orderby('created_at', 'DESC')->get();
        return view('pages.mahasiswa.index', compact('mahasiswas'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'data berhasil di tambah' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = mahasiswa::find($id);

        return view('pages.mahasiswa.show', compact('mahasiswa'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = mahasiswa::find($id);

        return view('pages.mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'data berhasil di edit' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'data berhasil di hapus' );
    }
}
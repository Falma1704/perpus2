@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Buku</h2>
        <form action="{{ route('buku.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" class="form-control" id="penulis" name="penulis" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit:<Plabel>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div

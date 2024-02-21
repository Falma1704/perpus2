<!-- resources/views/buku/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Buku</h1>
        <form method="POST" action="{{ route('buku.update', ['id' => $buku->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" required>
            </div>

            <div class="form-group">
                <label for="pengarang">Penulis:</label>
                <input type="text" name="pengarang" class="form-control" value="{{ $buku->pengarang }}" required>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <textarea name="penerbit" class="form-control" rows="4" required>{{ $buku->penerbit }}</textarea>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <textarea name="tahun_terbit" class="form-control" rows="4" required>{{ $buku->tahun_terbit }}</textarea>
            </div>
            <!-- Tambahkan input untuk atribut lain jika diperlukan -->

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection

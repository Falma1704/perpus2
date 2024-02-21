<!-- resources/views/buku/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Detail Buku
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $buku->judul }}</h5>
            <p class="card-text"><strong>Judul:</strong> {{ $buku->penulis }}</p>
            <p class="card-text"><strong>Penulis:</strong> {{ $buku->genre }}</p>
            <p class="card-text"><strong>Penerbit:</strong> {{ $buku->tahun_terbit }}</p>
            <p class="card-text"><strong>Tahun Terbit:</strong> {{ $buku->ringkasan }}</p>

            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->

            <a class="nav-link" href="{{ route('buku.edit', ['id' => $buku->id]) }}">Edit</a>

            <form action="{{ route('buku.destroy', ['id' => $buku->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hapus Buku</h1>
        <p>Apakah Anda yakin ingin menghapus buku ini?</p>

        <form method="POST" action="{{ route('buku.destroy', ['id' => $buku->id]) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection

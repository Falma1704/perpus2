<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{

    public function index()
    {
        $buku = Buku::all();
        return view('buku.create', compact('buku'));
    }

    public function show($id)
    {
    $buku = Buku::find($id);
    return view('buku.show', ['buku' => $buku]);
    }

    public function store(Request $request)
    {
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

}

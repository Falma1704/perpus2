@extends("layout.main")
@section("konten")
				<div class="content-wrapper">
								<h1>Data Buku</h1>

								<table class="table-striped table-hover table-bordered table">
												<thead>
																<tr>
																				<th>#</th>
																				<th>Judul</th>
																				<th>Penulis</th>
																				<th>Penerbit</th>
																				<th>Tahun Terbit</th>
																				<th>Actions</th>
																</tr>
												</thead>
												<tbody>
																@php
																				$no = 1;
																@endphp
																@foreach ($buku as $item)
																				<tr>
																								<td>{{ $no++ }}</td>
																								<td>{{ $item->judul }}</td>
																								<td>{{ $item->penulis }}</td>
																								<td>{{ $item->penerbit }}</td>
																								<td>{{ $item->tahunterbit }}</td>
																								<td>
																												<a href="{{ route("buku.edit", $item->id) }}" class="btn btn-sm btn-info">Edit</a>
																												<form action="{{ route("buku.destroy", $item->id) }}" method="POST" class="d-inline">
																																@csrf
																																@method("DELETE")
																																<button type="submit" class="btn btn-sm btn-danger">Delete</button>
																												</form>
																								</td>
																				</tr>
																@endforeach
												</tbody>
								</table>
				</div>
@endsection

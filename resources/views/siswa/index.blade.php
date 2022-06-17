@extends('landingpage.buku.main')

@section('content')
	
<div class="container">
	<h2 class="text-center mt-5">Buku yang dipinjam</h2>
	<div class="row mt-5 mb-5">
		<div class="col-md">	
			<table class="table table-bordered text-center">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Nama Buku</th>
			      <th scope="col">Jumlah Dipinjam</th>
			      <th scope="col">Waktu Pinjam</th>
			      <th scope="col">Waktu Pengembalian</th>
			      <th scope="col">Keterangan</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($peminjaman as $peminjam)
				  	<tr>
				      <th scope="row">{{ $loop->iteration }}</th>
				      <th scope="row">{{ $peminjam->buku->judul }}</th>
				      <th scope="row">{{ $peminjam->jumlah }}</th>
				      <th scope="row">{{ $peminjam->created_at }}</th>
				      <th scope="row">{{ $peminjam->tgl_kembali }}</th>
				      @if ($peminjam->keterangan_id == 1 || $peminjam->keterangan_id == 3)
				      <form action="{{ url('batal', $peminjam->id) }}" method="POST">
				      	@csrf
				      	<th scope="row">
				      		<input type="hidden" value="{{ $peminjam->id }}" name="id">
				      		<button class="badge badge-secondary border-0" type="submit">Batal</button>
				      		<button class="badge badge-danger border-0">{{ $peminjam->keterangan->status }}</button></th>
				      	</form>
				      @elseif($peminjam->keterangan_id == 2)
				      	<th scope="row"><button class="badge badge-success border-0">{{ $peminjam->keterangan->status }}</th></button>
				      @endif
				    </tr>
			  	@endforeach 
			  </tbody>
			</table>
		</div>
	</div>
</div>

@endsection
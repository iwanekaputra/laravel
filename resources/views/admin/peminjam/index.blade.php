@extends('admin.main')

@section('section')


<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Peminjam</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Peminjam</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>


		<!-- Export Datatable start -->
		<div class="card-box mb-30">
			<div class="pd-20">
				<h4 class="text-blue h4">Peminjam</h4>
			</div>
			<div class="pb-20">
				<table class="table hover multiple-select-row data-table-export nowrap">
					<thead>
						<tr>
							<th>NO</th>
							<th>Nama</th>
							<th>Judul Buku</th>
							<th>Jumlah</th>
							<th>Keterangan</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($peminjaman as $peminjam)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $peminjam->nama }}</td>
								<td>{{ $peminjam->buku->judul }}</td>
								<td>{{ $peminjam->jumlah }}</td>
								<td>{{ $peminjam->keterangan->status }}</td>
								<td>
									<form action="{{ route('peminjam.update', $peminjam->id) }}" method="POST">
										<a href="#" class="badge badge-info" data-toggle="modal" data-target="#Medium-modal-{{ $peminjam->id }}" type="button">Detail</a>								
										<a class="badge badge-danger" href="">Denda</a>
									@csrf
									@method('PUT')
									<input type="hidden" name="keterangan_id" value="2">
									@if ($peminjam->keterangan_id == 1)
										<button type="submit" class="badge badge-success border-0">Konfirmasi</button>

									@endif

										
									</form>
								</td>
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- Export Datatable End -->
	</div>
</div>	

{{-- modal detail --}}
@foreach ($peminjaman as $detail)
<div class="modal fade" id="Medium-modal-{{ $detail->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<p>Nama Peminjam : {{ $detail->nama }}</p>
				<p>Judul Buku : {{ $detail->buku->judul }}</p>
				<p>Jumlah : {{ $detail->jumlah }}</p>
				<p>Waktu Pinjam : {{ $detail->created_at }}</p>
				<p>Waktu Pengembalian : {{ $detail->tgl_kembali }}</p>
			</div>
		</div>
	</div>
</div>
@endforeach

@endsection
							
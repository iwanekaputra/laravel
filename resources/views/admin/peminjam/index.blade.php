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
									<th>Jumlah</th>
									<th>Tanggal Pinjam</th>
									<th>Tanggal pengembalian</th>
									<th>Keterangan</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($peminjaman as $peminjam)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $peminjam->nama }}</td>
										<td>{{ $peminjam->jumlah }}</td>
										<td>{{ $peminjam->tgl_pinjam }}</td>
										<td>{{ $peminjam->tgl_kembali }}</td>
										<td>{{ $peminjam->keterangan }}</td>
										<td>
											<form action="" method="POST">
											<a class="badge badge-danger" href="">Denda</a>
											<a class="badge badge-success" href="">Konfirmasi</a>
												
												
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
		

	


@endsection
							
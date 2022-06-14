@extends('admin.main')

@section('section')
<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Dashboard</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Buku
						</button>
					</div>
				</div>
			</div>


				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Detail</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th>NO</th>
									<th>JUDUL</th>
									<th>ISBN</th>
									<th>STOCK</th>
									<th>OPSI</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($bukus as $buku)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $buku->judul }}</td>
										<td>{{ $buku->isbn }}</td>
										<td>{{ $buku->stok }}</td>
										<td>
											<a class="badge badge-primary" href="{{ route('buku.edit',$buku->id) }}">Edit</a>
											<a class="badge badge-info" href="{{ route('buku.edit',$buku->id) }}">Detail</a>
											<form action="{{route('buku.show', $buku->id)}}" method="POST">
											</a>
												@csrf
												@method('DELETE')
												<button type="submit" class="badge badge-danger border-0" onclick="return confirm('data yakin dihapus?')">Delete</i></button>
												
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

<br>
			
		

	@include('admin.create')
	


@endsection
							
@extends('admin.main')

@section('section')
<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Kategori</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Kategori</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Kategori
						</button>
					</div>
				</div>
			</div>


				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Kategori</h4>
					</div>
					<div class="pb-20 col-md-6">
						<table class="table hover ">
							<thead>
								<tr>
									<th>NO</th>
									<th>NAMA</th>
									<th>OPSI</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($kategoris as $kategori)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $kategori->nama }}</td>
									<td>
										<form action="{{route('kategori.destroy', $kategori->id)}}" method="POST">
											</a>
											@csrf
											@method('DELETE')
											<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
												<button type="submit" class="badge badge-danger border-0" onclick="return confirm('data yakin dihapus?')">Delete</i></button>
				
											</div>
												
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
			
		

	


@endsection
							
@extends('admin.main')

@section('section')
<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Buku</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Semua Buku</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Export Datatable start -->
		<div class="card-box mb-30">
			<div class="pd-20">
				<h4 class="text-blue h4">Semua Buku</h4>
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
									<form action="{{route('buku.destroy', $buku->id)}}" method="POST">
										@csrf
										<a class="badge badge-primary" href="{{ route('buku.edit',$buku->id) }}">Edit</a>

										<a href="#" class="badge badge-info" data-toggle="modal" data-target="#small-modal-{{ $buku->id }}" type="button">Detail
										</a>										
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

@foreach ($bukus as $detail)
<div class="modal fade" id="small-modal-{{ $detail->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">Detail</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<div class="row">
				<div class="col-md-5">
					<img src="{{ asset('admin/vendors/images/' . $detail->cover) }}" alt="" class="bg_img">
				</div>
				<div class="col-md-7">
					<table class="table">                    
	               	<tbody>
	                   <tr>
	                       <th>Judul</th>
	                       <td>:</td>
	                       <td>{{$detail->judul}}</td>
	                   </tr>
	                   <tr>
	                       <th>Isbn</th>
	                       <td>:</td>
	                       <td>{{$detail->isbn}}</td>
	                   </tr>
	                   <tr>
	                       <th>Halaman</th>
	                       <td>:</td>
	                       <td>{{$detail->halaman}}</td>
	                   </tr>
	                   <tr>
	                       <th>Penerbit</th>
	                       <td>:</td>
	                       <td>{{$detail->penerbit->nama}}</td>
	                   </tr>
	                   <tr>
	                       <th>Pengarang</th>
	                       <td>:</td>
	                       <td>{{ $detail->pengarang->nama }}</td>
	                   </tr>
	                   <tr>
	                       <th>Kategori</th>
	                       <td>:</td>
	                       <td>{{ $detail->kategori->nama }}</td>
	                   </tr>
	                   <tr>
	                       <th>Rak</th>
	                       <td>:</td>
	                       <td>{{$detail->rak->nama}}</td>
	                   </tr>
	                   <tr>
	                       <th>Stok</th>
	                       <td>:</td>
	                       <td>{{$detail->stok}}</td>
	                   </tr>
	                   <tr>
	                       <th>Deskripsi</th>
	                       <td>:</td>
	                       <td></td>
	                   </tr>
	               	</tbody>
           			</table>
	                <p align="justify">{!! $detail->deskripsi !!}</p>
        		</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endforeach

@endsection
							
@extends('admin.main')

@section('section')

<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4 mb-30">Tambah Buku</h4>
						</div>
					</div>
					<form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Isbn</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('isbn') form-control-danger @enderror " type="text" name="isbn" value="{{ old('isbn') }}">
								@error('isbn')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>

						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Judul</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('judul') form-control-danger @enderror" type="text" name="judul" value="{{ old('judul') }}">
								@error('judul')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Stok</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('stok') form-control-danger @enderror" type="text" name="stok" value="{{ old('stok') }}">
								@error('stok')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Halaman</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('halaman') form-control-danger @enderror" type="text" name="halaman" value="{{ old('halaman') }}">
								@error('halaman')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Harga</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('harga') form-control-danger @enderror" type="text" name="harga" value="{{ old('harga') }}">
								@error('harga')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Pengarang</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('pengarang_id') form-control-danger @enderror" type="text" name="pengarang_id" value="{{ old('pengarang_id') }}" >
								@error('pengarang_id')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Penerbit</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('penerbit_id') form-control-danger @enderror" type="text" name="penerbit_id" value="{{ old('penerbit_id') }}">
								@error('penerbit_id')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kategori</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="kategori_id">
									@foreach ($kategoris as $kategori)
										<option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Rak</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('rak_id') form-control-danger @enderror" type="text" name="rak_id" value="{{ old('rak_id') }}">
								@error('rak_id')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Cover</label>
							<div class="col-sm-12 col-md-10">
								<img class="cover-preview img-fluid col-sm-5 d-block" alt="">
								<input type="file" class="form-control-file form-control @error('cover') form-control-danger @enderror height-auto" id="cover" name="cover" onchange="previewCover()" value="{{ old('cover') }}">
								@error('cover')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="form-control @error('deskripsi') form-control-danger @enderror" id="validationTextarea" placeholder="Required example textarea" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
								@error('deskripsi')
							      <div class="form-control-feedback has-danger">{{ $message }}</div>
					      		@enderror
							</div>
						</div>

						
						<button class="btn btn-primary" type="submit">Cancel</button>
						<button class="btn btn-primary" type="submit">Button</button>

						
						
					</form>
				</div>
			</div>
		</div>
			@endsection
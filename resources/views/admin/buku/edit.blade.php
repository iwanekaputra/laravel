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
							<h4 class="text-blue h4">Edit Forms</h4>
						</div>
					</div>
                    <form action="{{route('buku.update',$buku->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">ISBN :</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="isbn" value="{{ old('isbn', $buku->isbn) }}" class="form-control @error('isbn')form-control-danger @enderror" placeholder="ISBN">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Judul</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}" class="form-control @error('judul')form-control-danger @enderror" placeholder="Judul">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Stok</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="stok"  value="{{ old('stok', $buku->stok) }}" class="form-control @error('stok')form-control-danger @enderror" placeholder="Stok">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Halaman</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="halaman"  value="{{ old('halaman', $buku->halaman) }}" class="form-control @error('halaman')form-control-danger @enderror" placeholder="Halaman">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Harga</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="harga"  value="{{ old('harga', $buku->harga) }}" class="form-control @error('harga')form-control-danger @enderror" placeholder="Harga">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Pengarang</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="pengarang_id"  value="{{ old('pengarang_id', $buku->pengarang_id) }}" class="form-control @error('pengarang_id')form-control-danger @enderror" placeholder="Pengarang">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Penerbit</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="penerbit_id"  value="{{ old('penerbit_id', $buku->penerbit_id) }}" class="form-control @error('penerbit_id')form-control-danger @enderror" placeholder="Penerbit">
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
                            <input type="text" name="rak_id"  value="{{ old('rak_id', $buku->rak_id) }}" class="form-control @error('rak_id')form-control-danger @enderror" placeholder="Rak">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Cover</label>
							<input type="hidden" name="oldCover" value="{{ $buku->cover }}">
	                        @if ($buku->cover) 
	                            <img src="{{ asset('admin/vendors/images/' . $buku->cover) }}" alt="" class="cover-preview img-fluid col-sm-5 mb-3 d-block">
	                        @else
	                            <img class="cover-preview img-fluid col-sm-5 mb-3 d-block" alt="">
	                        @endif
	                        							<div class="col-sm-12 col-md-10">

	                        <input class="col-md-8 form-control @error('cover') form-control-danger @enderror" type="file" id="cover" name="cover" onchange="previewCover()">
	                    </div>
	                        
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                        	<textarea class="form-control @error('deskripsi') form-control-danger @enderror" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{ old('deskripsi', $buku->deskripsi) }}</textarea>
						</div>
						<div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
				        </div>
					</form>

			
@endsection
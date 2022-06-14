@extends('admin.main')

@section('section')
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Detail</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                    <form action="{{route('buku.update',$buku->id)}}" method="POST">
                    @csrf
                    @method('PUT')
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">ISBN :</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="isbn" value="{{$buku->isbn}}" class="form-control" placeholder="ISBN">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Judul</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="judul"  value="{{$buku->judul}}" class="form-control" placeholder="Judul">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Stok</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="stok"  value="{{$buku->stok}}" class="form-control" placeholder="Stok">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Halaman</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="halaman"  value="{{$buku->halaman}}" class="form-control" placeholder="Halaman">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Harga</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="harga"  value="{{$buku->harga}}" class="form-control" placeholder="Harga">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Pengarang</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="pengarang_id"  value="{{$buku->pengarang_id}}" class="form-control" placeholder="Pengarang">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Penerbit</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="penerbit_id"  value="{{$buku->penerbit_id}}" class="form-control" placeholder="Penerbit">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kategori</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="kategori_id"  value="{{$buku->kategori_id}}" class="form-control" placeholder="Kategori">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Rak</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="rak_id"  value="{{$buku->rak_id}}" class="form-control" placeholder="Rak">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Cover</label>
							<div class="col-sm-12 col-md-10">
								<input type="hidden" name="oldCover" value="{{ $buku->cover }}">
								@if ($buku->cover) 
		                            <img src="{{ asset('admin/vendors/images/' . $buku->cover) }}" alt="" class="cover-preview img-fluid col-sm-5 mb-3 d-block">
		                        @else
		                            <img class="cover-preview img-fluid col-sm-5 mb-3 d-block" alt="">
		                        @endif

								<input type="file" class="form-control" id="cover" name="cover" onchange="previewCover()">

							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
	                        <textarea class="form-control p-3 @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi Buku">{{ old('deskripsi', $buku->deskripsi) }}</textarea>
	                    
	                        <!-- error message untuk content -->
	                        @error('deskripsi')
	                            <div class="alert alert-danger mt-2">
	                                {{ $message }}
	                            </div>
	                        @enderror
						</div>
						<div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
				        </div>
					</form>

			
@endsection
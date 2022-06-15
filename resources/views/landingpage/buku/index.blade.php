@extends('landingpage.buku.main')

@section('content')
<div class="container">
	<h1 class="mt-5">Semua buku</h1>
	<div class="row mt-5">
		@foreach ($bukus as $buku)
		<div class="col-md-6">
			<div class="blog-list">
				<ul>
					<li>
					<div class="row no-gutters">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="blog-img">
								<img src="{{ asset('admin/vendors/images/' . $buku->cover) }}" alt="" class="bg_img">
							</div>
						</div>
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="blog-caption">
								<h4><a href="#">{{ $buku->judul }}</a></h4>
								<div class="blog-by">
									<p>Isbn : {{ $buku->isbn }}</p>
									<p>Penerbit : {{ $buku->penerbit->nama }}</p>
									<p>Pengarang : {{ $buku->pengarang->nama }}</p>
									<p>Kategori : {{ $buku->kategori->nama }}</p>
									<div class="pt-10">
										<a href="#" class="btn btn-outline-primary">Detail</a>
										<a href="#" class="btn btn-outline-primary">Pinjam</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					</li>
				</ul>
			</div>
		</div>
		@endforeach
		
		
	</div>
</div>



	
@endsection
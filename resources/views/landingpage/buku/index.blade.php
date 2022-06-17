@extends('landingpage.buku.main')

@section('content')
<div class="container">
	<h1 class="mt-5">{{ $title }}</h1>
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
									<a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#bd-example-modal-lg-{{ $buku->id }}" type="button">Detail</a>
									@auth
										<a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#bd-example-modal-lg-{{ $buku->id }}-pinjam" type="button">Pinjam</a>
									@else 
										<a href="#" class="btn btn-outline-primary" data-backdrop="static" data-toggle="modal" data-target="#login-modal" type="button">Pinjam</a>

									@endauth
									
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


<!-- Large modal -->
	@foreach ($bukus as $detail)
		<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg-{{ $detail->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myLargeModalLabel">{{ $detail->judul }}</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<div class="row">
						<div class="col-md-5">
							<img src="{{ asset('admin/vendors/images/' . $detail->cover) }}" alt="" class="bg_img">
						</div>
						<div class="col-md-7">
							<p>Judul : {{ $detail->judul }}</p>
							<p>Isbn : {{ $detail->isbn }}</p>
							<p>Halaman : {{ $detail->halaman }}</p>
							<p>Penerbit : {{ $detail->penerbit->nama }}</p>
							<p>Penerbit : {{ $detail->pengarang->nama }}</p>
							<p>Kategori : {{ $detail->kategori->nama }}</p>
							<p>Rak : {{ $detail->rak->nama }}</p>
							<p>Deskripsi : </p>
							<p>{{ $detail->deskripsi }}</p>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endforeach
	@foreach ($bukus as $pinjam)
		<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg-{{ $pinjam->id }}-pinjam" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 align="" class="modal-title text-center" id="myLargeModalLabel">Silahkan Isi data terlebih dahulu</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<form action="{{ url('/buku') }}" method="POST">
							@csrf
							<input type="hidden" value="{{ $pinjam->id }}" name="buku_id">
							<div class="form-group">
								<label>Nama Asli</label>
								<input class="form-control" type="text" placeholder="Nama" name="nama">
							</div>
							<div class="form-group">
								<label>Jumlah</label>
								<input class="form-control" type="text" placeholder="Jumlah" name="jumlah">
							</div>
							<div class="form-group">
									<label>Tanggal Pinjam</label>
									<input class="form-control" placeholder="Select Date" type="date" name="tgl_pinjam">
								</div>
							<div class="form-group">
									<label>Tanggal Pengembalian</label>
									<input class="form-control" placeholder="Select Date" type="date" name="tgl_kembali">
								</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Pinjam</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
							@endforeach

@endsection

{{-- Login --}}
<!-- Login modal -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="login-box bg-white box-shadow border-radius-10">
        <div class="login-title">
          <h2 class="text-center text-primary ">Login Terlebih Dahulu</h2>
        </div>
        <form action="/login" method="post">
          @csrf
          <div class="input-group custom">
            <input type="text" class="form-control form-control-lg" placeholder="Email" name="email">
            <div class="input-group-append custom">
              <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
            </div>
          </div>
          <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" placeholder="**********" name="password">
            <div class="input-group-append custom">
              <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
          </div>
          <div class="row pb-30">
            <div class="col-6">
            </div>
            <div class="col-6">
              <div class="forgot-password"><a href="">Forgot Password</a></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group mb-0">
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">  
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
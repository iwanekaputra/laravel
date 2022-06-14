<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{route('buku.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>ISBN :</strong>
									<input type="text" name="isbn" class="form-control" placeholder="ISBN">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Judul :</strong>
									<input type="text" name="judul" class="form-control" placeholder="Judul">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Stok :</strong>
									<input type="text" name="stok" class="form-control" placeholder="Stok">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Halaman :</strong>
									<input type="text" name="halaman" class="form-control" placeholder="Stok">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Harga :</strong>
									<input type="text" name="harga" class="form-control" placeholder="Stok">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Pengarang :</strong>
									<input type="text" name="pengarang_id" class="form-control" placeholder="Idpengarang">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Penerbit :</strong>
									<input type="text" name="penerbit_id" class="form-control" placeholder="Idpenerbit">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Kategori :</strong>
									<input type="text" name="kategori_id" class="form-control" placeholder="Idkategori">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Rak :</strong>
									<input type="text" name="rak_id" class="form-control" placeholder="Rak">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<strong>Cover :</strong>
								<div class="input-group custom-file">
									<img class="cover-preview img-fluid col-sm-5 mb-3 d-block" alt="">
								  	<input type="file" class="form-control" id="cover" name="cover" onchange="previewCover()">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 mt-4">
								<div class="form-group">
									<strong>Deskripsi :</strong>
							   	 	<textarea class="form-control " id="validationTextarea" placeholder="Required example textarea" name="deskripsi"></textarea>
							    </div>
							</div>
						</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
				</form>
				</div>
			</div>
			</div>
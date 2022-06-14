<div class="left-side-bar">
		<div class="brand-logo">
			<a href="">
				<img src="{{asset('admin/vendors/images/logo-icon.png')}}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu"><br/><br>
					<li>
						<a href="{{url('/admin/dashboard')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/admin/anggota') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user1"></span><span class="mtext">Data Anggota</span>
						</a>
					</li>
						<a href="{{ url('/admin/buku') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-notebook"></span><span class="mtext">Data Buku</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/admin/penerbit') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user1"></span><span class="mtext">Data Penerbit</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/admin/pengarang') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user1"></span><span class="mtext">Data Pengarang</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/admin/kategori') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user1"></span><span class="mtext">Data Kategori</span>
						</a>
					</li>
					</li>
						<a href="{{ url('/admin/rak') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-notebook"></span><span class="mtext">Data Rak</span>
						</a>
					</li>
					<li>
						<a href="" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Transaksi</span>
						</a>
					</li>
					<li>
						<a href="" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-notepad"></span><span class="mtext">Data Denda</span>
						</a>
					</li><i class="icon-copy "></i>
						<div class="dropdown-divider"></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>
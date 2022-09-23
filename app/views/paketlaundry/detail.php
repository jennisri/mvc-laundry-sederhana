<div class="content-wrap">
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 p-r-0 title-margin-right">
					<div class="page-header">
						<div class="page-title">
							<h1>Selamat Datang, <span>di Aplikasi Laundry Online</span></h1>
						</div>
					</div>
				</div>
				<!-- /# column -->
				<div class="col-lg-4 p-l-0 title-margin-left">
					<div class="page-header">
						<div class="page-title">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
								<li class="breadcrumb-item active">Paket Laundry</li>
							</ol>
						</div>
					</div>
				</div>
				<!-- /# column -->
			</div>
			<!-- /# row -->
			<section id="main-content">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<h5>Data Paket Laundry</h5>

						</div>
						<div class="card-body">
							<div class="container mt-5">

								<div class="card" style="width: 18rem;">
									<div class="card-body">
										<!-- mengambil data mhs kemudian mengambil nama pada tabel mhs -->
										<h5 class="card-title"><?php echo $data['paketlaundry']['jenis_paket'] ?></h5>
										<h6 class="card-subtitle mb-2 text-muted"><?php echo $data['paketlaundry']['harga'] ?></h6>

										<a href="<?php echo BASEURL ?>/paketlaundry" class="card-link">Kembali</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /# column -->
			</div>
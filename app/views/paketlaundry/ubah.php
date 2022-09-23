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

						<div class="col-lg-8">
							<div class="card-body">
								<div class="container mt-3">

									<div class="card">
										<div class="card-body">
											<form action="<?php echo BASEURL; ?>/paketlaundry/getubah" method="post">
												<input type="hidden" name="id_paket" id="id_paket" value="<?php echo $data['paketlaundry']['id_paket'] ?>">
												<div class="form-group">
													<label for="jenis_paket">Jenis Paket</label>
													<input type="text" class="form-control" id="jenis_paket" name ="jenis_paket" value="<?php echo $data['paketlaundry']['jenis_paket'] ?>">
												</div>

												<div class="form-group">
													<label for="harga">Harga</label>
													<input type="number" class="form-control" id="harga" name ="harga" value="<?php echo $data['paketlaundry']['harga']; ?>">
												</div>


											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Ubah</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /# column -->
		</div>
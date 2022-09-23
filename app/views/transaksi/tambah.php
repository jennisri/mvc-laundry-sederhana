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
								<li class="breadcrumb-item active">Transaksi</li>
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
							<h5>Tambah Data Transaksi</h5>

						</div>

						<div class="col-lg-12">

							<div class="card">
								<div class="card-body">
									<form action="<?php echo BASEURL; ?>/transaksi/gettambah" method="post">
										<div class="row">
											<div class="form-group col-sm-6">
												<label for="no_order">No.Order</label>
												<input type="text" name="no_order" id="no_order" class="form-control" value="">
											</div>

											<div class="form-group col-sm-6">
												<label for="id_pelanggan">Nama Pelanggan</label>
												<select class="form-control" name="id_pelanggan" id="id_pelanggan">
													<option value="">--Pilih--</option>
													<?php foreach ( $data['pelanggan'] as $pelanggan ) : ?>
														<option value="<?php echo $pelanggan['id_pelanggan'] ?>"><?php echo $pelanggan['nama']; ?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-sm-6">
												<label for="id_paket">Paket</label>
												<select class="form-control" name="id_paket" id="id_paket">
													<option value="">--Pilih--</option>
													<?php foreach ( $data['paketlaundry'] as $paketlaundry ) : ?>
														<option value="<?php echo $paketlaundry['id_paket'] ?>"><?php echo $paketlaundry['jenis_paket']; ?></option>
													<?php endforeach ?>
												</select>
											</div>

											<div class="form-group col-sm-6">
												<label for="id_tipe">Paket</label>
												<select class="form-control" name="id_tipe" id="id_tipe">
													<option value="">--Pilih--</option>
													<?php foreach ( $data['pembayaran'] as $pembayaran ) : ?>
														<option value="<?php echo $pembayaran['id_tipe'] ?>"><?php echo $pembayaran['nama_pembayaran']; ?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="form-group col-sm-6">
												<label for="berat">Berat (Kg)</label>
												<input type="text" name="berat" id="berat" class="form-control" placeholder="Masukkan Berat Laundry">
											</div>

											<div class="form-group col-sm-6">
												<label for="tgl_ambil">Tgl. Ambil</label>
												<input type="date" name="tgl_ambil" id="tgl_ambil" class="form-control" >
											</div>
										</div>

										<div class="row">
											<div class="form-group col-sm-6">
												<label for="sts_pembayaran">Status Pembayaran</label>
												<select name="sts_pembayaran" id="sts_pembayaran" class="form-control">
													<option value="">--Pilih</option>
													<option value="1">Belum Lunas</option>
													<option value="2">Lunas</option>
												</select>
											</div>

											<div class="form-group col-sm-6">
												<label for="sts_order">Status Order</label>
												<select name="sts_order" id="sts_order" class="form-control">
													<option value="">--Pilih</option>
													<option value="1">Baru</option>
													<option value="2">Diambil</option>
												</select>
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<a href="<?php echo BASEURL ?>/pelanggan" class="btn btn-secondary">Close</a>
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
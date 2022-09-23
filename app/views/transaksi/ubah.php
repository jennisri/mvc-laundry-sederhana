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
							<h5>Ubah Data Transaksi</h5>

						</div>

						<div class="col-lg-12">

							<div class="card">
								<div class="card-body">
									<form action="<?php echo BASEURL; ?>/transaksi/getubah" method="post">

										<input type="hidden" name="id_transaksi" id="id_transaksi" value="<?php echo $data['transaksi']['id_transaksi'] ?>">
										<div class="row">
											<div class="form-group col-sm-6">
												<label for="no_order">No.Order</label>
												<input type="text" name="no_order" id="no_order" class="form-control" value="<?php echo $data['transaksi']['no_order'] ?>">
											</div>

											<div class="form-group col-sm-6">
												<label for="id_pelanggan">Nama Pelanggan</label>
												<select class="form-control" name="id_pelanggan" id="id_pelanggan">
													<?php foreach ( $data['pelanggan'] as $pelanggan ) : ?>
														<?php if($data['transaksi']['id_pelanggan'] == $pelanggan['id_pelanggan']): ?>
															<option value="<?php echo $pelanggan['id_pelanggan'] ?>" selected><?php echo $pelanggan['nama']; ?></option>
															<?php else : ?>
																<option value="<?php echo $pelanggan['id_pelanggan'] ?>"><?php echo $pelanggan['nama']; ?></option>
															<?php endif; ?>
														<?php endforeach ?>
													</select>
												</div>
											</div>

											<div class="row">
												<div class="form-group col-sm-6">
													<label for="id_paket">Paket</label>
													<select class="form-control" name="id_paket" id="id_paket">
														<?php foreach ( $data['paketlaundry'] as $paketlaundry ) : ?>
															<?php if ($data['transaksi']['id_paket'] == $paketlaundry['id_paket']): ?>
																<option value="<?php echo $paketlaundry['id_paket'] ?>" selected ><?php echo $paketlaundry['jenis_paket']; ?></option>
																<?php else: ?>
																	<option value="<?php echo $paketlaundry['id_paket'] ?>"><?php echo $paketlaundry['jenis_paket']; ?></option>
																<?php endif; ?>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group col-sm-6">
														<label for="id_tipe">Paket</label>
														<select class="form-control" name="id_tipe" id="id_tipe">
															<?php foreach ( $data['pembayaran'] as $pembayaran ) : ?>
																<?php if($data['transaksi']['id_tipe'] == $pembayaran['id_tipe']): ?>
																	<option value="<?php echo $pembayaran['id_tipe'] ?>" selected><?php echo $pembayaran['nama_pembayaran']; ?></option>
																	<?php else : ?>
																		<option value="<?php echo $pembayaran['id_tipe'] ?>"><?php echo $pembayaran['nama_pembayaran']; ?></option>
																	<?php endif; ?>
																<?php endforeach ?>
															</select>
														</div>
													</div>

													<div class="row">
														<div class="form-group col-sm-6">
															<label for="berat">Berat (Kg)</label>
															<input type="text" name="berat" id="berat" class="form-control" value="<?php echo $data['transaksi']['berat'] ?>">
														</div>

														<div class="form-group col-sm-6">
															<label for="tgl_ambil">Tgl. Ambil</label>
															<input type="text" name="tgl_ambil" id="tgl_ambil" class="form-control" value="<?php echo $data['transaksi']['tgl_ambil'] ?>">
														</div>
													</div>

													<div class="row">
														<div class="form-group col-sm-6">
															<label for="sts_pembayaran">Status Pembayaran</label>
															<select name="sts_pembayaran" id="sts_pembayaran" class="form-control">
																<?php $transaksi = $data['transaksi']['sts_pembayaran'] ?>
																<option value="1"<?php echo $transaksi == 1 ? 'selected' : null ?>>Belum Lunas</option>
																<option value="2"<?php echo $transaksi == 2 ? 'selected' : null ?>>Lunas</option>
															</select>
														</div>

														<div class="form-group col-sm-6">
															<label for="sts_order">Status Order</label>
															<select name="sts_order" id="sts_order" class="form-control">
																<?php $order = $data['transaksi']['sts_order'] ?>
																<option value="1"<?php echo $order == 1 ? 'selected' : null?>>Baru</option>
																<option value="2"<?php echo $order == 2 ? 'selected' : null ?>>Diambil</option>
															</select>
														</div>
													</div>

												</div>
												<div class="modal-footer">
													<a href="<?php echo BASEURL ?>/transaksi" class="btn btn-secondary">Close</a>
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
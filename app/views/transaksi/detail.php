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
									<div class="table-responsive">
										<table class="table table-bordered">
											<tr>
												<th class="table-primary">No.Order</th>
												<td><?php echo $data['transaksi']['no_order'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Nama Customer</th>
												<td><?php echo $data['transaksi']['nama'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Alamat</th>
												<td><?php echo $data['transaksi']['alamat'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Nomor Telepon</th>
												<td><?php echo $data['transaksi']['telepon'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Jenis Kelamin</th>
												<td><?php echo $data['transaksi']['jenis_kelamin'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Tanggal Transaksi</th>
												<td><?php echo $data['transaksi']['tgl_transaksi'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Tanggal Ambil</th>
												<td><?php echo $data['transaksi']['tgl_ambil'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Status Pembayaran</th>
												<?php if ($data['transaksi']['sts_pembayaran'] == 1): ?>
													<td>Belum Lunas</td>
													<?php elseif($data['transaksi']['sts_pembayaran'] == 2) : ?>
														<td>Lunas</td>
													<?php endif ?>
												</tr>

												<tr>
													<th class="table-primary">Status Order</th>
													<?php if ($data['transaksi']['sts_order'] == 1): ?>
														<td>Baru</td>
														<?php elseif($data['transaksi']['sts_order'] == 2) : ?>
															<td>Diambil</td>
														<?php endif ?>
													</tr>
												</table>
											</div>
										</div>

										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr class="table-primary" >
														<th>No</th>
														<th>Tanggal Order</th>
														<th>Paket Laundry</th>
														<th>Berat Cucian</th>
														<th>Harga/Kg</th>
														<th>Total</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1 ?>
													<td><?php echo $no++ ?></td>
													<td><?php echo $data['transaksi']['tgl_transaksi']?></td>
													<td><?php echo $data['transaksi']['jenis_paket']; ?></td>
													<td><?php echo $data['transaksi']['berat']; ?> Kg</td>
													<td>Rp. <?php echo number_format($data['transaksi']['harga'], 0, '.', '.') ?></td>
													<td>Rp. <?php echo number_format($data['transaksi']['harga'] * $data['transaksi']['berat'] , 0, '.', '.'); ?></td>

												</tbody>

											</table>
										</div>


									</div>
									<div class="modal-footer">
										<a href="<?php echo BASEURL ?>/transaksi" class="btn btn-secondary">Close</a>
										
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
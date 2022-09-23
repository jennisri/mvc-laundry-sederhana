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
								<li class="breadcrumb-item active">Karyawan</li>
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
							<h5>Data Karyawan</h5>

						</div>


						
						<div class="container mt-3">

							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<tr>
												<th class="table-primary" width='25%'>Nama Lengkap</th>
												<td width="25px" >:</td>
												<td><?php echo $data['karyawan']['nama_karyawan'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Username</th>
												<td>:</td>
												<td><?php echo $data['karyawan']['username'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Alamat</th>
												<td>:</td>
												<td><?php echo $data['karyawan']['alamat_karyawan'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">No Handphone</th>
												<td>:</td>
												<td><?php echo $data['karyawan']['nohp'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Jenis Kelamin</th>
												<td>:</td>
												<td><?php echo $data['karyawan']['gender'] ?></td>
											</tr>

											<tr>
												<th class="table-primary">Level</th>
												<td>:</td>
												<?php if ($data['karyawan']['role'] == 1): ?>
													<td>Administrator</td>
													<?php elseif($data['karyawan']['role'] == 2) : ?>
														<td>Karyawan</td>
													<?php endif ?>
												</tr>

											</table>

											<div class="float-left mt-5">
												<a href="<?php echo BASEURL ?>/karyawan" class="btn btn-secondary">Kembali</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /# column -->
			</div>
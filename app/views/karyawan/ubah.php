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

						<div class="col-lg-12">

							<div class="card">
								<div class="card-body">
									<form action="<?php echo BASEURL; ?>/karyawan/getubah" method="post">
										<input type="hidden" name="id_karyawan" id="id_karyawan" value="<?php echo $data['karyawan']['id_karyawan'] ?>">

										<div class="row">
											<div class="form-group col-md-6">
												<label for="nama_karyawan">Nama Lengkap</label>
												<input type="text" class="form-control" id="nama_karyawan" name ="nama_karyawan" value="<?php echo $data['karyawan']['nama_karyawan'] ?>">
											</div>

											<div class="form-group col-md-6">
												<label for="username">Username</label>
												<input type="text" class="form-control" id="username" name ="username" value="<?php echo $data['karyawan']['username'] ?>">
											</div>

										</div>

										<div class="row">
											<div class="form-group col-md-6">
												<label for="password">Password</label><small> password baru/ lama harus diisi</small>
												<input type="password" class="form-control" id="password" name ="password">
											</div>

											<div class="form-group col-md-6">
												<label for="nohp">No HandPhone</label>
												<input type="number" class="form-control" id="nohp" name ="nohp" value="<?php echo $data['karyawan']['nohp'] ?>">
											</div>

										</div>

										<div class="row">
											<div class="form-group col-md-12">
												<label for="alamat_karyawan">Alamat</label>
												<input type="text" class="form-control" id="alamat_karyawan" name ="alamat_karyawan" value="<?php echo $data['karyawan']['alamat_karyawan'] ?>">
											</div>

										</div>

										<div class="row">
											<div class="form-group col-md-6">
												<label for="gender">Jenis Kelamin</label>
												<select name="gender" id="gender" class="form-control" required >
													<?php $gender = $data['karyawan']['gender']; ?>
													<option value="Laki-Laki" <?php echo $gender == 'Laki-Laki' ? 'selected' : null ?>>Laki-Laki</option>

													<option value="Perempuan" <?php echo $gender == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
												</select>
											</div>

											<div class="form-group col-md-6">
												<label for="role">Level</label>
												<select name="role" id="role" class="form-control" required="">
													<?php $role = $data['karyawan']['role']; ?>
													<option value="1"<?php echo $role == 1 ? 'selected' : null ?>>Administrator</option>
													<option value="2"<?php echo $role == 2 ? 'selected' : null ?>>Karyawan</option>
												</select>
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
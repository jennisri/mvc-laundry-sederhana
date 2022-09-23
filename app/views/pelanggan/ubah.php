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
								<li class="breadcrumb-item active">Pelanggan</li>
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
							<h5>Data Pelanggan</h5>

						</div>

						<div class="col-lg-12">

							<div class="card">
								<div class="card-body">
									<form action="<?php echo BASEURL; ?>/pelanggan/getubah" method="post">
										<input type="hidden" name="id_pelanggan" id="id_pelanggan" value="<?php echo $data['pelanggan']['id_pelanggan'] ?>">

										
										<div class="form-group ">
											<label for="nama">Nama Lengkap</label>
											<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['pelanggan']['nama'] ?>">
										</div>

										<div class="form-group ">
											<label for="alamat">Alamat</label>
											<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['pelanggan']['alamat'] ?>">
										</div>


										<div class="form-group ">
											<label for="telepon">No.Telepon</label>
											<input type="number" class="form-control" id="telepon" name="telepon" value="<?php echo $data['pelanggan']['telepon'] ?>">
										</div>

										<div class="form-group ">
											<label for="jenis_kelamin">Jenis Kelamin</label>
											<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
												<?php $jenis_kelamin = $data['pelanggan']['jenis_kelamin'] ?>
												<option value="Laki-Laki"<?php echo $jenis_kelamin == 'Laki-Laki' ? 'selected' : null ?>>Laki-Laki</option>
												<option value="Perempuan"<?php echo $jenis_kelamin =='Perempuan' ? 'selected' : null ?>>Perempuan</option>
											</select>
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
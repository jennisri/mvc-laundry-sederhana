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
						<div class="card-body">
							<div class="table-responsive">
								<button type="button" class="btn btn-primary mb-3 tomboltambahdata" data-toggle="modal" data-target="#formModal">
									Tambah
								</button>

								<div class="row">
									<div class="col-lg-12">
										<?php echo Flasher::flash() ?>
									</div>
								</div>

								<table id="example" class="table table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Nomor Telepon</th>
											<th>Jenis Kelamin</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1 ?>
										<?php foreach ( $data['karyawan'] as $data ) : ?>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $data['nama_karyawan']; ?></td>
												<td><?php echo $data['alamat_karyawan']; ?></td>
												<td><?php echo $data['nohp']; ?></td>
												<td><?php echo $data['gender']; ?></td>
												<td>

													<a href="<?php echo BASEURL; ?>/karyawan/detail/<?php echo $data['id_karyawan']; ?>" class="btn btn-warning btn-sm " >Detail</a>

													<a href="<?php echo BASEURL; ?>/karyawan/ubah/<?php echo $data['id_karyawan']; ?>" class="btn btn-success btn-sm" >Ubah</a>

													<a href="<?php echo BASEURL ?>/karyawan/hapus/<?php echo $data['id_karyawan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus ?')" >Hapus</a>
												</td>
											</tr>
										<?php endforeach ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /# column -->
			</div>

			<!-- Modal -->
			<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="judulModal">Tambah Karyawan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="<?php echo BASEURL ?>/karyawan/tambah" method="post">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="nama">Nama Lengkap</label>
										<input type="text" class="form-control" id="nama" name="nama_karyawan">
									</div>

									<div class="form-group col-md-6">
										<label for="username">Username</label>
										<input type="text" class="form-control" id="username" name="username">
									</div>
								</div>
								
								<div class="row">
									<div class="form-group col-md-6">
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password">
									</div>
									
									<div class="form-group col-md-6">
										<label for="nohp">No HP</label>
										<input type="number" class="form-control" id="nohp" name="nohp">
									</div>
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat_karyawan">
								</div>


								<div class="form-group">
									<label for="gender">Jenis Kelamin</label>
									<select name="gender" id="gender" class="form-control">
										<option value="">--Pilih--</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>

								<div class="form-group">
									<label for="role">Level</label>
									<select name="role" id="role" class="form-control">
										<option value="">--Pilih--</option>
										<option value="1">Administrator</option>
										<option value="2">Karyawan</option>
									</select>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Tambah</button>
							</form>
						</div>

					</div>
				</div>
			</div>



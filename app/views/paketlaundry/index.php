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
							<div class="table-responsive">
								<button type="button" class="btn btn-primary mb-3 tomboltambahdata" data-toggle="modal" data-target="#formModal">
									Tambah Paket Laundry
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
											<th>Jenis Paket</th>
											<th>Harga/Kg</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1 ?>
										<?php foreach ( $data['paketlaundry'] as $data ) : ?>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $data['jenis_paket']; ?></td>
												<td>Rp. <?php echo number_format($data['harga'], 0, '.', '.'); ?></td>
												<td>

													<a href="<?php echo BASEURL; ?>/paketlaundry/detail/<?php echo $data['id_paket']; ?>" class="btn btn-warning btn-sm " >Detail</a>

													<!-- <a href="<?php echo BASEURL; ?>/paketlaundry/ubah/<?php echo $data['id_paket']; ?>" class="btn btn-success btn-sm tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?php echo $data['id_paket']; ?>">Ubah</a> -->

													<a href="<?php echo BASEURL; ?>/paketlaundry/ubah/<?php echo $data['id_paket']; ?>" class="btn btn-success btn-sm" >Ubah</a>


													<a href="<?php echo BASEURL ?>/paketlaundry/hapus/<?php echo $data['id_paket']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus ?')" >Hapus</a>
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
							<h5 class="modal-title" id="judulModal">Tambah Paket Laundry</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="<?php echo BASEURL; ?>/paketlaundry/tambah" method="post">
								<input type="hidden" name="id_paket" id="id_paket">
								<div class="form-group">
									<label for="jenis_paket">Jenis Paket</label>
									<input type="text" class="form-control" id="jenis_paket" name ="jenis_paket">
								</div>

								<div class="form-group">
									<label for="harga">Harga</label>
									<input type="number" class="form-control" id="harga" name ="harga">
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



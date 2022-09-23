// menggantikan method namanya ready
$(function(){

	$('.tomboltambahdata').on('click', function(){
		$('#judulModal').html('Tambah Paket Laundry');
		$('.modal-footer button[type=submit]').html('Tambah Data');
	});

	$('.tampilModalUbah').on('click', function() {

		$('#judulModal').html('Ubah Paket Laundry');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		// divideo titik tapi disikak dem action tuh koma. hem
		// dak jadi dem salah ku nian, koma dem action tuh
		// ke controller mahasiswa method ubah
		$('.modal-body form').attr('action', 'http://localhost/mvc-laundry/public/paketlaundry/ubah');

		const id_paket = $(this).data('id_paket');
		// menjalankan ajax
		$.ajax({
			url: 'http://localhost/mvc-laundry/public/paketlaundry/getubah',
			// id yang sebelah kiri adalah nama data yang dikirimkan
			// id sebelah kanan adalah isi datanya
			data: {id_paket : id_paket},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#jenis_paket').val(data.jenis_paket);
				$('#harga').val(data.harga);
				$('#id_paket').val(data.id_paket);
			}

		});
	});

});
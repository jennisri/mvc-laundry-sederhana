 <div class="row">
 	<div class="col-lg-12">
 		<div class="footer">
 			<div class="text-muted">Copyright &copy; Sri Jenni Murniati <?php echo date('Y'); ?></div>

 		</div>
 	</div>
 </div>
</section>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- jquery vendor -->
<script src="<?php echo BASEURL ?>/js/lib/jquery.min.js"></script>
<script src="<?php echo BASEURL ?>/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="<?php echo BASEURL ?>/js/lib/menubar/sidebar.js"></script>
<script src="<?php echo BASEURL ?>/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->

<script src="<?php echo BASEURL ?>/js/lib/bootstrap.min.js"></script>
<script src="<?php echo BASEURL ?>/js/scripts.js"></script>
<!-- bootstrap -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script> -->


<!-- SCRIPT TABLE -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>

<script>
	$(document).ready(function() {
		var table = $('#example').DataTable( {
			fixedHeader: true
		} );
	} );
</script>

<script>
	$(document).ready(function() {
		var table = $('#tabel1').DataTable( {
			fixedHeader: true
		} );
	} );
</script>
</body>

</html>
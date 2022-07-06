<script src="<?php echo base_url('argon-template/assets/vendor/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('argon-template/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('argon-template/assets/vendor/js-cookie/js.cookie.js')?>"></script>
<script src="<?php echo base_url('argon-template/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')?>"></script>
<script src="<?php echo base_url('argon-template/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')?>"></script>
<!-- Optional JS -->
<script src="<?php echo base_url('argon-template/assets/vendor/chart.js/dist/Chart.min.js')?>"></script>
<script src="<?php echo base_url('argon-template/assets/vendor/chart.js/dist/Chart.extension.js')?>"></script>
<!-- Argon JS -->
<script src="<?php echo base_url('argon-template/assets/js/argon.js?v=1.2.0')?>"></script>
<!-- Data Tables -->
<script type="text/javascript" src="<?php echo base_url('DataTables/DataTables-1.10.24/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('DataTables/DataTables-1.10.24/js/dataTables.bootstrap4.min.js')?>"></script>
<script type="text/javascript">
	$(document).ready( function () {
    $('#tbl_pendaftar').DataTable({
    	language : {url:"<?php echo base_url('DataTables/DataTables-1.10.24/js/dataTables.indonesia.js')?>"}
    });
} );
</script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#tbl_master_klinik').DataTable({
    	language : {url:"<?php echo base_url('DataTables/DataTables-1.10.24/js/dataTables.indonesia.js')?>"}
    });
} );
</script>
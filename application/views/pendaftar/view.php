
<h1 style="text-align: center;">Master Pendaftar</h1>
<p>Berikut Adalah Data pendaftar Yang Tersedia</p>
<a class="btn btn-primary btn-sm" href="<?php echo base_url();?>index.php/pendaftar/add"><i class="fa fa-plus fa-lg"></i> Add Data</a><p></p>
<div class="table-responsive">
<table id="tbl_pendaftar" class="table table-bordered table table-striped">
<thead>
<tr>
<th>Id</th>
<th>Creator</th>
<th>Kode Klinik</th>
<th>Nomor Passport / Identitas</th>
<th>Nama Identitas</th>
<th>File Dokumen</th>
<th>Sertifikat Lab</th>
<th>Tanggal Berlaku Sertifikat</th>
<th>Expired</th>
<th>QR COde</th>
<th>Aksi</th>
</tr>
</thead>
<?php foreach ($daftar_pendaftar as $pendaftar): ?>
<tr>
<td><?php echo $pendaftar->id_pendaftar?></td>
<td><?php echo $pendaftar->creator ?></td>
<td><?php echo $pendaftar->kode_klinik ?></td>
<td><?php echo $pendaftar->no_identitas ?></td>
<td><?php echo $pendaftar->nama ?></td>
<td><img src="<?php echo base_url('assets/file_dokumen/'.$pendaftar->file_dokumen) ?>" width="100";></td>
<td><img src="<?php echo base_url('assets/file_dokumen/'.$pendaftar->sertifikat_lab) ?>" width="100";></td>
<td><?php echo $pendaftar->tanggal_berlaku_sertifikat ?></td>
<td>
<?php 
if ($pendaftar->expired=='Aktif')
{echo '<i class="fas fa-play-circle fa-2x text-success"></i>';}
else if ($pendaftar->expired=='Tidak Aktif')
{echo '<i class="fas fa-stop-circle fa-2x text-danger"></i>';}
?>
</td>
<td><img src="<?php echo base_url().'assets/file_dokumen/'.$pendaftar->qr_code;?>" width="100";></td>
<td>
<a class="btn btn-primary btn-sm" href="<?php echo site_url('pendaftar/edit/'.$pendaftar->id_pendaftar) ?>"><i class="fas fa-edit fa-lg"></i></a>
<a class="btn btn-success btn-sm" href="<?php echo site_url('pendaftar/print_qr/'.$pendaftar->id_pendaftar) ?>" target="_blank"><i class="fas fa-qrcode fa-lg"></i></a>
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_delete">
  <i class="fas fa-trash fa-lg"></i>
</button>
</td>
</tr>
<?php endforeach; ?>
</table><br/></div>



<!-- Modal -->
<div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Data Yang Sudah Dihapus Tidak Dapat Dikembalikan Lagi ! Yakin Untuk Menghapus ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="<?php echo site_url('pendaftar/delete/'.$pendaftar->id_pendaftar) ?>">Delete</a>
      </div>
    </div>
  </div>
</div>
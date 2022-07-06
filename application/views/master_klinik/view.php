<h1 style="text-align: center;">Master Klinik</h1>
<p>Berikut Adalah Data Master Klinik Yang Tersedia</p>
<a class="btn btn-primary btn-sm" href="<?php echo base_url();?>index.php/master_klinik/add"><i class="fa fa-plus fa-lg"></i> Add Data</a><p></p>
<div class="table-responsive">
<table id="tbl_master_klinik" class="table table-bordered table table-striped">
<thead>
<tr>
<th>Id</th>
<th>Kode Klinik</th>
<th>Nama Klinik</th>
<th>Pemilik</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>

<?php foreach ($daftar_master_klinik as $master_klinik): ?>

<tr>
<td><?php echo $master_klinik->id_klinik ?></td>
<td><?php echo $master_klinik->kode_klinik ?></td>
<td><?php echo $master_klinik->nama_klinik ?></td>
<td><?php echo $master_klinik->pemilik ?></td>
<td>
<?php 
if ($master_klinik->status=='Beroperasi')
{echo '<i class="fas fa-play-circle fa-2x text-success"></i>';}
else if ($master_klinik->status=='Tidak Beroperasi')
{echo '<i class="fas fa-stop-circle fa-2x text-danger"></i>';}
?></td>
<td>
<a class="btn btn-primary btn-sm" href="<?php echo site_url('master_klinik/edit/'.$master_klinik->id_klinik)?>"><i class="fas fa-edit fa-lg"></i></a>
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_delete_master">
  <i class="fas fa-trash fa-lg"></i>
</button>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_delete_master" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a class="btn btn-danger" href="<?php echo site_url('master_klinik/delete/'.$master_klinik->id_klinik)?>">Delete</a>
      </div>
    </div>
  </div>
</div>
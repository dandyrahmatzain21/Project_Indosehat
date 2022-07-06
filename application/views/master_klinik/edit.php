<h1 style="text-align: center;">Form Edit Master Klinik</h1><br/>
<form class="form-group" method="POST" action="<?php  echo base_url();?>index.php/master_klinik/update"/>

  <input class="form-control" type="hidden" name="id_klinik" autofocus value="<?php echo $detail_master_klinik['id_klinik'] ; ?>" readonly>
    
  <input class="form-control" type="hidden" name="kode_klinik" autofocus placeholder="Kode Klinik" value="<?php echo $detail_master_klinik['kode_klinik'] ; ?>" readonly>

  <div class="form-group">
    <label>Nama Klinik</label>
    
      <input type="text" class="form-control" name="nama_klinik" placeholder="nama_klinik" value="<?php echo $detail_master_klinik['nama_klinik'] ; ?>">
  </div>

  <div class="form-group">
    <label>Pemilik</label>
    
      <input type="text" class="form-control" name="pemilik" placeholder="Pemilik" value="<?php echo $detail_master_klinik['pemilik'] ; ?>">
  </div>

  <div class="form-group">
    <label>Status</label>
    <select class="form-control" name="status" id="status">
      <option>Beroperasi</option>
      <option>Tidak Beroperasi</option>
    </select>
  </div>

<!-- Modal -->
<div class="modal fade" id="modal_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Pastikan Data Yang Anda Edit Sudah Benar ,Yakin Untuk Mengedit & Merubah Data ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary btm-sm"><i class="fas fa-save fa-lg"></i> Save</button>
      </div>
    </div>
  </div>
</div>

</form>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit">
  <i class="fas fa-save fa-lg"></i> Save
</button>
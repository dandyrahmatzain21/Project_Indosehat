<h1 style="text-align: center;">Tambah Data Pendaftar</h1><br/>
<p>Masukan Data Pendaftar Pada Form Di Bawah Ini</p>

<form method="POST" action="<?php echo base_url() ; ?>index.php/master_klinik/save" OnSubmit="return(CekForm());">

  <div class="form-group">
    <label for="kode_klinik">Kode Klinik</label>
    <input type="text" name="kode_klinik" class="form-control" id="kode_klinik" value="<?php echo $kode_klinik; ?>" readonly>
  </div>

  <div class="form-group">
    <label for="nama_klinik">Nama Klinik Identitas</label>
    <input type="text" name="nama_klinik" class="form-control" id="nama_klinik" placeholder="Nama Klinik Identitas" required>
  </div>

  <div class="form-group">
    <label for="pemilik">Pemilik</label>
    <input type="text" name="pemilik" class="form-control" id="pemilik" placeholder="Pemilik" required>
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" name="status" id="status">
      <option>Beroperasi</option>
      <option>Tidak Beroperasi</option>
    </select>
  </div>

<!-- Modal -->
<div class="modal fade" id="modal_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Pastikan Data Yang Anda Masukan Sudah Benar ,Yakin Untuk Menambah Data ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary btm-sm"><i class="fas fa-save fa-lg"></i> Save</button>
      </div>
    </div>
  </div>
</div>

</form>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add">
  <i class="fas fa-save fa-lg"></i> Save
</button>
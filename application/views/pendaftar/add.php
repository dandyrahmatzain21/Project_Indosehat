<h1 style="text-align: center;">Tambah Data Pendaftar</h1><br/>
<p>Masukan Data Pendaftar Pada Form Di Bawah Ini</p>

<form method="POST" action="<?php echo base_url() ; ?>index.php/pendaftar/save" enctype="multipart/form-data" OnSubmit="return(CekForm());">

  <div class="form-group">
    <label for="id_pendaftar">Id Pendaftar</label>
    <input type="text" name="id_pendaftar" class="form-control" id="id_pendaftar" value="<?php echo $id_pendaftar; ?>" readonly>
  </div>

  <div class="form-group">
    <label for="creator">Creator</label>
    <input type="text" name="creator" class="form-control" id="creator" placeholder="Creator" required >
  </div>

  <div class="form-group">
    <label for="kode_klinik">Kode Klinik</label>
    <select name="kode_klinik" class="form-control" id="kode_klinik" required>
    <?php
      foreach($daftar_master_klinik as $row){ ?>
       <option value="<?php echo $row->kode_klinik ?>"><?php echo $row->kode_klinik ?> - <?php echo $row->nama_klinik ?></option>
      <?php  }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="no_identitas">Nomor Passport / Identitas</label>
    <input type="number" name="no_identitas" class="form-control" id="no_identitas" placeholder="No Identitas" required>
  </div>

  <div class="form-group">
    <label for="nama">Nama Identitas</label>
    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Identitas" required>
  </div>

  <div class="form-group">
    <label for="file_dokumen">File Dokumen</label>
    <input type="file" name="file_dokumen" class="form-control" id="file_dokumen" placeholder="File Dokumen" required>
  </div>

  <div class="form-group">
    <label for="sertifikat_lab">Sertifikat Lab</label>
    <input type="file" name="sertifikat_lab" class="form-control" id="sertifikat_lab" placeholder="Sertifikat Lab" required>
  </div>

  <div class="form-group">
    <label for="tanggal_berlaku_sertifikat">Tanggal Berlaku Sertifikat</label>
    <input type="date" name="tanggal_berlaku_sertifikat" id="tanggal_berlaku_sertifikat" class="form-control" placeholder="Tanggal Berlaku Sertifikat" required>
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
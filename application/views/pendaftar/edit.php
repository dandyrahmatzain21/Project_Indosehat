<h1 style="text-align: center;">Form Edit Pendaftar</h1><br/>    
<form method="POST" action="<?php echo base_url() ; ?>index.php/pendaftar/update" enctype="multipart/form-data" />

  <input class="form-control" type="hidden" name="id_pendaftar" autofocus value="<?php echo $detail_pendaftar['id_pendaftar'] ; ?>" readonly>

  <div class="form-group">
    <label>Creator</label>
    
      <input class="form-control" type="text" name="creator" autofocus placeholder="Creator" value="<?php echo $detail_pendaftar['creator'] ; ?>" >
  </div>

   <div class="form-group">
    <label>Kode Klinik</label>
    <select name="kode_klinik" class="form-control" id="kode_klinik">
    <option value="<?php echo $detail_pendaftar['kode_klinik'] ; ?>"><?php echo $detail_pendaftar['kode_klinik'] ; ?> - Dipilih</option>
    <?php
      foreach($daftar_master_klinik as $row){ ?>
       <option value="<?php echo $row->kode_klinik ?>"><?php echo $row->kode_klinik ?> - <?php echo $row->nama_klinik ?></option>
      <?php  }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label>Nomor Passport / Identitas</label>
    
      <input type="number" class="form-control" name="no_identitas" placeholder="Nomor Identitas" value="<?php echo $detail_pendaftar['no_identitas'] ; ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    
      <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $detail_pendaftar['nama'] ; ?>">
  </div>

  <!--FILE DOKUMEN-->
  <div class="form-group">
    <label for="file_dokumen">File Dokumen</label>
    <div style="padding:1%">
    <img src="<?php echo base_url('assets/file_dokumen/'.$detail_pendaftar['file_dokumen']) ?>" width="150px">
    </div>
    <input type="file" name="file_dokumen" class="form-control" id="file_dokumen" placeholder="File Dokumen" /><small class="text-danger">* Biarkan Jika Tidak Ingin Diubah</small>
    <input type="hidden" name="old_file_dokumen" class="form-control" id="old_file_dokumen" value="<?php echo $detail_pendaftar['file_dokumen'] ; ?>"/>
  </div>


  <!--SERTIFIKAT LAB-->
  <div class="form-group">
    <label for="sertifikat_lab">Sertifikat Lab</label>
    <div style="padding:1%">
    <img src="<?php echo base_url('assets/file_dokumen/'.$detail_pendaftar['sertifikat_lab']) ?>" width="150px">
    </div>
    <input type="file" name="sertifikat_lab" class="form-control" id="sertifikat_lab" placeholder="Sertifikat Lab" /><small class="text-danger">* Biarkan Jika Tidak Ingin Diubah</small>
    <input type="hidden" name="old_sertifikat_lab" class="form-control" id="old_sertifikat_lab" value="<?php echo $detail_pendaftar['sertifikat_lab'] ; ?>"/>
  </div>


  <div class="form-group">
    <label for="tanggal_berlaku_sertifikat">Tanggal Berlaku Sertifikat</label>
    <input type="date" name="tanggal_berlaku_sertifikat" id="tanggal_berlaku_sertifikat" class="form-control" placeholder="Tanggal Berlaku Sertifikat" value="<?php echo $detail_pendaftar['tanggal_berlaku_sertifikat'] ; ?>">
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
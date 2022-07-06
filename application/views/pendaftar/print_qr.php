<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Indosehat 2003</title>
  
  <?php $this->load->view('part/css_link')?>
</head>
<body>
<div style="text-align: center;">
	<img src="argon-template/assets/img/brand/indosehat.png" width="500px"><br/>
	<h3 style="margin-top : 5%">QR Code</h3>
	<img style="margin-top : 1%" src="assets/file_dokumen/<?=$pendaftar->id_pendaftar?>.png" width="200px">
	<p style="margin-top: -3%"><?php echo $pendaftar->id_pendaftar ?> | <?php echo $pendaftar->nama ?></p>
</div>
</body>
</html>
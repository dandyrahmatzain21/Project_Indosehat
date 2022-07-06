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
  <!-- Sidenav -->
  <?php $this->load->view('part/side_nav')?>
  <!-- Main content -->
  <div class="main-content" id="panel">
  <!-- Topnav -->
  <?php $this->load->view('part/top_nav')?>
  <!-- Header -->
  <?php $this->load->view('part/header')?>
  <!-- Page content -->  

  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12">
        <div class="card bg-white">
          <div class="card-header bg-transparent">
            <!--<div class="row align-items-center">
              <div class="col">
                <h1 style="text-align: center">@yield('judul_halaman')</h1>
              </div>
            </div>-->
          </div>
          <div style="padding: 1%">
            <?php 
        if(isset($page)){
          $this->load->view($page);
      }else{
        echo '
    <h1 style="text-align:center;">INDOSEHAT Generator & INDOSEHAT Viewer</h1>
    <p class="lead">Sistem INDOSEHAT adalah seperangkat teknologi yang digunakan untuk memastikan seseorang yang telah disertifikasi pemeriksaan kesehatannya oleh Klinik Indosehat 2003, dan dapat membuktikan sertifikat tersebut ketika akan bepergian atau dalam rangka memenuhi persyaratan protokol kesehatan.

 </p>';
      }
      ?>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
  </div>
  
  <!-- JavaScripts -->
  <?php $this->load->view('part/javascript_link')?>
</body>

</html>

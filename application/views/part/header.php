<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">INDOSEHAT 2003</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <?php foreach ($this->uri->segments as $segment): ?>
  <?php 
    $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
    $is_active =  $url == $this->uri->uri_string;
  ?>
                <li class="breadcrumb-item active" aria-current="page">
                  <?php if($is_active): ?>
      <?php echo ucfirst($segment) ?>
    <?php else: ?>
      <a href="<?php echo site_url($url.'/view') ?>"><?php echo ucfirst($segment) ?></a>
    <?php endif; ?></li>

<?php endforeach; ?>
              </ol>
            </nav>
          </div>
          <!--<div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div>-->
        </div>
        <!-- Card stats -->
      </div>
    </div>
  </div>
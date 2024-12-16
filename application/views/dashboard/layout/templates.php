<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('dashboard/layout/head'); ?>

<body>
  <div class="container-scroller">
    <?php $this->load->view('dashboard/layout/header'); ?>

    <div class="container-fluid page-body-wrapper">

      <?php $this->load->view('dashboard/layout/sidebar'); ?>

      <div class="main-panel">
        <?php $this->load->view('alert'); ?>
        <div class="content-wrapper">
          <?= $contents ?>
        </div>

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
      </div>
    </div>   
  </div>
  
  <?php $this->load->view('dashboard/layout/footer'); ?>

</body>

</html>


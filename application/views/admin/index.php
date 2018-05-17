<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Halaman Utama Admin</title>
      <!-- BOOTSTRAP STYLES-->
      <link href="<?php echo base_url("assets/admin"); ?>/css/bootstrap.css" rel="stylesheet" />
      <!-- FONTAWESOME STYLES-->
      <link href="<?php echo base_url("assets/admin"); ?>/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLES-->
      <link href="<?php echo base_url("assets/admin"); ?>/css/custom.css" rel="stylesheet" />
      <!-- GOOGLE FONTS-->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   </head>
   <body>
      <div id="wrapper">
       <?php echo $header;?>
         <div id="page-wrapper" >
            <div class="container">
               <div id="page-inner">
                  <hr />
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="alert alert-info">
                           <strong>Selamat Datang Admin ! </strong> 
                        </div>
                     </div>
                  </div>
                  <!-- /. ROW  --> 
                  <div class="row text-center pad-top">
                     <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/tambahgejala")?>" style="color: red;">
                              <i class="fa fa-circle-o-notch fa-5x"></i>
                              <h4>Tambah Gejala Kerusakan</h4>
                           </a>
                        </div>
                     </div>
                      <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/lihatgejala")?>"  style="color: red;">
                              <i class="fa fa-circle-o-notch fa-5x"></i>
                              <h4>Lihat Gejala Kerusakan</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/editgejala")?>"  style="color: red;">
                              <i class="fa fa-envelope-o fa-5x"></i>
                              <h4>Edit Gejala Kerusakan</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/tambahjenis")?>" >
                              <i class="fa fa-lightbulb-o fa-5x"></i>
                              <h4>Tambah Jenis Kerusakan</h4>
                           </a>
                        </div>
                     </div>
                      <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/lihatjenis")?>" >
                              <i class="fa fa-circle-o-notch fa-5x"></i>
                              <h4>Lihat Jenis Kerusakan</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/editjenis")?>" >
                              <i class="fa fa-users fa-5x"></i>
                              <h4>Edit Jenis Kerusakan</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/tambahsolusi")?>"  style="color: black;">
                              <i class="fa fa-key fa-5x"></i>
                              <h4>Tambah Solusi</h4>
                           </a>
                        </div>
                     </div>
                      <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/lihatsolusi")?>" style="color: black;" >
                              <i class="fa fa-circle-o-notch fa-5x"></i>
                              <h4>Lihat Solusi</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/editsolusi")?>"  style="color: black;">
                              <i class="fa fa-comments-o fa-5x"></i>
                              <h4>Edit Solusi</h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <div class="div-square">
                           <a href="<?php echo base_url("admin/tambahrelasi");?>"  style="color: green;">
                              <i class="fa fa-clipboard fa-5x"></i>
                              <h4>Tambah Relasi</h4>
                           </a>
                        </div>
                     </div>
                      <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 hide">
                        <div class="div-square">
                           <a href="<?php echo(base_url("admin/lihatrelasi")) ?>"  style="color: green;">
                              <i class="fa fa-circle-o-notch fa-5x"></i>
                              <h4>Lihat Relasi</h4>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- /. ROW  --> 
               </div>
            </div>
            <!-- /. PAGE INNER  -->
         </div>
         <!-- /. PAGE WRAPPER  -->
      </div>
      <?php echo $footer;?>
      <!-- /. WRAPPER  -->
      <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
      <!-- JQUERY SCRIPTS -->
      <script src="<?php echo base_url("assets/admin"); ?>/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
      <script src="<?php echo base_url("assets/admin"); ?>/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
      <script src="<?php echo base_url("assets/admin"); ?>/js/custom.js"></script>
   </body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Halaman Tambah Relasi</title>
      <!-- BOOTSTRAP STYLES-->
      <link href="<?php echo base_url("assets/admin"); ?>/css/bootstrap.css" rel="stylesheet" />
      <!-- DATATABLES -->
      <link href="<?php echo base_url("assets/others"); ?>/DataTables/datatables.min.css" rel="stylesheet" />
      <!-- BOOTSTRAP SELECT  -->
      <link href="<?php echo base_url("assets/others"); ?>/css/bootstrap-select.css" rel="stylesheet" />
      <!-- FONTAWESOME STYLES-->
      <link href="<?php echo base_url("assets/admin"); ?>/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLES-->
      <link href="<?php echo base_url("assets/admin"); ?>/css/custom.css" rel="stylesheet" />
      <style type="text/css">
         .error{
         color:red;
         }
      </style>
      <!-- GOOGLE FONTS-->
      <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
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
               <div class="alert alert-danger">
                  <strong><b><i>Tolong Pilih Jenis Kerusakan Terlebih Dahulu</b></i></b></strong> 
               </div>
            </div>
         </div>
         <?php 
            if($this->session->flashdata('berhasil') == "1"){
              ?>
         <div class="row">
            <div class="col-lg-12">
               <div class="alert alert-success">
                  <strong>Berhasil Insert!!!!</strong> 
               </div>
            </div>
            <?php
               }else if($this->session->flashdata('berhasil') == "0"){
                 ?>
            <div class="row">
               <div class="col-lg-12">
                  <div class="alert alert-danger">
                     <strong>Gagal Insert!!!!</strong> 
                  </div>
               </div>
               <?php
                  }
                  ?>
               <!-- /. ROW  --> 
               <div class="row text-center pad-top" id="div-relasi">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                     <form action="" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                          <div class="form-group">
                           <label class="control-label col-sm-2" for="nama">Jenis Kerusakan</label>
                           <div class="col-sm-9">
                              <select name="jenis" id="jenis" class="form-control" required="required" data-live-search="true" data-width="100%">
                                 <option value="">[TOLONG PILIH JENIS KERUSAKAN]</option>
                                 <?php foreach ($jenis as $value): ?>
                                 <option value="<?php echo($value['id']) ?>"><?php echo($value['kode']) ?> -- <?php echo($value['nama']) ?></option>
                                 >
                                 <?php endforeach ?>
                              </select>
                           </div>
                        </div>
                           <div class="form-group">
                              <label class="control-label col-sm-2" for="nama" style="color: red">Solusi Kerusakan</label>
                              <div class="col-sm-9">
                                 <select name="solusi" id="solusi" class="form-control" required="required" data-live-search="true" data-width="100%">
                                  <option value="" selected="">[TOLONG PILIH SOLUSI KERUSAKAN]</option>
                                    <?php foreach ($solusi as $value): ?>
                                    <option value="<?php echo($value['id']) ?>"><?php echo($value['kode']) ?> -- <?php echo($value['nama']) ?></option>
                                    >
                                    <?php endforeach ?>
                                 </select>
                              </div>
                           </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="nama" style="color: red"></label>
                              <div class="col-sm-9">
                                <button type="button" class="btn btn-danger col-sm-12" onclick="lihatRelasi();">
                                 Lihat Relasi
                              </button>
                              </div>
                            </div>
                            <hr/>
                            <hr/>
                            <div id="div-gejala">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="nama" style="color: green;">Gejala Kerusakan</label>
                              <div class="col-sm-9">
                                  <table class="table table-striped table-bordered" id="table-gejala">
                                    <thead>
                                       <tr>
                                          <th class="text-center">No</th>
                                          <th class="text-center">Nama Gejala</th>
                                          <th class="text-center">Check</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($gejala as $key => $value): ?>
                                       <tr>
                                          <td class="text-center"><?php echo ($key+1) ?></td>
                                          <td class="text-left"><?php echo $value['nama']; ?></td>
                                          <td class="text-center">
                                             <input type="checkbox" value="<?php echo($value['id']) ?>">
                                          </td>
                                       </tr>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                            </div>
                             <div class="form-group">
                              <label class="control-label col-sm-2" for="nama" style="color: red"></label>
                              <div class="col-sm-9">
                                <button type="button" class="btn btn-success col-sm-12" onclick="submitRelasi();">
                                 Update Relasi
                              </button>
                              </div>
                            </div>
                          </div>
                         </div>
                         <hr/>
                     </form>
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
      <script src="<?php echo base_url("assets/others"); ?>/js/jquery-3.1.1.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
      <script src="<?php echo base_url("assets/admin"); ?>/js/bootstrap.min.js"></script>
      <!-- DATATABLE -->
      <script src="<?php echo base_url("assets/others"); ?>/DataTables/datatables.min.js"></script>
      <!-- BOOTSTRAP SELECT  -->
      <script src="<?php echo base_url("assets/others"); ?>/js/bootstrap-select.js"></script>
      <!-- JQUERY VALIDATE -->
      <script src="<?php echo base_url("assets/others"); ?>/js/jquery.validate.js"></script>
      <!-- CUSTOM SCRIPTS -->
      <script src="<?php echo base_url("assets/admin"); ?>/js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function($) {
          // $('#div-relasi').hide();
          $('select').selectpicker();
          $('#table-gejala').DataTable({
            "paging":   false,
            "ordering": false,
            "info":     false,
            "scrollY":        "500px",
        "scrollCollapse": true,
          });
          $('#div-gejala').hide();
          $('#jenis, #solusi').change(function(event) {
            /* Act on the event */
            $('#div-gejala').hide();
          });
         });
         
         function submitRelasi(){
          var solusi = $('#solusi').val();
          var jenis = $('#jenis').val();
          if(jenis == ""){
            alert("Jenis Kerusakan Harus Dipilih");
          }else if(solusi.length == 0){
            alert("solusi harus di centang minimal 1");
          } else{
            
          }
        }

        function lihatRelasi(){
          var solusi = $('#solusi').val();
          var jenis = $('#jenis').val();
          if(solusi != "" && jenis != ""){

          jQuery.ajax({
            url: '<?php echo base_url("admin/getrelasi"); ?>',
            type: 'GET',
            dataType: 'json',
            data: {solusi: solusi, jenis:jenis},
            beforeSend:function(xhr){
              $('#table-gejala').find('tbody').find('tr').each(function(index, el) {
                    var $td = $(this).find('td');
                    var $td3 = $td.eq(2);
                        $td3.find('input[type=checkbox]').prop('checked', false);
                  });
            },
            complete: function(xhr, textStatus) {
              //called when complete
              $('#div-gejala').show();
            },
            success: function(response, textStatus, xhr) {
              //called when successful
              $('#table-gejala').find('tbody').find('tr').each(function(index, el) {
                    var $td = $(this).find('td');
                    var $td3 = $td.eq(2).find('input[type=checkbox]');
                    var $cb = $td3.val();
                    for (var i = 0; i < response.length; i++) {
                      if(response[i].id_gejala==$cb){
                        $td3.prop('checked', true);
                      }
                    }
                  });
            },
            error: function(xhr, textStatus, errorThrown) {
              //called when there is an error
            }
          });
          }
        }

        function submitRelasi(){
          var solusi = $('#solusi').val();
          var jenis = $('#jenis').val();
           var gejala = [];
          $('#table-gejala').find('tbody').find('tr').each(function(index, el) {
                    var $td = $(this).find('td');
                    var $td1 = $td.eq(0).text();
                    var $td2 = $td.eq(1).text();
                    var $td3 = $td.eq(2).find('input[type=checkbox]');
                    if($td3.is(":checked")){
                    var $cb = $td3.val();
                    gejala.push($cb);
                    }
                   
                  });
          if(gejala.length >0){

          var cf = confirm("Apa anda ingin submit relas?");
            if(cf){
            var request = {
              solusi:solusi,
              jenis:jenis,
              gejala:gejala
            };
            jQuery.ajax({
              url: '<?php echo base_url("admin/submit/tambahrelasi"); ?>',
              type: 'POST',
              dataType: 'json',
              data: request,
              complete: function(xhr, textStatus) {
                //called when complete
              },
              success: function(response, textStatus, xhr) {
                //called when successful
               if(response > 0){
                alert("sukses insert/update");
                window.location.reload();
               }else{
                alert("gagal, tolong hubungi administrator");
               }
              },
              error: function(xhr, textStatus, errorThrown) {
                //called when there is an error
              }
            });
          }
          }else{
            alert("anda harus centang salah satu!!!!");
          }
        }
         
      </script>
   </body>
</html>
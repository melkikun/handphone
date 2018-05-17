<?php
// echo var_dump($data[0]['nama']);
// exit();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Halaman Perubahan Gejala</title>
   <!-- BOOTSTRAP STYLES-->
   <link href="<?php echo base_url("assets/admin"); ?>/css/bootstrap.css" rel="stylesheet" />
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
              <div class="alert alert-warning">
                <strong>Form Edit Gejala Kerusakan</strong> 
              </div>
            </div>
          </div>
         <?php 
         if($this->session->flashdata('berhasil') == "1"){
          ?>
          <div class="row">
               <div class="col-lg-12">
                <div class="alert alert-success">
                  <strong>Berhasil Update!!!!</strong> 
               </div>
            </div>
          <?php
       }else if($this->session->flashdata('berhasil') == "0"){
        ?>
        <div class="row">
               <div class="col-lg-12">
                <div class="alert alert-danger">
                  <strong>Gagal Update!!!!</strong> 
               </div>
            </div>
        <?php
     }
     ?>
     <!-- /. ROW  --> 
     <div class="row text-center pad-top">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
         <?php 
         $attributes = array('class' => 'form-horizontal', 'id' => 'tambahgejala');

         echo form_open('admin/submit/editgejala', $attributes);

         ?>
         <input type="hidden" name="id" id="id" class="form-control" value="<?=$data[0]['id']?>">
         <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Kode Gejala</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Tolong Masukkan Angka" aria-describedby="basic-addon2" name="kode" id="kode" value="<?=$data[0]['kode']; ?>" readonly="">
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama Gejala</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" id="nama" placeholder="Masukkan Nilaiama Gejala" name="nama" value="<?=$data[0]['nama']?>">
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Nilai CF</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="cf" placeholder="Masukkan nilai CF Pakar" name="cf" value="<?= $data[0]['cf']?>">
           </div>
        </div>
        <div class="form-group">        
         <div class="col-sm-offset-2 col-sm-10">
           <button type="submit" class="btn btn-danger col-lg-12">Update</button>
        </div>
     </div>
     <?php echo form_close();?>
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
<!-- JQUERY VALIDATE -->
<script src="<?php echo base_url("assets/others"); ?>/js/jquery.validate.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url("assets/admin"); ?>/js/custom.js"></script>
<script type="text/javascript">
   $(document).ready(function($) {
      $('#tambahgejala').validate({
         rules:{

            nama:"required",
            cf: {
               required: true,
               number: true
            }
         },
         messages:{
            nama:"gejala kerusakan tidak boleh kosong",
            cf:"cf harus berupa angka dan tidak boleh kosong"
         },
         submitHandler: function() { 
            var cf = confirm("apa anda yakin update data?");
            if(cf == true){
               return true;
            }
         }
      });
   });
</script>
</body>
</html>
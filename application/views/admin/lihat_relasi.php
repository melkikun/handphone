<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Halaman Lihat Jenis Relasi</title>
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
         .close{
         	display: none !important;
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
                        <div class="alert alert-danger text-center" style="font-size: 20px;">
                           <strong>Relasi Jenis, Gejala, dan Solusi Kerusakan</strong> 
                        </div>
                     </div>
                  </div>
                  <!-- /. ROW  --> 
                  <div class="row pad-top" style="padding: 25px;">
                     <div class="bs-example">
                        <div class="panel-group" id="accordion">
                        	<?php foreach ($solusi as $key => $value): ?>
                        		
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $key?>">
                                    	<?php echo $value['kode']." -- ". $value['nama']; ?>
                                    </a>
                                 </h4>
                              </div>
                              <div id="collapse-<?php echo $key?>" class="panel-collapse collapse">
                                 <div class="panel-body">
                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                 		 <?php 
                                   		// echo $value['id'];
                                   		$sql = "select distinct r.id_jenis, jk.nama, jk.kode from relasi r inner join jenis_kerusakan jk 
on jk.id=r.id_jenis where r.id_solusi = '$value[id]'";
// echo($sql);
                                   		$query = $this->db->query($sql);
                                   		$no  = 1;
                                   		foreach ($query->result_array() as $value1) {
                                   			?>
                                   			 <div class="panel panel-default">
                                   			 	<div class="panel-body">
                                   			 		<div class="alert 
                                   			 			<?php 
                                   			 				if($no%3==0){
                                   			 					echo("alert-danger");
                                   			 				}elseif($no%3 == 1){
                                   			 					echo("alert-warning");
                                   			 				}else{
                                   			 					echo("alert-success");
                                   			 				}
                                   			 			?>
                                   			 		">
                                   			 			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>`
                                   			 			<strong>Jenis Kerusakann : </strong> <?php echo $value1['nama'] ?>
                                   			 		</div>
                                   			 		<table class="table table-bordered table-striped">
                                   			 			<thead>
                                   			 				<tr>
                                   			 					<th class="text-center">No</th>
                                   			 					<th class="text-center">Gejala Kerusakan</th>
                                   			 					<th class="text-center">CF Pakar</th>
                                   			 				</tr>
                                   			 			</thead>
                                   			 			<tbody>
                                   			 				<?php 
                                   			 					$sql1 = "select * from relasi where id_jenis = '$value1[id_jenis]' and id_solusi = '$value[id]'";
                                   			 					$sql1 = " select r.*, gk.* from relasi r 
																			 inner join gejala_kerusakan gk 
																			 on gk.id = r.id_gejala
																			 where r.id_jenis = '$value1[id_jenis]' and r.id_solusi = '$value[id]'";
                                   			 					$query1 = $this->db->query($sql1);
                                   			 					$no1 = 0;
                                   			 					foreach ($query1->result_array() as $value2) {
                                   			 						?>
                                   			 						<tr>
                                   			 							<td class="text-center"><?php echo ++$no1; ?></td>
                                   			 							<td class="text-left"><?php echo $value2['kode']." -- ". $value2['nama'] ?></td>
                                   			 							<td class="text-center"><?php echo $value2['cf']; ?></td>
                                   			 						</tr>
                                   			 						<?php
                                   			 					}
                                   			 				 ?>
                                   			 				
                                   			 			</tbody>
                                   			 		</table>
                                   			 	</div>
                                   			 </div>
                                   			<?php
                                   			$no++;
                                   		}
                                    ?>
                                 </div>	
                                 </div>
                              </div>
                           </div>
                        	<?php endforeach ?>
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
      <script src="<?php echo base_url("assets/others"); ?>/js/jquery-3.1.1.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
      <script src="<?php echo base_url("assets/admin"); ?>/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
      <script src="<?php echo base_url("assets/admin"); ?>/js/custom.js"></script>
   </body>
</html>
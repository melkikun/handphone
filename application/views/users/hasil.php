<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Halaman Hasil</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap tdemes, free template, free bootstrap, free website template">
        <link rel="stylesheet" href="<?php echo base_url("assets/users/"); ?>template/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url("assets/users/"); ?>template/css/bootstrap.min.css">
         <!-- DATATABLES -->
     	<link href="<?php echo base_url("assets/others"); ?>/DataTables/datatables.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url("assets/users/"); ?>template/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url("assets/users/"); ?>template/css/style.css">
    </head>
    <body id="top" data-spy="scroll">
        <!--top header-->
        <?php echo($header); ?>
        <!--service-->
        <div id="service">
        	<div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3">
                        <div class="service-heading">
                            <h2>Hasil</h2> 
                        </div>
                    </div>
                </div>   	
            </div>
            <section>
                <div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered" id="table-input">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="vertical-align: middle;">No</th>
                                            <th class="text-center" style="vertical-align: middle;">Gejala Kerusakan</th>
                                            <th class="text-center" style="vertical-align: middle;">Jenis Kerusakan</th>
                                            <th class="text-center" style="vertical-align: middle;">Solusi Kerusakan</th>
                                            <th class="text-center" style="vertical-align: middle;">Cf User</th>
                                            <th class="text-center" style="vertical-align: middle;">%(Prosentase)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        //mendapatkan input nilai cf
										$cf = $this->input->get("cf");
                                        //mendapatkan id gejala pada database
										$id = $this->input->get('id');
                                        // mengambil nilai id gejala sampai dengan n-1
										$idInclude = substr($id, 0, strlen($id)-1);
                                        //query untuk mengambil kesimpulan dari relasi 
										$sql ="
											SELECT DISTINCT r.id_relasi, r.id_solusi, sk.nama AS nama_solusi, sk.kode AS kode_solusi, r.id_jenis, jk.kode AS kode_jenis, jk.nama AS nama_jenis
                                            FROM relasi r
                                            INNER JOIN solusi_kerusakan sk ON sk.id = r.id_solusi
                                            INNER JOIN jenis_kerusakan jk ON jk.id = r.id_jenis
                                            WHERE r.id_gejala IN($idInclude)";
                                        //proses hasil query di dabase untuk forrward chaining mana yang berhubungan
										$query =  $this->db->query($sql);
                                        //looping untuk proses forward chaining
                                        foreach ($query->result_array() as $key => $value) {
                                            ?>
                                            <tr>
                                            	<td class="text-center"><?php echo($key+1) ?></td>
                                                <td>
                                                    <?php 
                                                    //menampung nomer data
                                                    $nomer = array();
                                                    //menampung nilai cf pakar
                                                    $cfPakar = array();
                                                    //mengambi id solusi dari query pertama
                                                    $id_solusi = $value['id_solusi']; 
                                                    //mengambil id relasi dari query pertama
                                                    $id_relasi = $value['id_relasi'];
                                                    //query ke dua untuk menimpilkan relasi forward chaining mana yang akan sesuai dengan gejala
                                                        $sqlx= "select r.*, gk.nama, gk.kode, gk.cf from relasi r 
                                                                inner join gejala_kerusakan gk 
                                                                on gk.id = r.id_gejala
                                                                where r.id_solusi = $id_solusi and r.id_relasi = $id_relasi and r.id_gejala in ($idInclude)";
                                                                //proses query ke dua
                                                                $queryx = $this->db->query($sqlx);
                                                                // menampilkan nilai dari gejala kerusakan
                                                        foreach ($queryx->result_array() as $valuex) {
                                                            //proses print gejala kerusakan
                                                            echo($valuex['kode']." -- ". $valuex['nama'] . " | ($valuex[cf]) ")."<br>";
                                                            array_push($nomer, $valuex['id_gejala']);
                                                            array_push($cfPakar, $valuex['cf']);
                                                        }
                                                     ?>
                                                </td>
                                                <!-- menampilkan jenis kerusakan -->
                                            	<td><?php echo $value['kode_jenis']." -- ".$value['nama_jenis'] ?></td>
                                            	<!-- menampilkan solusi kerusakan -->
                                            	<td><?php echo $value['kode_solusi']." -- ".$value['nama_solusi'] ?></td>
                                            	<td class="text-center">
                                            		<?php 
                                                    //proses perhitungan nilai cf user
                                            		$perhitungan = array();
                                            		$id = str_replace("'", "", $idInclude);
                                            		$cfInclude = str_replace("'", "", substr($cf, 0, strlen($cf)-1));
                                            		$idSplit = explode(',', $id);
                                            		$cfSplit = explode(',', $cfInclude);
                                            		for($i = 0; $i < count($idSplit); $i++){
                                            			for($j = 0; $j  < count($nomer); $j++){
                                            				if($nomer[$j] == $idSplit[$i]){
                                            					$hasil = $cfPakar[$j]*$cfSplit[$i];
                                            					echo  "G".$nomer[$j]." (".$cfSplit[$i] . ")" . "<br/>";
                                            				}
                                            			}
                                            		}
                                            		?>
                                            	</td>
                                            	<td class="text-center">
                                            		<b>
                                            		<?php 
                                                    //proses perhitugan forward chaining untuk 1 gejala
                                            		$perhitungan = array();
                                                    //mengambil id 
                                            		$id = str_replace("'", "", $idInclude);
                                                    //mengambil id incude
                                            		$cfInclude = str_replace("'", "", substr($cf, 0, strlen($cf)-1));
                                                    //split id  dengan koma
                                            		$idSplit = explode(',', $id);
                                                    //splig id inlude dengan koma
                                            		$cfSplit = explode(',', $cfInclude);
                                                    //proses looping dan peritungan
                                            		for($i = 0; $i < count($idSplit); $i++){
                                            			for($j = 0; $j  < count($nomer); $j++){
                                            				if($nomer[$j] == $idSplit[$i]){
                                            					$hasil = $cfPakar[$j]*$cfSplit[$i];
                                            					array_push($perhitungan, $hasil);
                                            				}
                                            			}
                                            		}
                                                    //proses perhitungan forward chaining 
                                                    //1. jika jummlah gejala adalah 1 maka nilai perhitungan sesuai dengan perhitungan sebelumnya
                                                    // CFgejala1 = CF(user)*CF(pakar)
                                            		if(count($perhitungan) == 1){
                                            			echo number_format($perhitungan[0],2)."%";
                                            		}else if(count($perhitungan) == 2){
                                                        //jika nilai gejala adalah 2 maka dia akan menggunakan cf combine 
                                                        // CFcombine1(CFgejala1,CFgejala2) = CFgejala1+ CFgejala2*(1- CFgejala1)
                                            			$cfCombine = $perhitungan[0]+$perhitungan[1]*(1-$perhitungan[0]);
                                            			echo(number_format($cfCombine,2))."%";
                                            		}else if(count($perhitungan) == 3){
                                            			$cfCombine = $perhitungan[0]+($perhitungan[1]*(1-$perhitungan[0]));
                                            			$cfCombine2 = $cfCombine+($perhitungan[2]*(1-$cfCombine));
                                            			echo(number_format($cfCombine2*100, 2))."%";
                                            		}else if(count($perhitungan) == 4){
                                                        $cfCombine = $perhitungan[0]+($perhitungan[1]*(1-$perhitungan[0]));
                                                        $cfCombine2 = $cfCombine+($perhitungan[2]*(1-$cfCombine));
                                                        $cfCombine3 = $cfCombine2+($perhitungan[3]*(1-$cfCombine2));
                                                        echo(number_format($cfCombine3*100, 2))."%";
                                                    }else if(count($perhitungan) == 4){
                                                        $cfCombine = $perhitungan[0]+($perhitungan[1]*(1-$perhitungan[0]));
                                                        $cfCombine2 = $cfCombine+($perhitungan[2]*(1-$cfCombine));
                                                        $cfCombine3 = $cfCombine2+($perhitungan[3]*(1-$cfCombine2));
                                                        $cfCombine4 = $cfCombine3+($perhitungan[4]*(1-$cfCombine3));
                                                        echo(number_format($cfCombine4*100, 2))."%";
                                                    }
                                            		?>
                                            	</b>
                                            	</td>
                                        	</tr>
                                            <?php
                                        	} 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </section>
            <hr/>
        </div>
         <!-- MODAL -->
      <div class="modal fade" tabindex="-1" role="dialog" id="bantuan">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center">Keterangan Bantuan</h4>
               </div>
               <div class="modal-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nilai CF</th>
                            <th class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">0.2</td>
                            <td class="text-left">Sangat Tidak Yakin</td>
                        </tr>
                        <tr>
                            <td class="text-center">21</td>
                            <td class="text-center">0.4</td>
                            <td class="text-left">Tidak Yakin</td>
                        </tr>
                        <tr>
                            <td class="text-center">31</td>
                            <td class="text-center">0.6</td>
                            <td class="text-left">CUkup Yakin</td>
                        </tr>
                        <tr>
                            <td class="text-center">41</td>
                            <td class="text-center">0.8</td>
                            <td class="text-left">Yakin</td>
                        </tr>
                        <tr>
                            <td class="text-center">51</td>
                            <td class="text-center">1.0</td>
                            <td class="text-left">Sangat Yakin</td>
                        </tr>
                    </tbody>
                </table>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
        <!-- jQuery -->
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.min.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/bootstrap.min.js"></script>
        <!-- DATATABLE -->
      	<script src="<?php echo base_url("assets/others"); ?>/DataTables/datatables.min.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.flexslider.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.inview.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/script.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/contactform/contactform.js"></script>
        <script type="text/javascript">
          function test(){
                                     $('#bantuan').modal('show');
                                 }
        </script>
    </body>
</html>

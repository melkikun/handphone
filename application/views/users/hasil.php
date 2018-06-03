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
										$cf = $this->input->get("cf");
										$id = $this->input->get('id');
										$idInclude = substr($id, 0, strlen($id)-1);
										$sql ="
											SELECT DISTINCT r.id_relasi, r.id_solusi, sk.nama AS nama_solusi, sk.kode AS kode_solusi, r.id_jenis, jk.kode AS kode_jenis, jk.nama AS nama_jenis
FROM relasi r
INNER JOIN solusi_kerusakan sk ON sk.id = r.id_solusi
INNER JOIN jenis_kerusakan jk ON jk.id = r.id_jenis
WHERE r.id_gejala IN($idInclude)";
										$query =  $this->db->query($sql);
                                        foreach ($query->result_array() as $key => $value) {
                                            ?>
                                            <tr>
                                            	<td class="text-center"><?php echo($key+1) ?></td>
                                                <td>
                                                    <?php 
                                                    $nomer = array();
                                                    $cfPakar = array();
                                                    $id_solusi = $value['id_solusi']; 
                                                    $id_relasi = $value['id_relasi'];
                                                        $sqlx= "select r.*, gk.nama, gk.kode, gk.cf from relasi r 
                                                                inner join gejala_kerusakan gk 
                                                                on gk.id = r.id_gejala
                                                                where r.id_solusi = $id_solusi and r.id_relasi = $id_relasi and r.id_gejala in ($idInclude)";
                                                                $queryx = $this->db->query($sqlx);
                                                        foreach ($queryx->result_array() as $valuex) {
                                                            echo($valuex['kode']." -- ". $valuex['nama'] . " | ($valuex[cf]) ")."<br>";
                                                            array_push($nomer, $valuex['id_gejala']);
                                                            array_push($cfPakar, $valuex['cf']);
                                                        }
                                                     ?>
                                                </td>
                                            	<td><?php echo $value['kode_jenis']." -- ".$value['nama_jenis'] ?></td>
                                            	
                                            	<td><?php echo $value['kode_solusi']." -- ".$value['nama_solusi'] ?></td>
                                            	<td class="text-center">
                                            		<?php 
                                            		$perhitungan = array();
                                            		$id = str_replace("'", "", $idInclude);
                                            		$cfInclude = str_replace("'", "", substr($cf, 0, strlen($cf)-1));
                                            		$idSplit = explode(',', $id);
                                            		$cfSplit = explode(',', $cfInclude);
                                            		for($i = 0; $i < count($idSplit); $i++){
                                            			for($j = 0; $j  < count($nomer); $j++){
                                            				if($nomer[$j] == $idSplit[$i]){
                                            					$hasil = $cfPakar[$j]*$cfSplit[$i];
                                            					// echo $nomer[$j]. " == " . $cfPakar[$j] . " == ". $cfSplit[$i]."<br/>";
                                            					echo  "G".$nomer[$j]." (".$cfSplit[$i] . ")" . "<br/>";
                                            				}
                                            			}
                                            		}
                                            		?>
                                            	</td>
                                            	<td class="text-center">
                                            		<b>
                                            		<?php 
                                            		$perhitungan = array();
                                            		$id = str_replace("'", "", $idInclude);
                                            		$cfInclude = str_replace("'", "", substr($cf, 0, strlen($cf)-1));
                                            		$idSplit = explode(',', $id);
                                            		$cfSplit = explode(',', $cfInclude);
                                            		for($i = 0; $i < count($idSplit); $i++){
                                            			for($j = 0; $j  < count($nomer); $j++){
                                            				if($nomer[$j] == $idSplit[$i]){
                                            					$hasil = $cfPakar[$j]*$cfSplit[$i];
                                            					// echo $nomer[$j]. " == " . $cfPakar[$j] . " == ". $cfSplit[$i]."<br/>";
                                            					array_push($perhitungan, $hasil);
                                            				}
                                            			}
                                            		}
                                            		if(count($perhitungan) == 1){
                                            			echo number_format($perhitungan[0],2)."%";
                                            		}else if(count($perhitungan) == 2){
                                            			$cfCombine = $perhitungan[0]+$perhitungan[1]*(1-$perhitungan[0]);
                                            			echo(number_format($cfCombine,2))."%";
                                            		}else{
                                            			$cfCombine = $perhitungan[0]+($perhitungan[1]*(1-$perhitungan[0]));
                                            			$cfCombine2 = $cfCombine+($perhitungan[2]*(1-$cfCombine));
                                            			echo(number_format($cfCombine2*100, 2))."%";
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
        <!-- jQuery -->
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.min.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/bootstrap.min.js"></script>
        <!-- DATATABLE -->
      	<script src="<?php echo base_url("assets/others"); ?>/DataTables/datatables.min.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.flexslider.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.inview.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/script.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/contactform/contactform.js"></script>
    </body>
</html>

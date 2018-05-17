<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Halaman Lihat Gejala</title>
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
							<div class="alert alert-success">
								<strong>Daftar Nama Gejala Kerusakan Handphone</strong> 
							</div>
						</div>
					</div>
					<!-- /. ROW  --> 
					<div class="row text-center pad-top">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Kode Gejala</th>
										<th class="text-center">Nama Kerusakan</th>
										<th class="text-center">CF Pakar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($gejala as $key => $value): ?>
									<tr>
										<td class="text-center"><?php echo ($key+1) ?></td>
										<td class="text-center"><?php echo $value['kode']?></td>
										<td class="text-left"><?php echo $value['nama']?></td>
										<td class="text-center"><?php echo $value['cf']?></td>
									</tr>
									<?php endforeach ?>
								</tbody>
							</table>
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
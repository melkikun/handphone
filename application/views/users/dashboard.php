<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>MyBiz Bootstrap Theme</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap tdemes, free template, free bootstrap, free website template">

        <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?php echo base_url("assets/users/"); ?>template/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url("assets/users/"); ?>template/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url("assets/users/"); ?>template/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url("assets/users/"); ?>template/css/style.css">
        <!-- =======================================================
            Theme Name: MyBiz
            Theme URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-tdeme/
            Autdor: BootstrapMade.com
            Autdor URL: https://bootstrapmade.com
        ======================================================= -->
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
                            <h2>Proses Input Data</h2> 
                            <p>Pilih minimal 2 gejala berikut ini</p>
                        </div>
                    </div>
                </div>   	
            </div>

            <!--services wrapper-->
            <section>
                <div>
                    <form action="kesimpulan.php" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="vertical-align: middle;">No</th>
                                            <th class="text-center" style="vertical-align: middle;">Kode Gejala</th>
                                            <th class="text-center" style="vertical-align: middle;">Nama Gejala</th>
                                            <th class="text-center" style="vertical-align: middle;">CF User</th>
                                            <th class="text-center" style="vertical-align: middle;">Centang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;">1</td>
                                            <td class="text-center" style="vertical-align: middle;">G01</td>
                                            <td class="text-left" style="vertical-align: middle;">Touch Screen bergerak sendiri</td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <select name="" id="input" class="form-control" required="required">
                                                    <option value="">0.0</option>
                                                    <option value="">0.2</option>
                                                    <option value="">0.4</option>
                                                    <option value="">0.6</option>
                                                    <option value="">0.8</option>
                                                </select>
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <input type="checkbox" class="form-control" name="g1" disabled>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-danger btn-block" style="width: 100%;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <hr/>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.min.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.flexslider.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/js/jquery.inview.js"></script>
        <!-- <script src="https://maps.google.com/maps/api/js?sensor=true"></script> -->
        <script src="<?php echo base_url("assets/users/"); ?>template/js/script.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/contactform/contactform.js"></script>
        <script>
                                    function go() {
                                        window.location.href = "kesimpulan.php";
                                    }

        </script>

    </body>
</html>
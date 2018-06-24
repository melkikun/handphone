<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Halaman Utama Users</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap tdemes, free template, free bootstrap, free website template">

        <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet"> -->
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
                            <h2>Proses Input Data</h2> 
                            <p>Pilih minimal 1 gejala berikut ini</p>
                        </div>
                    </div>
                </div>   	
            </div>

            <!--services wrapper-->
            <section>
                <div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered" id="table-input">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="vertical-align: middle;">No</th>
                                            <th class="text-center" style="vertical-align: middle;">Kode Gejala</th>
                                            <th class="text-center" style="vertical-align: middle;">Nama Gejala</th>
                                            <th class="text-center" style="vertical-align: middle;">CF User</th>
                                            <th class="text-center" style="vertical-align: middle;">Pilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($gejala as $key => $value) {
                                            ?>
                                            <tr>
                                            <td class="text-center" style="vertical-align: middle;"><?php echo($key+1) ?></td>
                                            <td class="text-center" style="vertical-align: middle;"><?php echo($value['kode']) ?></td>
                                            <td class="text-left" style="vertical-align: middle;"><?php echo($value['nama']) ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <select name="cf<?php echo($value['id']) ?>" id="cf<?php echo($value['id']) ?>" class="form-control" required="required" onchange="rubahCf(<?php echo($value['id']) ?>)">
                                                    <option value="0.0">0.0</option>
                                                    <option value="0.2">0.2</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="0.6">0.6</option>
                                                    <option value="0.8">0.8</option>
                                                    <option value="1.0">1.0</option>
                                                </select>
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;" >
                                                <input type="checkbox" class="form-control" name="cb<?php echo($value['id']) ?>" id="cb<?php echo($value['id']) ?>" disabled>
                                            </td>
                                        </tr>
                                            <?php
                                        } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" onclick="submit();" class="btn btn-danger btn-block" style="width: 100%;">Submit</button>
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
        <!-- <script src="https://maps.google.com/maps/api/js?sensor=true"></script> -->
        <script src="<?php echo base_url("assets/users/"); ?>template/js/script.js"></script>
        <script src="<?php echo base_url("assets/users/"); ?>template/contactform/contactform.js"></script>
        <script>
            var table = $('#table-input').dataTable({
        // scrolY: "600px"
        paging:false,
        order:false,
        info:false
    });
                                    //fungsi untuk merubah nilai cf
                                    function rubahCf(param) {
                                        //mengambil dropdown pada nilai cf user
                                        var cf = ($('#cf'+param).val());
                                        //jika cf  bernilai 0 maka check box akan di disable
                                        if(cf == 0.0){
                                             $('#cb'+param).removeAttr('disabled');
                                            $('#cb'+param).prop("checked", false);
                                             $('#cb'+param).attr('disabled',"");
                                        }else{
                                            //sebaliknya jika nilai cf user tidak 0 maka checkbox akan menjadi check otomatis
                                            $('#cb'+param).removeAttr('disabled');
                                            $('#cb'+param).prop("checked", true);
                                             $('#cb'+param).attr('disabled',"");
                                        }
                                    }

                                    //fungsi untuk submit
                                    function submit(){
                                        //inisialiasai cf user
                                        var cfUser = "";
                                        // inisialiasai cf gejala
                                        var idGejala = "";
                                        //inisialiasasi datatable untuk pengambilan nilai cf
                                        var rows = $('#table-input').dataTable().fnGetNodes();
                                        //melakukan looping pada table
                                        for (var x = 0; x < rows.length; x++) {
                                            //melakukan check jika nilai cf user tidak 0
                                            var nilaiCfUser = $(rows[x]).find("td:eq(3)").find("select").val();
                                            if(nilaiCfUser != 0.0){
                                                //menambahkan nilai cf user ke varable
                                                cfUser += "'"+nilaiCfUser+"',";
                                                var id = $(rows[x]).find("td:eq(3)").find("select").attr("id").replace("cf", "");
                                                //menambahkan idgejala ke variable
                                                idGejala += "'"+id+"',";
                                            }
                                        }
                                        //konfirmasi lanjut proses atau tidak
                                        if(cfUser != ""){
                                            var cf = confirm("Apa anda yakin submit?");
                                            if(cf == true){
                                                //menuju halaman kesimpulan
                                           window.location.href="<?php echo base_url("user/submit/cf"); ?>" + "?cf="+cfUser +"&id="+idGejala;
                                            }
                                            
                                        }else{
                                            alert("anda tidak mencentang apapun")
                                        }
                                        // console.log(cfUser);
                                        // console.log(idGejala);
                                    }

        </script>

    </body>
</html>
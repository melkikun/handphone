<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/users/"); ?>login/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/users/"); ?>login/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/users/"); ?>login/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Form Registrasi <span>Sistem Pakar</span></h1>
                <nav class="codrops-demos">
                    <span>Silahkan Registrasi Menggunakan Username dan Password</span>
                </nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <?php
      if($this->session->flashdata('gagal_register')){
        ?>
      <div class="alert alert-danger text-center" style="text-align: center; color: red;">
        <strong><?php echo $this->session->flashdata('gagal_register')?></strong> 
      </div>
      <?php
    }
    ?>
    <?php
      if($this->session->flashdata('duplikat')){
        ?>
      <div class="alert alert-danger text-center text-center" style="text-align: center; color: red;">
        <strong><?php echo $this->session->flashdata('duplikat')?></strong> 
      </div>
      <?php
    }
   
    $attribute = array("method"=>"post", "class"=>"form", "id"=>"form-register"); 
    echo form_open('user/register', $attribute);
    ?>
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Username</label>
                                    <input id="usernamesignup" name="username" required="required" 
                                           type="text" placeholder="Masukkan Username" />
                                            <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password</label>
                                    <input id="passwordsignup" name="password" required="required" 
                                           type="password" placeholder="Masukkan Password"/>
                                           <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" value="Sign up"/> 
                                </p>
                                <p class="change_link">  
                                    Sudah jadi member?
                                    <a href="<?php echo base_url("login") ?>" class="to_register"> Go to Login </a>
                                </p>
                                <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
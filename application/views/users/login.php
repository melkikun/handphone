<!DOCTYPE html>
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login Sistem Pakar</title>
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
                <h1>Form Login  <span>Sistem Pakar</span></h1>
                <nav class="codrops-demos">
                    <span>Masukkan <strong>"UserName & Password"</strong></span>
                </nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <?php
                if ($this->session->flashdata('berhasil_register')) {
                    ?>
                    <div class="alert alert-success text-center" style="text-align: center; color: red;">
                        <strong><?php echo $this->session->flashdata('berhasil_register') ?></strong> 
                    </div>
                    <?php
                }
                if ($this->session->flashdata('gagal_login')) {
                    ?>
                    <div class="alert alert-danger text-center" style="text-align: center; color: red;">
                        <strong><?php echo $this->session->flashdata('gagal_login') ?></strong> 
                    </div>
                    <?php
                }
                ?>
                <?php
                $attribute = array("method" => "post", "id" => "form-login", "class" => "form");
                echo form_open("user/login", $attribute);
                ?>
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Masukkan Username Anda"/>
                                    <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Masukkan password Anda" />
                                     <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                                </p>
                                <p class="change_link">
                                    Belum Punya Account?
                                    <a href="<?php echo base_url("register"); ?>" class="to_register">Register</a>
                                </p>
                            <?php
                form_close();
                ?>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
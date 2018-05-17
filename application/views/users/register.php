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
        <link rel="stylesheet" type="text/css" href="assets/login/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="assets/login/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/login/css/animate-custom.css" />
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
                            <form  action="index.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" 
                                           type="text" placeholder="Masukkan Username" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password</label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" 
                                           type="password" placeholder="Masukkan Password"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirm Password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" 
                                           placeholder="Konfirmasi Password"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" value="Sign up"/> 
                                </p>
                                <p class="change_link">  
                                    Sudah jadi member?
                                    <a href="index.php" class="to_register"> Go to Login </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
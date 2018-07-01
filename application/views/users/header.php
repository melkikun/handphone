<header id="home">
            <div id="main-nav">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-header">
                             <a href="<?php echo(base_url()) ?>" class="navbar-brand">  +
                               <?php  
                                echo ucwords("sistem analisis kerusakan hardware pada asus zenfone menggunakan metode forward chaining") ;
                                ?> 
                            </a>
                        </div>
                        <div class="navbar-collapse collapse" id="ftheme">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a style="color: red;">Selamat Datang <?php echo ($_SESSION['logged_in']['username']) ?></a></li>
                                <li><a>||</a></li>
                                <li><a style="color: blue; cursor: pointer;" onclick="test();">Help</a></li>
                                <li><a>||</a></li>
                                <li><a href="<?php echo base_url("logout"); ?>">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
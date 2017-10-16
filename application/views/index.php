<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Simpang ITS</title>

        <!-- core CSS -->
        <link href="<?php echo base_url().'assets/front/css/bootstrap.min.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front/css/font-awesome.min.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front/css/animate.min.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front/css/prettyPhoto.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front/css/main.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front/css/responsive.css'?>" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="<?php echo base_url().'assets/front/js/html5shiv.js'?>"></script>
            <script src="<?php echo base_url().'assets/front/js/respond.min.js'?>"></script>
        <![endif]-->

        <!-- <link rel="shortcut icon" href="<?php echo base_url().'assets/front/images/ico/Untitled-2.ico'?>"> -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'assets/front/images/ico/apple-touch-icon-144-precomposed.png'?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'assets/front/images/ico/apple-touch-icon-114-precomposed.png'?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'assets/front/images/ico/apple-touch-icon-72-precomposed.png'?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'assets/front/images/ico/apple-touch-icon-57-precomposed.png'?>">
    </head>

    <body class="homepage">
        <header id="header">
            <nav class="hidden-xs navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-right"></div>
                </div><div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>SIMPANG ITS</h1>
                        <h2 style="color: white">Sistem Informasi Peminjaman Gedung ITS</h2> 
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="<?php echo base_url().'index.php/index'?>">Beranda</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.container-->
            </nav>
            <!--/nav-->
        </header>
        <!--/header-->
        
        <!--/#feature-->
        <section id="recent-works">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Daftar Gedung</h2>
                    <p class="lead"></p>
                </div>
                <!-- row -->
                <div class="row">
                    <?php foreach ($data as $x) { ?>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url().'upload/'.$x['image'] ?>" alt="">    
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a href="<?php echo base_url().'index.php/MyController/indexgedung/'.$x['news_id']?>">
                                        <h3><?php echo $x['judul'] ?></h3>
                                        <br><br>
                                        <p><?php echo $x['deskripsi'] ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>   
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
        <!--/#recent-works-->
        <section id="services" class="service-item">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Login</h2>
                    <!-- <p class="lead">Profil Kesehatan:</p> -->
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="<?php echo base_url().'assets/front/images/services/services3.png'?>">
                            </div>
                            <div class="media-body"><br>
                                <a href="<?php echo base_url().'index.php/adminlog' ?>">
                                    <h3 class="media-heading">Login Pengelola Gedung</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="<?php echo base_url().'assets/front/images/services/services3.png'?>">
                            </div>
                            <div class="media-body"><br>
                                <a href="<?php echo base_url().'index.php/adminlog' ?>">
                                    <h3 class="media-heading">Login Admin</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
        <!--/#services-->
        <!--/#middle-->
        <!--/#content-->
        <!--/#partner-->
        <!--/#conatcat-info-->
        <!--/#bottom-->
        <footer id="footer" class="midnight-blue"></footer>
        <!--/#footer-->
        <script src="<?php echo base_url().'assets/front/js/jquery.js'?>"></script>
        <script src="<?php echo base_url().'assets/front/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/front/js/jquery.prettyPhoto.js'?>"></script>
        <script src="<?php echo base_url().'assets/front/js/jquery.isotope.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/front/js/main.js'?>"></script>
        <script src="<?php echo base_url().'assets/front/js/wow.min.js'?>"></script>
    </body>
</html>
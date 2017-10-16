<html><head>
        <?php echo $map['js']; ?> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>DinKes Purworejo</title>
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
        <link rel="shortcut icon" href="<?php echo base_url().'assets/front/images/ico/Untitled-2.ico'?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'assets/front/images/ico/apple-touch-icon-144-precomposed.png'?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'assets/front/images/ico/apple-touch-icon-114-precomposed.png'?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'assets/front/images/ico/apple-touch-icon-72-precomposed.png'?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'assets/front/images/ico/apple-touch-icon-57-precomposed.png'?>">
    </head><body class="homepage">
        <header id="header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-4">
                            <div class="top-number">
                                <p>
                                    <i class="fa fa-phone-square"></i>&nbsp; 0275-321034</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-8">
                            <div class="social">
                                <!-- <div class="search">
                                    <form role="form">
                                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                        <i class="fa fa-search"></i>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.container-->
            </div>
            <!--/.top-bar-->
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
                        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url().'assets/front/images\logodinkesputih.png" alt="logo'?>"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url().'index.php/index'?>">Baranda</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil<br></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url().'index.php/sambutan'?>">Sambutan</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url().'index.php/visimisi'?>">Visi Misi</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'index.php/perbup'?>">Peraturan Bupati</a>
                            </li>
                            <!-- <li>
                                <a href="portfolio.html">Layanan Publik</a>
                            </li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pemetaan<br></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://spgdt.purworejokab.go.id/">Rumah sakit</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo base_url().'index.php/petapuskesmas'?>">Puskesmas</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'index.php/kontak'?>">Kontak Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.container-->
            </nav>
            <!--/nav-->
        </header>
        <!--/header-->
        <section class="container" id="blog">
            <!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->  
        <?php echo $map['html']; ?> 
        

        <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDg-qlTXQ0WZSBXU6xMh1CTotFQ9miE4b0&callback=myMap"></script>

</body>
</html>
        </section>
        <!--/#blog-->
        
        <!--/#bottom-->
        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
    

</body></html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>E-15 | Pamela Lim</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:700,400italic' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- begin:navbar -->
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/favicon.ico" /><span>E-15 | </span>Pamela Lim</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.all-gifted.com" target="_blank">All-Gifted</a></li>
                        <li><a href="/aboutpamela">Pamela Lim</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="page.html">Page</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="single.html">Single</a></li>
                        <li><a href="archive.html">Archives</a></li>
                        <li><a href="category.html">Category</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-single.html">Portfolio Single</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- end:navbar -->

<!-- begin:header -->
<section id="header" class="heading" style="background: url(img/img03.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="title-desc">
                    @yield('header')
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- end:header -->

<!-- begin:content -->
<section id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-8 col-sm-8">
                <div class="featured-container">
                    @yield('feature')
                </div>
                <br>
                 @yield('content')
            </div>
            <!-- end:article -->

            <!-- begin:sidebar -->
            <div class="col-md-4 col-sm-4 sidebar">
                <div class="widget-sidebar">
                    <h3>Search</h3>
                    <form id="search" class="navbar-form search" role="search">
                        <input type="search" class="form-control input-lg" placeholder="Type your keyword">
                        <button type="submit" class="btn btn-info btn-search"><i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>

                <div class="widget-sidebar widget_categories">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#">Design</a> (20)</li>
                        <li><a href="#">Acessories</a> (32)</li>
                        <li><a href="#">Love life</a> (12)</li>
                        <li><a href="#">My Work</a> (21)</li>
                        <li><a href="#">My Trip</a> (8)</li>
                    </ul>
                </div>

                <div class="widget-sidebar widget_archive">
                    <h3>Archives</h3>
                    <ul>
                        <li><a href="#">May 2014</a> (20)</li>
                        <li><a href="#">April 2014</a> (32)</li>
                        <li><a href="#">March 2014</a> (12)</li>
                        <li><a href="#">February 2014</a> (21)</li>
                        <li><a href="#">January 2014</a> (8)</li>
                    </ul>
                </div>

            </div>
            <!-- end:sidebar -->

        </div>
    </div>
</section>
<!-- end:content -->

<!-- begin:partner -->
<section id="partner">
    @yield('partner')
</section>
<!-- end:partner -->

<!-- begin:footer -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <h3>Recent Post</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Lorem sit</a></li>
                        <li><a href="#">Lorem dolor sit</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <h3>Useful Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Lorem sit</a></li>
                        <li><a href="#">Lorem dolor sit</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="footer-logo">
                    <h2>All-Gifted</h2>
                    <p>1024 Main Street, Jejeran Plrt Btl<br>+62 (123) 456-7890</p>
                    <br>
                    <p class="muted">© 2014 All-Gifted LLC</p>
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end:footer -->

<!-- begin:copyright -->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 copy-left">
                <p>Copyright &copy; 2014 <strong>all-gifted</strong>. All Right Reserved.</p>
            </div>

            <div class="col-md-6 col-sm-6 copy-right">
                <ul class="list-inline social-icon">
                    <li><a href="#" class="icon-twitter" rel="tooltip" title="" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon-facebook" rel="tooltip" title="" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#" class="icon-youtube" rel="tooltip" title="" data-placement="top" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" class="icon-instagram" rel="tooltip" title="" data-placement="top" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end:copyrigt -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servis i održavanje kompjutera. Kompletne konfiguracije i povoljni delovi računara. Izrada web prezentacija i web aplikacija. Sigurnost računarskih sastava.">
    <meta name="author" content="hightech">

    <title>Servis Kompjutera - AntiStereotip</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#vrh"  onclick = $("#menu-close").click(); >Servis</a>
            </li>
            <li>
                <a href="#vrh" onclick = $("#menu-close").click(); >Početna</a>
            </li>
            <li>
                <a href="#o-nama" onclick = $("#menu-close").click(); >O nama</a>
            </li>
            <li>
                <a href="#usluge" onclick = $("#menu-close").click(); >Usluge</a>
            </li>
            <li>
                <a href="#nasi-klijenti" onclick = $("#menu-close").click(); >Naši klijenti</a>
            </li>
            <li>
                <a href="#kontakt" onclick = $("#menu-close").click(); >Kontakt</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="vrh" class="header">
        <div class="text-vertical-center">
            <h1>AntiStereotip</h1>
            <h3>Servis i održavanje računara &amp; Web dizajn i programiranje!</h3>
            <br>
            <a href="#o-nama" class="btn btn-dark btn-lg">Saznaj više</a>
        </div>
    </header>

    <!-- About -->
    <section id="o-nama" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Antistereotip je servis i tehnička podrška za vaše kompjutere i računarske sastave!</h2>
                    <p class="lead">Ova platforma će Vam omogućiti podršku u realnom vremenu uključujući <a target="_blank" href="#">ceo tim stručnjaka</a>. Naše usluge nisu jeftine i ne podržavamo trgovinu jeftinih i nekvalitetnih delova. Brendirane komponente i kompletne konfiguracije nabavljamo isključivo od: IBM, HP, DELL, FUJITSU SIMENS...</p>
		    <p></p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="usluge" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Naše Usluge</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Hosting</strong>
                                </h4>
                                <p>Virtuelizacija, deljeni hosting i tehnologija u oblaku.</p>
                                <a href="#" class="btn btn-light">Detaljnije</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Pravac</strong>
                                </h4>
                                <p>Bez kompromisa. U susret Vam izlazimo isključivo kvalitetom.</p>
                                <a href="#" class="btn btn-light">Detaljnije</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Servis</strong>
                                </h4>
                                <p>Profesionalnost i preporuka je naš jedini adut i kvalitet.</p>
                                <a href="#" class="btn btn-light">Detaljnije</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Sigurnost</strong>
                                </h4>
                                <p>Pružamo profesionalnu uslugu sigurnosti komjutera i web stranica.</p>
                                <a href="#" class="btn btn-light">Detaljnije</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Cyber Tech</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="nasi-klijenti" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Naši klijenti i rad</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">Pogledaj još</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Odlasti razvoja i administracije.</h3>
                    <a href="#" class="btn btn-lg btn-light">Servis računara!</a>
                    <a href="#" class="btn btn-lg btn-dark">Programiranje!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="kontakt" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2srs!4v1433877286558!6m8!1m7!1sTPd7UL_vgOx-0CsEc466qg!2m2!1d44.814871!2d20.543896!3f192.0027349489191!4f-5.021053056999705!5f0.7820865974627469"></iframe>
        <br />
        <small>
            <a href="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2srs!4v1433877286558!6m8!1m7!1sTPd7UL_vgOx-0CsEc466qg!2m2!1d44.814871!2d20.543896!3f192.0027349489191!4f-5.021053056999705!5f0.7820865974627469"></a>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Kontaktirajte nas</strong>
                    </h4>
                    <p>Dragana Lukića 50<br> Beograd, 11060</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (064) 415-7622</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">antistereotip@gmx.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/pages/Security-Algorithms/1575759799372681?ref=profile"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/antistereotip"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; AntiStereotip 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>

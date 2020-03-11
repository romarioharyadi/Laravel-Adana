<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>NIKAYU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/isotope.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('skin/default.css') }}" rel="stylesheet">
    </head>
    <body>
        <section id="header" class="appear"></section>
            <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="fa fa-bars color-white"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">NIKAYU</a></h1>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                            <li><a href="{{ route('Beranda') }}">Beranda</a></li>
                            <li><a href="#tentang">Tentang</a></li>
                            <li><a href="#dagangan">Dagangan</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        <section class="featured">
            <div class="container">
                <div class="row mar-bot40">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="align-center">
                            <i class="fa fa-flask fa-5x mar-bot20"></i>
                            <h2 class="slogan">Selamat Datang di NIKAYU</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
        </section>

        <!-- Tentang -->
        <section id="tentang" class="section appear clearfix">
            <div class="container">
                <div class="row mar-bot40">
                    <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                    </div>
                    </div>
                </div>

                <div class="row align-center mar-bot40">
                    <div class="col-md-3">
                        <div class="team-member">
                            <figure class="member-photo"><img src="{{ asset('img/team/member1.jpg') }}" alt="" /></figure>
                            <div class="team-detail">
                                <h4>Jason Doe</h4>
                                <span>User experiences</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tentang -->
        
        <section id="parallax1" class="section">
        </section>

        <!-- Section List Items Jas -->
        <section id="dagangan" class="section appear clearfix">
            <div class="container">
                <div class="row mar-bot40">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="section-header">
                            <h2 class="section-heading animated" data-animation="bounceInUp">Dagangan</h2>
                            <p>Daftar data barang dagangan yang akan dijual di Toko Nikayu Bogor.</p>
                        </div>
                    </div>
                </div>
                <!-- col-md-12 Items -->
                <div class="col-md-12">
                    <!-- row Items -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <center><img src=" {{ asset('img/portfolio/img1.jpg') }} " alt="" width="100%" style="margin-bottom: 10px"/></center>
                                        <h5>Jas Mantul.</h5>
                                        <h5>Rp. 150.000.00,-</h5>
                                        <h5>Ada</h5>
                                    </div> 
                                    <div class="row">
                                        <a href="#" class="btn btn-info col-md-12">Beli</a>
                                    </div>
                                </div>      
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <center><img src=" {{ asset('img/portfolio/img2.jpg') }} " alt="" width="100%" style="margin-bottom: 10px"/></center>
                                        <h5>Jas Mantul.</h5>
                                        <h5>Rp. 150.000.00,-</h5>
                                        <h5>Ada</h5>
                                    </div> 
                                    <div class="row">
                                        <a href="#" class="btn btn-info col-md-12">Beli</a>
                                    </div>
                                </div>      
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <center><img src=" {{ asset('img/portfolio/img3.jpg') }} " alt="" width="100%" style="margin-bottom: 10px"/></center>
                                        <h5>Jas Mantul.</h5>
                                        <h5>Rp. 150.000.00,-</h5>
                                        <h5>Ada</h5>
                                    </div>  
                                    <div class="row">
                                        <a href="#" class="btn btn-info col-md-12">Beli</a>
                                    </div>
                                </div>      
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <center><img src=" {{ asset('img/portfolio/img4.jpg') }} " alt="" width="100%" style="margin-bottom: 10px"/></center>
                                        <h5>Jas Mantul.</h5>
                                        <h5>Rp. 150.000.00,-</h5>
                                        <h5>Ada</h5>
                                    </div> 
                                    <div class="row">
                                        <a href="https://api.whatsapp.com/send?phone=6289605588604&text=Hai,%20Saya%20ingin%20memesan%20Jas%20Mantul" class="btn btn-info col-md-12">Beli</a>
                                    </div>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <!-- End row Items -->
                </div>
                <!-- End col-md-12 Items -->
            </div>
        </section>
        <!-- End Section -->

        <section id="footer" class="section footer">
            <div class="container">
                <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
                    <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                    </div>
                </div>

                <div class="row align-center copyright">
                    <div class="col-sm-12">
                        <p>Copyright &copy; NIKAYU</p>
                    </div>
                </div>
            </div>
        </section>
        <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>


    <script src="{{ asset('js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/skrollr.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('js/jquery.localScroll.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('contactform/contactform.js') }}"></script>
    <script src="https://kit.fontawesome.com/20e16e5617.js"></script>
    </body>

</html>
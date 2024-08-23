<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Faculty Of Management & Finance</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    @include('home.css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>No: 388/1B, Kaduwela Road, Malabe, Sri Lanka</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+94 112 667 678</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@csbm.edu.lk</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/csbmsrilanka"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/csbm.edu.lk"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://lk.linkedin.com/company/csbmcampus"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/csbm.edu.lk/"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UC0BoEnF8uL15yBkATT5Qe2Q"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('home.navbar')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Programs Of Faculty Of Management & Finance</h1>
                    <a href="{{url('/')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('courses')}}" class="h5 text-white">Faculties</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Programs</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">

                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/fbusiness.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">QUALIFI LEVEL 3 DIPLOMA IN BUSINESS MANAGEMENT</h4>
                                    <a class="text-uppercase" href="{{url('fbusiness')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/HDbusiness.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">HIGHER NATIONAL DIPLOMA IN BUSINESS (MANAGEMENT) PEARSON | BTEC</h4>
                                    <a class="text-uppercase" href="{{url('HDbusiness')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/practical.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">DIPLOMA IN PRACTICAL BUSINESS MANAGEMENT</h4>
                                    <a class="text-uppercase" href="{{url('practical')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/minimba.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">MINI MBA - EXECUTIVE DEVELOPMENT PROGRAM</h4>
                                    <a class="text-uppercase" href="{{url('minimba')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
               	        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/qualifi_7.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">QUALIFI LEVEL 7 Diploma in Logistics and Supply Chain Crisis Management</h4>
                                    <a class="text-uppercase" href="{{url('qualifi_7')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/trade.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">ADVANCED CERTIFICATE IN INTERNATIONAL TRADE MANAGEMENT</h4>
                                    <a class="text-uppercase" href="{{url('trade_main')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/solid.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">ADVANCED CERITIFICATE IN SOLID WASTE MANAGEMENT</h4>
                                    <a class="text-uppercase" href="{{url('solid')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/sales.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">EXECUTIVE CERTIFICATE IN SALES & MARKETING</h4>
                                    <a class="text-uppercase" href="{{url('csales')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/Dsales.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">EXECUTIVE DIPLOMA IN SALES & MARKETING</h4>
                                    <a class="text-uppercase" href="{{url('sales')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/finance.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">EXECUTIVE CERITIFICATE IN FINANCE FOR NON-FINANCE PROFESSIONALS</h4>
                                    <a class="text-uppercase" href="{{url('finance')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/taxation.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">TAXATION FOR PROFESSIONALS & PERSONAL DEVELOPMENT</h4>
                                    <a class="text-uppercase" href="{{url('taxation')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/pd.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">CONTINUOUS PROFESSIONAL DEVELOPMENT PROGRAM</h4>
                                    <a class="text-uppercase" href="{{url('PD')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/CORE Program.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">CORE PROGRAM BY INFER CONSULTING (NEW ZEALAND)</h4>
                                    <a class="text-uppercase" href="{{url('core')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="home/img/management/effective.png" alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">EFFECTIVE FINANCE FOR NON-FINANCE PROFESSIONALS IN TEA FACTORIES IN SRI LANKA: A HANDS-ON WORKSHOP FOR TEA FACTORY PROFESSIONALS</h4>
                                    <a class="text-uppercase" href="{{url('effective')}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Faculties</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('ICT')}}"><i class="bi bi-arrow-right me-2"></i>Faculty Of Information & Communication Technology</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('social')}}"><i class="bi bi-arrow-right me-2"></i>Faculty Of Social Sciences</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('languages')}}"><i class="bi bi-arrow-right me-2"></i>Faculty Of Languages</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Business Consultancy And Value Added Services</a>
                        </div>
                    </div>
                    <!-- Category End -->
    
                    
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
    

    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>
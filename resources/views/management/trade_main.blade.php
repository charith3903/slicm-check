<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>International Trade Management</title>
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
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>No. 65/5, Ward Place, Colombo 07, Sri Lanka</small>
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
    <div class="container-fluid position-relative p-0">
    @include('home.navbar')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">International Trade Management</h1>
                    <a href="{{url('/')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('courses')}}" class="h5 text-white">Faculties</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('management')}}" class="h5 text-white">Programs</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">International Trade Management</a>
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

    <!-- Courses Start -->
    <!-- Courses Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Courses Of</h5>
                <h1 class="mb-0">International Trade Management</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="home/img/management/trade.png" alt="">
                        </div>
                        <div class="p-4">
                            <a class="text-uppercase" href="{{url('trade')}}">More Details<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="home/img/management/d_trade.png" alt="">
                        </div>
                        <div class="p-4">
                            <a class="text-uppercase" href="{{url('d_trade')}}">More Details<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="home/img/management/qualifi_7.png" alt="">
                        </div>
                        <div class="p-4">
                            <a class="text-uppercase" href="{{url('qualifi_7')}}">More Details<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Courses end -->
    <!-- Courses end -->


    
    

    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>
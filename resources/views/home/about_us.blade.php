<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
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
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>223 Castle St, Colombo, Sri Lanka</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+94 112 684 409</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i> customercare@slicm.lk</small>
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
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <a href="{{url('/')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">About</a>
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


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Who We Are</h1>
                    </div>
                    <p class="m-0">Founded in 2000, the Sri Lanka Institute of Credit Management (SLICM) began as a groundbreaking educational initiative aimed at addressing the needs of the leasing and finance sectors in Sri Lanka. Established under Parliamentary Act No. 07 of 2000, SLICM was created to fill a crucial gap in the market.</p>
                    <p class="mt-4">Since its inception, SLICM has trained over 3,000 students from more than 100 financial institutions across the country. Our graduates are highly sought after, having been employed in banks, finance companies, leasing firms, and various trading enterprises.</p>
                    <p class="mt-4">Graduates holding an Advanced Professional Diploma, who complete research methodology and a research report along with gaining two years of relevant practical experience in Credit Management, are eligible to apply for Associate Membership at the Sri Lanka Institute of Credit Management.</p>
                    <p class="mt-4">Associate Members are entitled to use the designation AICM-SL. In recognition of SLICM’s high educational standards, the Chartered Institute of Credit Management (CICM) in the UK has extended Associate Membership to our Diploma holders with relevant experience in Credit Management who apply for CICM membership.</p>
                    <div class="row g-5">

                    </div>
                    <br><br>

                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+94 111 232 234</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="home/img/SLICM_about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="text-primary mb-0">Our Vision</h4>
                        <p class="m-0">To transform the landscape of financial education in Sri Lanka, fostering a new generation of leaders who will excel in the global financial sector and represent Sri Lanka with integrity and innovation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="text-primary mb-0">Our Mission</h4>
                        <p class="m-0">To deliver exceptional educational programs that address the current and future needs of the finance and leasing industries. Our goal is to bridge the gap between academic learning and practical application, ensuring our graduates are equipped to drive progress and innovation in their fields.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="text-primary mb-0">Our Guiding Principle</h4>
                        <p class="m-0">“Ipsa Scientia Potestas Est” <br>— Sir Francis Bacon, 1597 <br> Translation: “Knowledge itself is power”<br>We believe that the pursuit of knowledge empowers individuals and drives positive change in the industry and society.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Directors Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">SLICM</h5>
                <h1 class="mb-0">DIRECTORS OF SLICM</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; margin: 0 auto;">
                            <img class="img-fluid" src="home/img/ceo.png" alt="Director Image" style="width: 100%; height: auto;">
                        </div>
                        <h5 class="mt-3">John Doe</h5>
                        <small class="text-muted">CEO</small>
                        <p class="mt-1">johndoe@example.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; margin: 0 auto;">
                            <img class="img-fluid" src="home/img/ceo.png" alt="Director Image" style="width: 100%; height: auto;">
                        </div>
                        <h5 class="mt-3">Jane Smith</h5>
                        <small class="text-muted">CFO</small>
                        <p class="mt-1">janesmith@example.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; margin: 0 auto;">
                            <img class="img-fluid" src="home/img/ceo.png" alt="Director Image" style="width: 100%; height: auto;">
                        </div>
                        <h5 class="mt-3">Robert Brown</h5>
                        <small class="text-muted">COO</small>
                        <p class="mt-1">robertbrown@example.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">SLICM</h5>
                <h1 class="mb-0">DIRECTORS OF SLICM</h1>
            </div>
            <div class="row g-5">
            @foreach($directors as $directors)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="uploads/{{$directors->image}}" alt="">
                            </div>
                            <h5 class="mb-0">{{$directors->name}}</h5>
                            <small>{{$directors->description}}
                            </small>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Directors End -->

    <!-- Coporate management start
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">CSBM</h5>
                <h1 class="mb-0">CORPORATE MANAGEMENT</h1>
            </div>
            <div class="row g-5">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/Pradeep Alexander.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Pradeep Alexander</h5>
                            <small>Director/CEO
                                MBA (Finance)UsJ, MA in Fin. Economics UoC, MSc. in Project Mgt. AuU Malaysia, B.Com. Sp. Acc. Hons. UsJ, ICMA, CILT, CA-Inter, ACCA-Final
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="home/img/coporate/coporate (7).jpg" alt="">
                            </div>
                            <h5 class="mb-0">K. Gamage</h5>
                            <small>Registrar
                                M.A (USJP), PGD (USJP), BA in Writership & Communications (UOC)
                            </small>
                        </div>
                    </div>
            </div>
            <br><br>
        </div>
    </div>
     Coporate management End -->

     <!-- Affiliations Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our</h5>
            <h1 class="mb-0">Affiliations</h1>
        </div>
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @foreach($g_affiliations as $g_affiliations)
                    <img src="uploads/{{$g_affiliations->image}}" alt="">
                    @endforeach
                    @foreach($l_affiliations as $l_affiliations)
                    <img src="uploads/{{$l_affiliations->image}}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Affiliations End -->

    <!-- clients Start -->
  {{--   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our</h5>
            <h1 class="mb-0">Clients</h1>
        </div>
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
            @foreach($clients as $clients)
                <img src="uploads/{{$clients->image}}" alt="">
            @endforeach
                </div>
            </div>
        </div>
    </div> --}}
    <!-- clients End -->

    <!-- locations Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Locations Of</h5>
                <h1 class="mb-0">SLICM</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden" style="height: 600px;">
                            <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013972.1518059605!2d78.66755697812503!3d6.911073499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259001b889381%3A0xc0744b40c4d74f2e!2sSri%20Lanka%20Institute%20of%20Credit%20Management%20(SLICM)!5e0!3m2!1sen!2slk!4v1723819310796!5m2!1sen!2slk"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">Sri Lanka Institute of Credit Management</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Sri Lanka Institute of Credit Management</h4>
                            <p>No. 123, Colombo 07, Sri Lanka</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Locations Of</h5>
                <h1 class="mb-0">SLICM</h1>
            </div>
            <div class="row g-5">
            @foreach($locations as $locations)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                        <iframe class="position-relative rounded w-100 h-100"
                        src="{{$locations->src}}"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">{{$locations->location}}</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">{{$locations->location}}</h4>
                            <p>{{$locations->address}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- locations end -->


    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>

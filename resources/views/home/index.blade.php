<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sri Lanka Institute of Credit Management</title>
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
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/csbmcampus?igsh=MWtnY3E3Njg1bXVhMg=="><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UC0BoEnF8uL15yBkATT5Qe2Q"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    @include('home.navbar')

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="home/img/SLICM_bg1.jpg" alt="Image">

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="display-1 text-white text-uppercase mb-md-4 animated zoomIn">Join SLICM</h4>
                        <h1 class="text-white mb-3 animated slideInDown">To embark on a journey of professional growth and personal transformation.</h1>

                        <a href="{{url('courses')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Courses</a>
                        <a href="{{url('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="w-100" src="home/img/SLICM_bg2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="display-1 text-white text-uppercase mb-md-4 animated zoomIn">Join SLICM</h4>
                        <h1 class="text-white mb-3 animated slideInDown">To embark on a journey of professional growth and personal transformation.</h1>

                        <a href="{{url('courses')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Courses</a>
                        <a href="{{url('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Navbar & Carousel End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade bg-dark" id="searchModal" tabindex="-1">
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


    <!-- Facts Start -->
    <div class="container-fluid py-5 bg-dark">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-graduation-cap text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Courses</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.4s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Students</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">400</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.5s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Locations</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">3</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- upcoming Start -->
   {{--  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Upcoming</h5>
                <h1 class="mb-0">Programs</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($upcoming_programs as $upcoming_programs)
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-2 pb-1 px-2">
                        <img class="img-fluid" src="uploads/{{$upcoming_programs->image}}">
                    </div>
                    <div class="pt-4 pb-5 px-5">
                     {{$upcoming_programs->description}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="container-fluid py-5  wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Upcoming</h5>
                <h1 class="mb-0">Programs</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-2 pb-1 px-2">
                        <img class="img-fluid" src="https://via.placeholder.com/400x300.png?text=Program+1" alt="Program Image">
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        <h4>Advanced Financial Management</h4>
                        <p>Join us for an intensive course on advanced financial strategies and management practices. Starting on September 1, 2024.</p>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-2 pb-1 px-2">
                        <img class="img-fluid" src="https://via.placeholder.com/400x300.png?text=Program+2" alt="Program Image">
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        <h4>Strategic Leadership</h4>
                        <p>Enhance your leadership skills with our strategic leadership program. Commencing on October 15, 2024.</p>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-2 pb-1 px-2">
                        <img class="img-fluid" src="https://via.placeholder.com/400x300.png?text=Program+3" alt="Program Image">
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        <h4>Project Management Excellence</h4>
                        <p>Master the skills of effective project management with our comprehensive course starting on November 20, 2024.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- upcoming End -->

    <!-- Features Start -->
    <div class="container py-5 why-choose-us wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">SLICM Campus</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white" style="font-size: 24px;"></i>
                        </div>
                        <h4>Academic Excellence</h4>
                        <p class="mb-0">We promote academic success through innovative programs, highly experienced faculty members, cutting-edge technology, and a thriving learning environment.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white" style="font-size: 24px;"></i>
                        </div>
                        <h4>Career Outlook</h4>
                        <p class="mb-0">We prepare students for a promising career outlook with industry-aligned programs, hands-on experiences, mentorship, and a strong network, empowering graduates to excel in today's competitive job market.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.1s" src="home/img/feature.jpg" style="object-fit: cover; border-radius: 15px;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white" style="font-size: 24px;"></i>
                        </div>
                        <h4>Strongly Affiliated</h4>
                        <p class="mb-0">We are proudly affiliated with industry leaders and educational partners, ensuring a transformative and impactful educational experience.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-globe text-white" style="font-size: 24px;"></i>
                        </div>
                        <h4>Global Perspectives</h4>
                        <p class="mb-0">We promote education through diverse communities, international partnerships, and experiential learning, preparing students for an interconnected world and fostering cultural awareness and adaptability.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Courses Start -->
   {{--  @include('home.course') --}}
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Cources Of</h5>
            <h1 class="mb-0">SLICM</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="home/img/cources/1.jpg" alt="Management & Finance">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="{{url('management')}}">Management & Finance</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Advanced Financial Strategies</h4>
                        <p class="mb-4">Explore advanced financial strategies with our comprehensive program designed to enhance your management and finance skills. Learn about financial analysis, risk management, and strategic planning.</p>
                        <a class="text-uppercase" href="{{url('management')}}">Programs<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="home/img/cources/2.jpg" alt="Information & Technology">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="{{url('ICT')}}">Information & Technology</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Cybersecurity Fundamentals</h4>
                        <p class="mb-4">Gain a solid foundation in cybersecurity with our course focusing on threat analysis, risk management, and network security. Perfect for those looking to start a career in IT security.</p>
                        <a class="text-uppercase" href="{{url('ICT')}}">Programs<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="home/img/cources/3.jpg" alt="Languages">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="{{url('languages')}}">Languages</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Business Communication Skills</h4>
                        <p class="mb-4">Enhance your communication skills with our language course tailored for business professionals. Focus on effective communication, negotiation techniques, and cross-cultural interactions.</p>
                        <a class="text-uppercase" href="{{url('languages')}}">Programs<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="home/img/cources/4.jpg" alt="Social Sciences">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="{{url('social')}}">Social Sciences</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Introduction to Social Research</h4>
                        <p class="mb-4">Dive into the world of social research with our introductory course. Learn about research methodologies, data analysis, and the application of social research in real-world scenarios.</p>
                        <a class="text-uppercase" href="{{url('social')}}">Programs<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="home/img/cources/5.jpg" alt="Business Consultancy">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">Business Consultancy</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Strategic Business Planning</h4>
                        <p class="mb-4">Develop strategic business plans with our consultancy course. Learn about market analysis, strategic growth, and operational efficiency to drive business success.</p>
                        <a class="text-uppercase" href="#">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Courses end -->




    <!-- Testimonial Start -->
   {{--  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonials</h5>
                <h1 class="mb-0">What Our Clients Say About Our Corporate Training Programs</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            @foreach($testimonials as $testimonials)
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="uploads/{{$testimonials->image}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">{{$testimonials->name}}</h4>
                            <small class="text-uppercase">{{$testimonials->position}}</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "{{$testimonials->testimonial}}"
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="container-fluid py-5 testimonial-background " data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonials</h5>
                <h1 class="mb-0">What Our Clients Say About Our Programs</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <!-- Testimonial 1 -->
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="home/img/testimonials/dulith.jpeg" style="width: 60px; height: 60px;" alt="John Doe">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">John Doe</h4>
                            <small class="text-uppercase">CEO, Tech Innovations</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "The corporate training program provided by this institute was outstanding. The trainers were highly knowledgeable, and the practical insights we gained were invaluable. Our team has become more efficient and motivated."
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="home/img/testimonials/dulith.jpeg" style="width: 60px; height: 60px;" alt="Jane Smith">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Jane Smith</h4>
                            <small class="text-uppercase">HR Director, Global Solutions</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Our experience with the corporate training programs has been nothing short of excellent. The sessions were engaging and tailored to our needs, and we have seen a significant improvement in team performance and collaboration."
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="home/img/testimonials/dulith.jpeg" style="width: 60px; height: 60px;" alt="Michael Brown">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Michael Brown</h4>
                            <small class="text-uppercase">Operations Manager, FinServe</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "The training programs offered were extremely beneficial for our company. The content was relevant, and the delivery was top-notch. We appreciated the hands-on approach and the focus on practical skills."
                    </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="home/img/testimonials/dulith.jpeg" style="width: 60px; height: 60px;" alt="Emily Davis">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Emily Davis</h4>
                            <small class="text-uppercase">Project Lead, Bright Future Ltd.</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "The corporate training program exceeded our expectations. The instructors were experts in their fields, and the materials provided were practical and directly applicable to our daily operations. Highly recommended!"
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->





    <!-- locations Start -->
   {{--  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Locations Of</h5>
                <h1 class="mb-0">CSBM Campus</h1>
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
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">Colombo-Ward Place</a>
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

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Locations Of</h5>
                <h1 class="mb-0">SLICM Campus</h1>
            </div>
            <div class="row g-5">
                <!-- Location 1 -->
                <div class=" wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8287180499165!2d79.88446447475692!3d6.911073493088424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259001b889381%3A0xc0744b40c4d74f2e!2sSri%20Lanka%20Institute%20of%20Credit%20Management%20(SLICM)!5e0!3m2!1sen!2slk!4v1723836428514!5m2!1sen!2slk" width="1300" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">Sri Lanka Institute of Credit Management</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Sri Lanka Institute of Credit Management</h4>
                            <p>123 Ward Place, Colombo 07, Sri Lanka</p>
                        </div>
                    </div>
                </div>
                {{-- <!-- Location 2 -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.43078856883!2d80.5478392165659!3d7.294538623244381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1723836135873!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">Kandy-Central Campus</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Kandy-Central Campus</h4>
                            <p>456 Central Avenue, Kandy, Sri Lanka</p>
                        </div>
                    </div>
                </div>
                <!-- Location 3 -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.43078856883!2d80.5478392165659!3d7.294538623244381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1723836135873!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">Galle-Southern Campus</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Galle-Southern Campus</h4>
                            <p>789 Beach Road, Galle, Sri Lanka</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- locations end -->

    <!-- locations end -->


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
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our</h5>
            <h1 class="mb-0">Affiliations</h1>
        </div>
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <!-- Fake Affiliations -->
                    <img src="https://via.placeholder.com/150x50?text=University+1" alt="University 1">
                    <img src="https://via.placeholder.com/150x50?text=University+2" alt="University 2">
                    <img src="https://via.placeholder.com/150x50?text=Institute+1" alt="Institute 1">
                    <img src="https://via.placeholder.com/150x50?text=Institute+2" alt="Institute 2">
                    <img src="https://via.placeholder.com/150x50?text=Organization+1" alt="Organization 1">
                    <img src="https://via.placeholder.com/150x50?text=Organization+2" alt="Organization 2">
                </div>
            </div>
        </div>
    </div> --}}


    <!-- Affiliations End -->


    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>

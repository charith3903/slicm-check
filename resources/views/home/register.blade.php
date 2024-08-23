<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Apply Now</title>
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
                    <h1 class="display-4 text-white animated zoomIn">Admissions</h1>
                    <a href="{{url('/')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Admissions</a>
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


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-7">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form action="{{url('add_admission')}}" method="POST" enctype="multipart/form-data">
                        @csrf    
                        <div class="row g-3">
                                <div class="col-12">
                                    <select name="Course" required="" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Course</option>
                                        <option value="QUALIFI Level 3 Diploma in Business Management (Foundation)">QUALIFI Level 3 Diploma in Business Management (Foundation)</option>
                                        <option value="Higher National Diploma in Business (Management) Pearson | BTEC">Higher National Diploma in Business (Management) Pearson | BTEC</option>
                                        <option value="Executive Diploma in Sales & Marketing">Executive Diploma in Sales & Marketing</option>
                                        <option value="CORE Program (Infer Consulting | New Zealand)">CORE Program (Infer Consulting | New Zealand)</option>
                                        <option value="Continuous Professional Development Program">Continuous Professional Development Program</option>
                                        <option value="Executive Certificate in Sales & Marketing">Executive Certificate in Sales & Marketing</option>
                                        <option value="Taxation for Professionals & Personal Development">Taxation for Professionals & Personal Development</option>
                                        <option value="Executive Development Program (Mini MBA)">Executive Development Program (Mini MBA)</option>
                                        <option value="Executive Certificate in Finance for Non-Finance Professionals">Executive Certificate in Finance for Non-Finance Professionals</option>
                                        <option value="Advanced Certificate in Solid Waste Management">Advanced Certificate in Solid Waste Management</option>
                                        <option value="Advanced Certificate in International Trade Management">Advanced Certificate in International Trade Management</option>
                                        <option value="Diploma in Practical Business Management">Diploma in Practical Business Management</option>
                                        <option value="Executive Certificate in Finance for Finance and Non-Finance Professionals in Tea Factories in Sri Lanka: A Hands-On Workshop for Tea Factory Professionals">Executive Certificate in Finance for Finance and Non-Finance Professionals in Tea Factories in Sri Lanka: A Hands-On Workshop for Tea Factory Professionals</option>
                                        <option value="Diploma In Graphic Design">Diploma In Graphic Design</option>
                                        <option value="Executive Certificate In Digital Marketing">Executive Certificate In Digital Marketing</option>
                                        <option value="Diploma In English & IT">Diploma In English & IT</option>
                                        <option value="Executive Certificate in English & IT">Executive Certificate in English & IT</option>
                                        <option value="Advanced Microsoft Excel Skills for Professionals: Mastering Advanced Functions for Professional Growth">Advanced Microsoft Excel Skills for Professionals: Mastering Advanced Functions for Professional Growth</option>
                                        <option value="TOEFL - Test of English as a Foreign Language">TOEFL - Test of English as a Foreign Language</option>
                                        <option value="IELTS - International English Language Testing System">IELTS - International English Language Testing System</option>
                                        <option value="PRACTICAL ENGLISH COMMUNICATION">PRACTICAL ENGLISH COMMUNICATION</option>
                                        <option value="Business English For Job Seekers">Business English For Job Seekers</option>
                                        <option value="PTE – Pearson Test of English">PTE – Pearson Test of English</option>
                                        <option value="PUBLIC SPEAKING AND PRESENTATION SKILLS FOR PROFESSIONALS">PUBLIC SPEAKING AND PRESENTATION SKILLS FOR PROFESSIONALS</option>
                                        <option value="Pedagogy in Early Childhood & Primary Education">Pedagogy in Early Childhood & Primary Education</option>
                                        <option value="Higher Diploma in Sports & Exercise Science">Higher Diploma in Sports & Exercise Science</option>
                                        <option value="Practical Diploma in Mental Health">Practical Diploma in Mental Health</option>
                                        <option value="Certificate in Care Giver">Certificate in Care Giver</option>
                                        <option value="Advanced Certificate in Drugs Law Enforcement">Advanced Certificate in Drugs Law Enforcement</option>
                                    </select>
                                </div>
                                <div class="col-xl-12">
                                    <input type="text" name="Name" required="" class="form-control bg-light border-0" placeholder="Full Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="number" name="NIC" required="" class="form-control bg-light border-0" placeholder="NIC" style="height: 55px;">
                                </div>
                                
                                <div class="col-12">
                                Date Of Birth
                                    <input type="date" name="DOB" required="" class="form-control bg-light border-0" placeholder="Date Of Birth" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="number" name="Phone_number" required="" class="form-control bg-light border-0" placeholder="Phone Number" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="Email" required="" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-xl-12">
                                    <input type="text" name="Qualification"  required=""class="form-control bg-light border-0" placeholder="Highest Education Qualification" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select name="Location" required="" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Study location Preference</option>
                                        <option value="Malabe">Malabe</option>
                                        <option value="Nugegoda">Nugegoda</option>
                                        <option value="Dehiwala">Dehiwala</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select name="Days" required="" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Choice Of Learning Days</option>
                                        <option value="Weekdays">Weekdays</option>
                                        <option value="Weekends">Weekends</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" value="add admission" name="submit" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">CSBM Campus</h5>
                        <h1 class="mb-0">Apply Now</h1>
                    </div>
                    <div class="row gx-3">
                        
                    </div>
                    <p class="mb-4">Apply Today
You can submit your application online to study at CSBM through this web page.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+94 112 667 678</h4>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    

    <!-- Footer Start -->
    @include('home.footer')
</body>

</html>
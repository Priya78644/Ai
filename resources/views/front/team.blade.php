@extends('components.main')
@section('content')

<!-- Hero Start -->
<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Our Team</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Our Team</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end">
                <img class="img-fluid" src="assets/img/hero-img.png" alt="" style="max-height: 300px;">
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Team Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Team</div>
                <h1 class="mb-4">Meet Our Experienced Team Members</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                    amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                    clita duo justo et tempor eirmod magna dolore erat amet</p>
                <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="assets/img/team-1.jpg" alt="">
                                    <h5 class="mb-0">Boris Johnson</h5>
                                    <small>Founder & CEO</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="assets/img/team-2.jpg" alt="">
                                    <h5 class="mb-0">Adam Crew</h5>
                                    <small>Executive Manager</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-4">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="assets/img/team-3.jpg" alt="">
                                    <h5 class="mb-0">Kate Winslet</h5>
                                    <small>Co Founder</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="assets/img/team-4.jpg" alt="">
                                    <h5 class="mb-0">Cody Gardner</h5>
                                    <small>Project Manager</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-primary m-1" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Newsletter Start -->
<div class="container-fluid bg-primary newsletter py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid" src="assets/img/newsletter.png" alt="">
            </div>
            <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                <h1 class="text-white mb-4">Let's subscribe the newsletter</h1>
                <div class="position-relative w-100 mt-3 mb-2">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                        placeholder="Enter Your Email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
                <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->

@endsection
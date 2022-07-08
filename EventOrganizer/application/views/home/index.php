<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Interior - Interior Design and Architecture Web Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png" type="image/png')?>">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/LineIcons.css')?>">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">

    <!--====== Aos css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css')?>">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/default.css')?>">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area pt-100">

        <div class="shape header-shape-one">
            <img src="<?php echo base_url('assets/images/banner/shape/shape-1.png')?>" alt="shape">
        </div> <!-- header shape one -->

        <div class="shape header-shape-tow animation-one">
            <img src="<?php echo base_url('assets/images/banner/shape/shape-2.png')?>" alt="shape">
        </div> <!-- header shape tow -->

        <div class="shape header-shape-three animation-one">
            <img src="<?php echo base_url('assets/images/banner/shape/shape-3.png')?>" alt="shape">
        </div> <!-- header shape three -->

        <div class="shape header-shape-fore">
            <img src="<?php echo base_url('assets/images/banner/shape/shape-4.png')?>" alt="shape">
        </div> <!-- header shape three -->

        <div class="navigation-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="" href="#">
                                <img style="width:150px;" src="<?php echo base_url('assets/images/eventtastic.png')?>" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#project">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Testimoni</a>
                                    </li>
                                </ul> <!-- navbar nav -->
                            </div>
                            <div class="navbar-btn ml-20 d-none d-sm-block">
                                <?php
                                    if(!$this->session->has_userdata('USERNAME')){
                                ?>
                                        <a class="main-btn" href="<?php echo base_url('index.php/login')?>"><i class="lni lni-key"></i> Login</a>
                                <?php
                                    } else {
                                        if($this->session->userdata('ROLE')=='administrator') {
                                    ?>
                                        <a class="main-btn" href="<?php echo base_url('index.php/dashboard')?>"><i class="lni lni-laptop-phone"></i> Back-End</a>
                                    <?php
                                    } elseif($this->session->userdata('ROLE')=='public') {
                                    ?>
                                        <a class="main-btn" href="<?php echo base_url('index.php/login/logout')?>"><i class="lni lni-close"></i>Log Out</a>
                                    <?php
                                    }
                                    ?>
                                <?php

                                    }
                                ?>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation bar -->

        <div class="header-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-sm-10">
                        <div class="banner-content">
                            <h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Your trusted</h4>
                            <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s"><span>Event</span> Organizer Partner for Better Experience</h1>
                            <a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="#contact">Plan With Us</a>
                        </div> <!-- banner content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="banner-image bg_cover" style="background-image: url(<?php echo base_url('assets/images/banner/header.png')?>"></div>
        </div> <!-- header banner -->

    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="<?php echo base_url('assets/images/about/about1.jpeg')?>" alt="About">
                        </div> <!-- single image -->
                        <div data-aos="fade-right" class="about-btn">
                            <a class="main-btn" href="#"><span>27</span> Years Experience</a>
                        </div>
                        <div class="single-image image-tow float-right">
                            <img src="<?php echo base_url('assets/images/about/about2.jpeg')?>" alt="About">
                        </div> <!-- single image -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-45">
                        <h4 class="about-welcome">About Us </h4>
                        <h3 class="about-title mt-10">Reasons to choose</h3>
                        <div>
                            <p class="mt-25">EventTastic is an event organizer which focus in Education and Sport industry. We are very passionate to create one of a kind event and we want to show the Education enthusiasts, especially you! We are able to make Education event beyond than what you have been thinking
                                <br> <br>We help clients to understand their specific wants, needs and requests for their event, sssist clients to plan and organize events from concept to completion according to client preferences. As well as, make a budget according to the client's needs.</p>
                        </div>
                      
                        <a class="main-btn mt-25" href="#">learn more</a>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Our Services</h5>
                        <h2 class="title">What We Do?</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <i class="lni-blackboard"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Seminar</h4>
                            <p class="mt-20">Generally, a form of academic instruction, either at an academic institution or offered by a commercial or professional organization.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="services-icon">
                            <i class="lni lni-users"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Workshop</h4>
                            <p class="mt-20">A workshop is a meeting where a group of people engage in intensive discussions and activities on a particular subject or project.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <i class="lni lni-basketball"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title"> Sport Event</h4>
                            <p class="mt-20">Activities carried out to commemorate or celebrate something related to sports. A sport event consists of an athletic activity and a specific skill.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="services-icon">
                            <i class="lni lni-shopping-basket"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Bazaar</h4>
                            <p class="mt-20">A deliberately organized market for a period of several days; exhibition and sale of handicrafts, food, and so on whose proceeds are for charity.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="services-icon">
                            <i class="lni lni-book"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Training</h4>
                            <p class="mt-20">The process of helping the workforce to obtain effectiveness in their present or future work through the development of habits about.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== PROJECT PART START ======-->

    <section id="project" class="project-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-50">
                        <h5 class="sub-title mb-15">Featured Events</h5>
                        <h2 class="title">Events You May Love</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div>
        <?php
        if(!$this->session->has_userdata('USERNAME')){
        redirect('login');
        }else{
            
        ?>
        
        <div class="container-fluid">
            <div class="row project-active">
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event1.jpg')?>" alt="Project">
                        </div>
                        
                        <div class="project-content">
                            <a class="project-title" 
                            href="<?php echo base_url('index.php/detail/index?id=1')?>">Seminar Sukses Kuliah di Luar Negeri</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event2.png')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">How Strong Words of Mounth Can Influence Other</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event3.png')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">Learn the Steps to Start a Business</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event4.jpg')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">Make our business grow together</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event5.jpg')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">Fun Soccer Camp JKT</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event6.jpg')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">Futsal Competition</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event7.jpg')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">Ramayana Bazaar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event8.jpg')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">Jakarta Gramedia Bazaar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event9.jpg')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">To what extent does quality training support growth and job creation?</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="<?php echo base_url('assets/images/project/event10.jpg')?>" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">How to start your own business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </section>

    <!--====== PROJECT PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Meet The Team</h5>
                        <h2 class="title">Our Expert Planners</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/images/team/team-1.png')?>" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Reza Fauzan Pratama</a></h4>
                            <span class="sub-title">CEO & Founder</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/images/team/team-2.png')?>" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Muhammad Yahya Ayyas</a></h4>
                            <span class="sub-title">Chief Planner</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/images/team/team-3.png')?>" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Nurmila Fauziyah</a></h4>
                            <span class="sub-title">Consultant</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="team-image">
                            <img src="<?php echo base_url('assets/images/team/team-4.png')?>" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Pangeran Achmad Yunus</a></h4>
                            <span class="sub-title">Intern</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-130 pb-130">
        <div class="shape shape-one">
            <img src="<?php echo base_url('assets/images/testimonial/shape.png')?>" alt="testimonial">
        </div>
        <div class="shape shape-tow">
            <img src="<?php echo base_url('assets/images/testimonial/shape.png')?>" alt="testimonial">
        </div>
        <div class="shape shape-three">
            <img src="<?php echo base_url('assets/images/testimonial/shape.png')?>" alt="testimonial">
        </div>
        <div class="container">
            <div class="testimonial-bg bg_cover pt-80 pb-80" style="background-image: url(<?php echo base_url('assets/images/testimonial/testimonial-bg.png')?>)">
                <div class="row">
                    <div class="col-xl-4 offset-xl-7 col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="testimonial-active">
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="<?php echo base_url('assets/images/testimonial/t1.jpg')?>" alt="Testimonial">
                                    <div class="quota">
                                        <i class="lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>Sangat komplit, banyak sekali pilihan event di Indonesia yang sangat bermanfaat.</p>
                                    <h5 class="testimonial-name mt-15">Fajar</h5>
                                    <span class="sub-title">Random Customer</span>
                                </div>
                            </div> <!-- single-testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="<?php echo base_url('assets/images/testimonial/t2.jpg')?>" alt="Testimonial">
                                    <div class="quota">
                                        <i class="lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>Keren!!! Semua pelayanan sangat maksimal pelaksanaannya. Pertahankan!</p>
                                    <h5 class="testimonial-name mt-15">Alina</h5>
                                    <span class="sub-title">Event Narasumber</span>
                                </div>
                            </div> <!-- single-testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="<?php echo base_url('assets/images/testimonial/t3.jpg')?>" alt="Testimonial">
                                    <div class="quota">
                                        <i class="lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>Pilihan event yang banyak sangat membantu dalam meningkatkan soft skill.</p>
                                    <h5 class="testimonial-name mt-15">Jidan</h5>
                                    <span class="sub-title">Random Customer</span>
                                </div>
                            </div> <!-- single-testimonial -->
                        </div> <!--  testimonial active -->
                    </div>
                </div> <!-- row -->
            </div> <!-- testimonial bg -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Send Your</h5>
                        <h2 class="title">Testimoni</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="Your Name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="Your Mesaage" name="message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn">send message</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== MAP PART START ======-->

    <section id="map" class="map-area">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
        <div class="map-bg bg_cover d-none d-lg-block" style="background-image: url(<?php echo base_url('assets/images/map/map.jpg')?>)"></div>
    </section>

    <!--====== MAP PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-80 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                        <div class="footer-logo mt-50">
                            <a class="" href="#">
                                <img style="width:150px;" src="<?php echo base_url('assets/images/eventtastic 1.png')?>" alt="Logo">
                            </a>
                            <ul class="footer-info">
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>0813 1651 0883</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-envelope"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>eventtastic@yourmail.com</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-map"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>Mawar 3 South Jakarta, ID</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                            </ul>
                            <ul class="footer-social mt-20">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-google"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <div class="f-title">
                                <h4 class="title">Essential Links</h4>
                            </div>
                            <ul class="mt-15">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <div class="f-title">
                                <h4 class="title">Services</h4>
                            </div>
                            <ul class="mt-15">
                                <li><a href="#">Seminar</a></li>
                                <li><a href="#">Workshop</a></li>
                                <li><a href="#">Sport Event</a></li>
                                <li><a href="#">Bazaar</a></li>
                                <li><a href="#">Training</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-8">
                        <div class="footer-newsleter mt-45">
                            <div class="f-title">
                                <h4 class="title">Newsleter</h4>
                            </div>
                            <p class="mt-15">You can find the latest information from EventTastic at :</p>
                            <form action="#">
                                <div class="newsleter mt-20">
                                    <input type="email" placeholder="EventTastic@info.com">
                                    <button><i class="lni-angle-double-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Made with <i class="lni lni-heart-filled"></i> and <i class="lni lni-coffee-cup"></i> by <a href="#">EventTastic</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- copyright-area -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->


    <!-- row -->









    <!--====== jquery js ======-->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-3.6.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

    <!--====== WOW js ======-->
    <script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo base_url('assets/js/slick.min.js')?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo base_url('assets/js/scrolling-nav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>

    <!--====== Aos js ======-->
    <script src="<?php echo base_url('assets/js/aos.js')?>"></script>


    <!--====== Main js ======-->
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>

</html>

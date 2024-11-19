<!DOCTYPE html>
<html lang="zxx">


<head>
    @include('includes.head')

</head>

<body>

<div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        @include('includes.header')
        <!-- end of header -->

        <!-- start of hero -->
        <section class="static-hero-s3">
            <div class="hero-container">
                <div class="hero-inner">
                    <div class="container-fluid">
                        <div class="hero-content">
                            <!-- <div data-swiper-parallax="300" class="slide-title-sub">
                                <h6>Give them a chance.</h6>
                            </div> -->
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Give The Child The Gift
                                    Of Education.</h2>
                            </div>

                            <div class="hero-btn">
                                <a href="/about-us" class="theme-btn">About Us</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                  <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-1.jpg">
                        </div>
                        <!-- end slide-inner -->
                    </div>
                     <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-2.jpg">
                        </div>
                        <!-- end slide-inner -->
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-4.jpg">
                        </div>
                        <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-3.jpg">
                        </div>
                        <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                   <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->




        <section class="wpo-about-section section-padding">
            <div class="container">
                <div class="wpo-about-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-img">
                                <div class="wpo-about-left">
                                    <img src="assets/images/about/img-2.jpg" alt="">
                                </div>
                                <div class="wpo-about-right">
                                    <img src="assets/images/about/img-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-text">
                            <div class="wpo-section-title">
                                    <span>Welcome to TAST</span>
                                    <h3  class="subHeaded">Transforming lives through Education.</h3>
                                </div>
                                <p>Welcome to The Academic Success Team (TAST)! Founded to empower students, we provide mentorship, resources, and skill-building opportunities to help young people, especially underrepresented groups, succeed academically and professionally. Join us in creating a future where every student has the tools and support needed to reach their full potential</p>


                                <!-- <div class="about-info-wrap"> -->
                                    <div class="about-info-item">
                                        <!-- <div class="about-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-target"></i>
                                            </div>
                                        </div> -->
                                        <div class="about-info-text">
                                            <h4><strong>Our Mission </strong> </h4>
                                            <p>Our mission is to provide comprehensive support to students, particularly those who are underrepresented, including young women and persons with disabilities. By equipping them with tools, guidance, and resources.</p>
                                        </div>
                                    </div>
                                    <div class="about-info-item">
                                        <!-- <div class="about-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-mountain"></i>
                                            </div>
                                        </div> -->
                                        <div class="about-info-text">
                                            <h4><strong>  Our Vision </strong> </h4>
                                            <p>TAST envisions a future where every young person has the opportunity to reach their full potential through access to quality education, mentorship, and technological skills, ensuring an inclusive environment that nurtures success and empowerment for all.</p>
                                        </div>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end of wpo-testimonial-section-s2-->



        <!-- start of wpo-volunteer-section -->
        <section class="wpo-volunteer-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-section-title">
                            <span>Our Expert Team</span>
                            <h2>Meet The Wonderful Team Behind
                                the Success Story</h2>
                        </div>
                    </div>
                </div>
                <div class="volunteer-wraper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="volunteer-single">
                                <div class="image">
                                    <img src="/assets/images/team/agnes_atanga.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h2><a href="/">Agnes Ayariga Atanga</a></h2>
                                    <span>Co-Founder & Executive Director</span>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="volunteer-single">
                                <div class="image">

                                    <img src="/assets/images/team/issifu.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h2><a href="/">Muniratu Issifu</a></h2>
                                    <span>Program Manager</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="volunteer-single">
                                <div class="image">

                                    <img src="/assets/images/team/telo_peters.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h2><a href="/">Tolupe Peters</a></h2>
                                    <span>Board Member & Mentor</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="volunteer-single">
                                <div class="image">
                                <img src="/assets/images/team/dr_sarpong.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h2><a href="/">Dr. Kofi </a></h2>
                                    <span>Research and Development Lead</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="volunteer-single">
                                <div class="image">
                                    <img  height="417px" width="417px" src="/assets/images/team/audrey_akakiya.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h2><a href="/">Audrey Akakiya </a></h2>
                                    <span>Marketing and Communications Specialist</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-volunteer-section -->







        <!-- start of wpo-site-footer-section -->
   @include('includes.footer')


    </div>
    <!-- end of pag



    <!-- Link of JS files -->
    @include('includes.foot')
</body>



</html>

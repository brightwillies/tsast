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
       <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Contact Us</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="/">Home</a></li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start wpo-contact-pg-section -->
        <section class="wpo-contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="office-info">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-location"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Address</h2>
                                            <p>Atimbilla House Adjacent Extee Hotel Bolgatanga Upper East region
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-5 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-email"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Email Us</h2>
                                            <p>info@theacademicsuccessfoundation.org</p>
                                            <!-- <p>theacademicsuccessteam.org</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-phone-call"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Call Now</h2>
                                            <p>+233 246 379 421 </p>
                                            <!-- <p>024xxxxxxx</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-contact-title">
                            <h2>Have Any Question?</h2>

                        </div>
                        <div class="wpo-contact-form-area">
                            <form method="post" class="contact-validation-active" id="contact-form-main">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="adress" id="adress"
                                        placeholder="Adress">
                                </div>
                                <div>
                                    <select name="service" class="form-control">
                                        <option disabled="disabled" selected="">Reason</option>

                                        <option>Start donating</option>
                                        <option>Become a volunteer</option>
                                    </select>
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="note" id="note"
                                        placeholder="Message..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Get in Touch</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-contact-pg-section -->

        <!--  start wpo-contact-map -->
        <section class="wpo-contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="wpo-contact-map">
                <iframe

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127066.75982420542!2d-0.26213068292759173!3d5.5912029543768185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra%2C%20Ghana!5e0!3m2!1sen!2sca!4v1731173796774!5m2!1sen!2sca"
                     allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- end wpo-contact-map -->

        <!-- start of wpo-site-footer-section -->
        @include('includes.footer')
        <!-- end of wpo-site-footer-section -->

    </div>

    @include('includes.foot')
    </body>



</html>

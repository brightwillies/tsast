<!DOCTYPE html>
<html lang="zxx">



<head>
@include('includes.head')
    </head>

    <body>
       <!-- start page-wrapper -->
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

        @include('includes.header')

        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Our Programs</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="/">Home</a></li>
                                <li>Our Programs</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

      




        <section class="wpo-causes-section-s2 section-padding">
            <div class="causes-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-section-title">
                                <!-- <h2></h2> -->
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col col-lg-7 col-md-12 col-12">
                            <div class="causes-item">

                                <div class="content">
                                    <h2><a href="">1.The Academic Success Mentorship and Career Guidance Program </a></h2>
                                    <p style="margin-bottom:35px;">Held annually, this program supports final-year senior high school students in making informed career decisions. Through mentorship and career guidance, TAS has impacted over 10,000 students in the Central and Northern Regions of Ghana, equipping them with the tools and confidence to navigate their future paths.</p>

                                    <h2><a href="">2. Northern Women in Technology (NWIT)</a></h2>
                                    <p style="margin-bottom:35px;"> A program designed for young women transitioning from high school, NWIT provides 21st-century ICT skills training to bridge the gender gap in technology. By empowering young women with digital literacy and technical expertise, NWIT enables them to compete in the technology-driven world. TAS has trained 420 young women so far, and the numbers continue to grow.


                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-5 col-md-12 col-12">
                            <div class="causes-item">
                                <div class="image">
                                    <img src="assets/images/bolga_1.jpg" alt="">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div style="margin-top:30px;" class="row align-items-center">
                        <div class="col col-lg-7 col-md-12 col-12">
                            <div class="causes-item">

                                <div class="content">
                                    <h2><a href="">3. The Academic Success ELEVATE Program </a></h2>
                                    <p style="margin-bottom:35px;">in partnership with Africa Career Networks and the Mastercard Foundation, ELEVATE is a career acceleration initiative that connects young professionals with industry leaders, real-world challenges, and employment opportunities. The program offers mentorship, leadership development, industry immersion, and innovation challenges, ensuring young professionals are job-ready and equipped to contribute meaningfully to Africa’s workforce </p>
                                    <h2 style="font-size:20px;"> <a href="">4. InsightEd: Research for Empowered Learning </a> </h2>
                                    <p>This initiative conducts research on education, career guidance, mentorship, STEM, and mental health, providing evidence-based insights that inform program development and advocacy. By identifying trends, challenges, and opportunities, InsightEd contributes to broader educational discourse, ensuring data-driven approaches to student success and well-being.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-5 col-md-12 col-12">
                            <div class="causes-item">
                                <div class="image">
                                   
                                    <img src="assets/images/bolga_2.jpg" alt="">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

   

        @include('includes.footer')

    </div>
    <!-- end of page-

        <!-- Link of JS files -->
        @include('includes.foot')
    </body>


</html>

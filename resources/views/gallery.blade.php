<!DOCTYPE html>
<html lang="en">

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

        <!-- Start header -->
        @include('includes.header')
        <!-- end of header -->

        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Gallery</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="/">Home</a></li>
                                <li>Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start of wpo-blog-section-->
        <section class="wpo-blog-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-section-title">

                            <h2>Our Memories</h2>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="row">
                        @if($galleries->count() > 0)
                        @foreach($galleries as $key=> $singleGallery)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="blog-single-card">
                                <div class="image">
                                    <img  width="370px" height="280px"  src="{{$singleGallery->thumbnail}}" alt="">
                                    <div class="top-date">
                                    {{$singleGallery->addname}}
                                        <div class="shape">
                                            <svg width="8" height="9" viewBox="0 0 8 9" fill="none">
                                                <path
                                                    d="M7.99999 9.0001L-9.79769e-05 9.00023L8.00005 0.500149L7.99999 9.0001Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">

                                    <h2><a href="/gallery/{{$singleGallery->id}}">{{$singleGallery->title}}.</a></h2>

                                </div>

                            </div>
                        </div>
                         @endforeach
                        @endif
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-blog-section-->



        <!-- start of wpo-site-footer-section -->
        @include('includes.footer')
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->



    @include('includes.foot')
</body>


<!-- Mirrored from wpocean.com/html/tf/charius/testimonial.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2024 02:00:18 GMT -->

</html>

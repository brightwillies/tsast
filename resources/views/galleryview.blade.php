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
                    <img src="/assets/images/preloader.png" alt="">
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
                            <h2>{{$gallery->title}}</h2>
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


        <!-- start of wpo-instagram-section-->
        <section class="wpo-instagram-section s2 section-padding">
            <div class="container">
                <div class="instagram-wrap">
                    <div class="row">

                         @if($images->count() > 0)
                         @foreach($images as $key =>$image)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="instagram-card">
                                <div class="image">
                                    <a href="{{$image->image}}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{$image->image}}" alt class="img img-responsive">
                                        <div class="popup-icon">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-instagram-section-->



        <!-- start of wpo-site-footer-section -->
        @include('includes.footer')
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="/assets/js/modernizr.custom.js"></script>
    <script src="/assets/js/jquery.dlmenu.js"></script>
    <script src="/assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="/assets/js/script.js"></script>
</body>

</html>

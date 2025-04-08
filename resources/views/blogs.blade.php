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
                            <h2>Blogs</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="/">Home</a></li>
                                <li>Blogs</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start of wpo-event-section -->
        <section class="wpo-event-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-section-title">

                            <h2>Check Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="event-wrap">
                    <div class="row">
                    @if($activeBlogs->count() > 0)
                    @foreach($activeBlogs as $key =>$singleEvent)

                        <div class="col col-lg-4 col-md-6 col-12">
                        <a href="/blogs/{{$singleEvent->id}}">
                            <div class="event-card">
                                <div class="top-date">
                                    <span>{{$singleEvent->day}}</span>
                                    {{$singleEvent->mon}} <br>
                                    {{$singleEvent->year}}
                                    <div class="shape">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none">
                                            <path d="M18.9999 14L0.5 14L18.9999 -3.6902e-05L18.9999 14Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="image">
                                    <img  width="400px"  height="307px" src="{{$singleEvent->image}}" alt="">
                                </div>
                            </div>

                            <h4>{{$singleEvent->title}}</h4>
                            <p stlye="max-height:200px;">{{$singleEvent->introduction}}</p>
                            </a>
                        </div>


                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- end of wpo-event-section -->

        <!-- start of wpo-site-footer-section -->
        @include('includes.footer')
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->

    @include('includes.foot')
</body>
</html>

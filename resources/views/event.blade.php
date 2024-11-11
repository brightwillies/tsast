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
                            <h2>{{$event->title}}</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="/">Home</a></li>
                                <li>Events</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- wpo-event-details-area start -->
        <div class="wpo-event-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="wpo-event-item">
                            <div class="wpo-event-img">
                                <img src="{{$event->image}}" alt="">
                            </div>
                            <div class="wpo-event-details-text">
                                <h2>{{$event->title}}</h2>
                                <p>{{$event->summary}}</p>
                                </div>

                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="blog-sidebar">

                            <div class="widget recent-post-widget">
                                <h3>Upcoming Events</h3>
                                <div class="posts">
                                    @foreach($events as $key=> $singleEvent)

                                    <div class="post">
                                        <div class="img-holder">
                                            <img width="400px"  height="307px" src="{{$singleEvent->image}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="/events/{{$singleEvent->id}}">{{$singleEvent->title}}</a>
                                            </h4>
                                            <span class="date">{{$singleEvent->addname}} </span>
                                        </div>
                                    </div>

                                    @endforeach

                                  
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-event-details-area end -->

        <!-- start of wpo-site-footer-section -->
        @include('includes.footer')
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    @include('includes.foot')
</body>


<!-- Mirrored from wpocean.com/html/tf/charius/event-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2024 02:00:24 GMT -->
</html>

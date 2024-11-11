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
                            <h2>Events</h2>
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


        <!-- start of wpo-event-section -->
        <section class="wpo-event-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-section-title">
                           
                            <h2>Join Our Upcoming
                                Events</h2>
                        </div>
                    </div>
                </div>
                <div class="event-wrap">
                    <div class="row">
                    @if($activeEvents->count() > 0)
                    @foreach($activeEvents as $key =>$singleEvent)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="event-card">
                                <div class="top-date">
                                    <span>{{$singleEvent->day}}</span>
                                    {{$singleEvent->mon}}
                                    <div class="shape">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none">
                                            <path d="M18.9999 14L0.5 14L18.9999 -3.6902e-05L18.9999 14Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="image">
                                    <img  width="400px"  height="307px" src="{{$singleEvent->image}}" alt="">
                                </div>
                                <div class="text">
                                    <h3><a href="/events/{{$singleEvent->id}}">{{$singleEvent->title}}</a></h3>
                                    <div class="event-info">
                                       <span style="margin-right:25px;"><i class="ti-calendar"></i>{{$singleEvent->addname}}</span>
                                        <span><i class="ti-location-pin"></i>{{$singleEvent->venue}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="wpo-event-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-section-title">

                            <h2 style="margin-top:-50px; margin-bottom:50px;">Checkout Our Past
                                Events</h2>
                        </div>
                    </div>
                </div>
                <div class="event-wrap">
                    <div class="row">
                    @if($pastEvents->count() > 0)
                    @foreach($pastEvents as $key =>$singleEvent)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="event-card">
                                <div class="top-date">
                                    <span>{{$singleEvent->day}}</span>
                                    {{$singleEvent->mon}}
                                    <div class="shape">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none">
                                            <path d="M18.9999 14L0.5 14L18.9999 -3.6902e-05L18.9999 14Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="{{$singleEvent->image}}" alt="">
                                </div>
                                <div class="text">
                                    <h3><a href="event-single.html">{{$singleEvent->title}}</a></h3>
                                    <div class="event-info">
                                       <span style="margin-right:25px;"><i class="ti-calendar"></i>{{$singleEvent->addname}}</span>
                                        <span><i class="ti-location-pin"></i>{{$singleEvent->venue}}</span>
                                    </div>
                                </div>
                            </div>
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


<!-- Mirrored from wpocean.com/html/tf/charius/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2024 02:00:23 GMT -->
</html>

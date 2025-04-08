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
                            <h2>{{$blog->title}}</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index.html">Home</a></li>
                                <li>Blog</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start wpo-blog-single-section -->
        <section class="wpo-blog-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-12">
                        <div class="wpo-blog-content">
                            <div class="post format-standard-image">
                                 <h2>{{$blog->title}}</h2>
                                <div class="entry-media">
                                    <img src="{{$blog->image}}" alt>
                                </div>
                                <!-- <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                        <li><i class="fi flaticon-calendar"></i> 24 Jun 2023</li>
                                    </ul>
                                </div> -->

                                              {!!$blog->summary!!}

                                <div class="gallery">
                                    <div>
                                        <img src="assets/images/blog/img-1.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="assets/images/blog/img-2.jpg" alt="" >
                                    </div>
                                </div>
                            </div>
                          <!-- end tag-share -->

                           <!-- end comments-area -->
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="blog-sidebar">
                            <div class="widget recent-post-widget">
                                <h3>Other Blogs</h3>
                                <div class="posts">
                                @if($otherBlogs->count() > 0)
                                @foreach($otherBlogs as $key =>$sBlogs)
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{$sBlogs->image}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">{{$sBlogs->title}}.</a>
                                            </h4>
                                            <span class="date">{{$sBlogs->day}} {{$sBlogs->mon}}  {{$sBlogs->year}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-single-section -->

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

<header id="header">
            <div class="topbar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-7 col-sm-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="fi flaticon-telephone-1"></i>024xxxxxxx</li>
                                    <li><i class="fi ti-location-pin"></i>Accra</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-5 col-sm-12 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end topbar -->
            <div class="wpo-site-header wpo-site-header-s3">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-4 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="/"><img id="headerLogo" height="100px" src="/assets/images/logoo.jpg"
                                            alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                    <li><a  class="{{(request()->is('/')) ? 'active' : '' }}"  class="active" href="/">Home</a></li>
                                    <li><a  class="{{(request()->is('about-us')) ? 'active' : '' }}"  href="/about-us">About Us</a></li>
                                    <li><a  class="{{(request()->is('events')) ? 'active' : '' }}"  href="/events">Event</a></li>
                                    <li><a  class="{{(request()->is('gallery')) ? 'active' : '' }}"  href="/gallery">Gallery</a></li>
                                    <li><a  class="{{(request()->is('contact-us')) ? 'active' : '' }}"  href="/contact-us">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-2">
                                <div class="header-right">


                                    </div>
                                    <div class="close-form">
                                        <a class="theme-btn" href="/"><span class="mobile"><i
                                                    class="fi fa fa-heart"></i></span><span class="text"> Donate
                                                Now</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>


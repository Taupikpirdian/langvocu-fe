<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Site Metas -->
    <title>Langvocu</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Start Css -->
    @include('include.style')
    <!-- End Css -->
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{asset('assets/images/loader.gif')}}" alt="#" />
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Start header -->
    @include('include.header')
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url({{asset('assets/images/banner_img.png')}});">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="courses.html">Start a Course</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url({{asset('assets/images/banner_img.png')}});">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="courses.html">Start a Course</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
	<div class="section tabbar_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_menu" style="text-align: center">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </span>
                                    <span>Search</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </span>
                                    <span>Create</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                    <span>Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- end section -->

    <!-- content -->
    @yield('content')
	<!-- end content -->

    <!-- Start Footer -->
    @include('include.footer')
    <!-- End Footer -->

    <!-- Start Js -->
    @include('include.script')
    <!-- End Js -->
</body>
</html>
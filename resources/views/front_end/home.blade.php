<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Give_AID</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('client/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/nice-select/css/nice-select.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{URL::asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/css/responsive.css')}}">
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="http://localhost/NGO-v3/public/front/home"><img src="../client/img/logo1.png" style="height:44px;" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="http://localhost/NGO-v3/public/front/home">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/donate">Donate</a></li>
                                <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/about">About</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Causes</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/causes_poor">Support the poor </a>
                                        <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/causes_child">Support children</a>
                                        <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/causes_disabilities">People with disabilities</a>
                                        <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/causes_homeless">Support Homeless </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/contact">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/shop">shop</a></li>
                                <li class="nav-item"><a class="nav-link" href="http://localhost/NGO-v3/public/front/login">Register / Login</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="banner_content">
                    <p class="upper_text">Give a hand</p>
                    <h2>to make the better world</h2>
                    <p>
                        Bring love and give love everywhere, from the
                        smallest action to help those who are more unhappy than us.
                        Join us to have a better world
                    </p>
                    <a class="primary_btn mr-20" href="http://localhost/NGO-v3/public/front/donate">Donate Now</a>
                    <a class="primary_btn yellow_btn text-white" href="http://localhost/NGO-v3/public/front/detail_up">See Causes</a>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Causes Area =================-->
    <section class="causes_area_home">
        <div class="container">
            <div class="main_title">
                <h2>Our major causes</h2>
                <p>Our causes and purposes as well as those who join us</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Give Donation</h4>
                        <img src="../client/img/causes/c1.png" alt="">
                        <p>
                            Support and help disadvantaged people by donating money. We will help you send them to them
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Give Inspiration</h4>
                        <img src="../client/img/causes/c2.png" alt="">
                        <p>
                            Inspire people around to help disadvantaged people. Connection will be easier than solitary
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Become Bolunteer</h4>
                        <img src="../client/img/causes/c3.png" alt="">
                        <p>
                            Become volunteer to participate in activities that help and raise money for disadvantaged people
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Causes Area =================-->

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row">
                <div class="single_about row">
                    <div class="col-lg-6 col-md-12 text-center about_left">
                        <div class="about_thumb">
                            <img src="../client/img/about-img.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about_right">
                        <div class="about_content">
                            <h3 class="text-success">
                                Organization History
                            </h3>
                            <p>
                                Give-AID was founded as a charity in 2000.
                                Our head office is in Ha Noi, Viet Nam.
                                We also have hubs in Asia, the Americas and Europe
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="http://localhost/NGO-master/resources/views/front_end/About.blade.php"><button type="button" class="btn btn-outline-warning btn-sm" value="hien1">Learn More</button></a>
                                </div>
                            </p>
                            <h3 class="text-success">
                                Mission & Strategy
                            </h3>
                            <p>
                                We work to achieve social justice, to eradicate poverty.
                                Build international momentum for social,
                                economic and environmental
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="http://localhost/NGO-master/resources/views/front_end/About.blade.php"><button type="button" class="btn btn-outline-warning btn-sm" value="hien2">Learn More</button></a>
                                </div>
                            </p>
                            <h3 class="text-success">
                                Long-Term Development
                            </h3>
                            <p>
                                People can escape poverty - permanently. </br>
                                We stay to help people to rebuild their lives.
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="http://localhost/NGO-master/resources/views/front_end/About.blade.php"><button type="button" class="btn btn-outline-warning btn-sm" value="hien3">Learn More</button></a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!--================ Start Recent Event Area =================-->
    <section class="event_area section_gap_home">
        <div class="container">
            <div class="main_title">
                <h2>Upcoming events</h2>
                <p>Let's join our upcoming events to join hands to help the disadvantaged</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="../client/img/causes/ev1.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="#">Crisis in Yemen</a>
                                    </h3>
                                    <p>
                                        Four years of devastating conflict have plunged Yemen into one of the world's gravest humanitarian crises.
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p>Registered: 2730</p>
                                        <p><span class="lnr lnr-heart"></span> 120 Donors</p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="http://localhost/NGO-master/resources/views/front_end/Causes/Registration/Registration.blade.php"><button type="button" class="btn btn-outline-success">Register</button></a>
                                        <a href="http://localhost/NGO-master/resources/views/front_end/Causes/detail/detail_up.blade.php"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="../client/img/disabilities/ev1.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Children with disabilities</a>
                                    </h3>
                                    <p>
                                        Help children with disabilities integrate with the community and play appropriate sports
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p>Registered: 2730</p>
                                        <p><span class="lnr lnr-heart"></span> 120 Donors</p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="http://localhost/NGO-master/resources/views/front_end/Causes/Registration/Registration.blade.php"><button type="button" class="btn btn-outline-success">Register</button></a>
                                        <a href="http://localhost/NGO-master/resources/views/front_end/Causes/detail/detail_up.blade.php"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="../client/img/homeless/ev1.jfif" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Overcoming disaster</a>
                                    </h3>
                                    <p>
                                        Overcoming natural disasters, helping homeless people due to natural disasters
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p>Registered: 2730</p>
                                        <p><span class="lnr lnr-heart"></span> 120 Donors</p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="http://localhost/NGO-master/resources/views/front_end/Causes/Registration/Registration.blade.php"><button type="button" class="btn btn-outline-success">Register</button></a>
                                        <a href="http://localhost/NGO-master/resources/views/front_end/Causes/detail/detail_up.blade.php"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="../client/img/poor/ev1.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Poor old people</a>
                                    </h3>
                                    <p>
                                        Poor old people are very high proportion, please help them to have a warm and happy old age
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p>Registered: 2730</p>
                                        <p><span class="lnr lnr-heart"></span> 120 Donors</p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="http://localhost/NGO-master/resources/views/front_end/Causes/Registration/Registration.blade.php"><button type="button" class="btn btn-outline-success">Register</button></a>
                                        <a href="http://localhost/NGO-master/resources/views/front_end/Causes/detail/detail_up.blade.php"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Recent Event Area =================-->

    <!--================ Start Features Cause section =================-->
    <section class="features_causes">
        <div class="container">
            <div class="main_title">
                <h2>Featured events</h2>
                <p>Let's take a look at our outstanding events in the past</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="../client/img/causes/fc1.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">South Africa</h4>
                                <p class="card-text">
                                    Despite an impressive economic growth, inequality has reached extreme levels in the West South region.
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Achieved: $8.430.000</p>
                                    <p>/</p>
                                    <p>Cible: $6.000.000</p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="http://localhost/NGO-master/resources/views/front_end/Causes/detail/detail_fe.blade.php"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    <p><span class="lnr lnr-heart"></span> 1980 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="../client/img/disabilities/fc2.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Working together</h4>
                                <p class="card-text">
                                    Working, playing with disabled people, organizing exchanges with outdoor activities outdoors
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Achieved: $9.350.000</p>
                                    <p>/</p>
                                    <p>Cible: $8.000.000</p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="http://localhost/NGO-master/resources/views/front_end/Causes/detail/detail_fe.blade.php"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    <p><span class="lnr lnr-heart"></span> 2230 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="../client/img/homeless/fc3.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Provide food and clothes</h4>
                                <p class="card-text">
                                    Provide food, clothes and drinks for the homeless, the poor on the streets of the city to help them
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Achieved: $9.890.000</p>
                                    <p>/</p>
                                    <p>Cible: $7.000.000</p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="http://localhost/NGO-master/resources/views/front_end/Causes/detail/detail_fe.blade.php"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    <p><span class="lnr lnr-heart"></span> 2400 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Cause section =================-->

    <!--================Team Area =================-->
    <section class="team_area section_gap_home">
        <div class="container">
            <div class="main_title">
                <h2>Our Developer & Manager</h2>
                <p>Those who created Give-AID and continuously developed Give-AID for lofty ideals</p>
            </div>
            <div class="row team_inner">
                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/1.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Khắc Tiệp</h4>
                            <p>Marketing Manager</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/2.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Lan Hương</h4>
                            <p>Managing Director</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/3.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Thanh Tùng</h4>
                            <p>Business Manager</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/4.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Giang Nguyễn</h4>
                            <p>Development Manager</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/5.jpg" style="height:cover" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Chiến Vũ</h4>
                            <p>Customer Care</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div style="height:120px"></div>
        <!--================End Team Area =================-->

        <!--================ Start CTA Area =================-->
        <div class="cta-area section_gap overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <h1>Let's Join Hands !!!</h1>
                        <p>
                            We want to see a just, fair and sustainable world, in which everybody
                            enjoys the right to a life of dignity, and freedom from poverty and oppression. </br>
                            We believe in the power in people. If we can support people to know,
                            claim and defend their rights, the world will be a fairer place.
                        </p>
                        <a href="#" class="primary_btn yellow_btn rounded">join with us</a>
                    </div>
                </div>
            </div>
        </div>
        <!--================ End CTA Area =================-->

        <!--================ Start Story Area =================-->
        <section class="section_gap story_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="main_title">
                            <h2>Our latest Story</h2>
                            <p>
                                Listen and understand us through daily stories
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-story -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-story">
                            <div class="story-thumb">
                                <img class="img-fluid" src="../client/img/story/s1.jpg" alt="">
                            </div>
                            <div class="story-details">
                                <div class="story-meta">
                                    <a href="#">
                                        <span class="lnr lnr-calendar-full"></span>
                                        16th Sat, 2018
                                    </a>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>
                                        Company
                                    </a>
                                </div>
                                <h5>
                                    <a href="#">
                                        Our creativity, developing continuously day by day, each activity
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <!-- single-story -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-story">
                            <div class="story-thumb">
                                <img class="img-fluid" src="../client/img/story/s2.jpg" alt="">
                            </div>
                            <div class="story-details">
                                <div class="story-meta">
                                    <a href="#">
                                        <span class="lnr lnr-calendar-full"></span>
                                        20th Sep, 2018
                                    </a>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>
                                        Company
                                    </a>
                                </div>
                                <h5>
                                    <a href="#">
                                        Difficulties and challenges are gradually being overcome and daily experiences are drawn
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <!-- single-story -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-story">
                            <div class="story-thumb">
                                <img class="img-fluid" src="../client/img/story/s3.jpg" alt="">
                            </div>
                            <div class="story-details">
                                <div class="story-meta">
                                    <a href="#">
                                        <span class="lnr lnr-calendar-full"></span>
                                        27th Nov, 2018
                                    </a>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>
                                        Company
                                    </a>
                                </div>
                                <h5>
                                    <a href="#">
                                        Many large projects have been proposed and completed beyond the targets
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Story Area =================-->

        <!--================ Start Subscribe Area =================-->
        <div class="container">
            <div class="subscribe_area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center">
                            <h1 class="text-white">Do you have a question?</h1>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="ml-10 primary_btn yellow_btn btn sub-btn rounded">SUBSCRIBE</button>
                                    </div>
                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================ End Subscribe Area =================-->

        <!--================ Start footer Area  =================-->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row section_gap">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                <h4 class="footer_title large_title">Our Mission</h4>
                                <p>
                                    Our mission is to bring love and give love everywhere, from the smallest
                                    action to help those who are more unhappy than us.
                                </p>
                                <p>
                                    Join us to have a better world

                                </p>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                <h4 class="footer_title">Quick Links</h4>
                                <ul class="list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Causes</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget instafeed">
                                <h4 class="footer_title">Gallery</h6>
                                    <ul class="list instafeed d-flex flex-wrap">
                                        <li><img src="../client/img/gallery/g1.jpg" alt=""></li>
                                        <li><img src="../client/img/gallery/g2.jpg" alt=""></li>
                                        <li><img src="../client/img/gallery/g3.jpg" alt=""></li>
                                        <li><img src="../client/img/gallery/g4.jpg" alt=""></li>
                                        <li><img src="../client/img/gallery/g5.jpg" alt=""></li>
                                        <li><img src="../client/img/gallery/g6.jpg" alt=""></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                <h4 class="footer_title">Contact Us</h4>
                                <div class="ml-40">
                                    <p class="sm-head">
                                        <span class="fa fa-location-arrow"></span>
                                        Head Office
                                    </p>
                                    <p>8, Ton That Thuyet, My Dinh, Ha Noi</p>

                                    <p class="sm-head">
                                        <span class="fa fa-phone"></span>
                                        Phone Number
                                    </p>
                                    <p>
                                        (+84) 37 73 71 08 <br>
                                        (+84) 37 73 71 08
                                    </p>

                                    <p class="sm-head">
                                        <span class="fa fa-envelope"></span>
                                        Email
                                    </p>
                                    <p>
                                        Give_AID@gmail.com <br>
                                        www.Give_AID.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row d-flex">
                        <p class="col-lg-12 footer-text text-center">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> FPT APTECH | This project is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://localhost/Give_AID/public/home" target="_blank">Give_AID</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--================ End footer Area  =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script href="{{URL::asset('client/js/jquery-3.2.1.min.js')}}"></script>
        <script href="{{URL::asset('client/js/popper.js')}}"></script>
        <script href="{{URL::asset('client/js/bootstrap.min.js')}}"></script>
        <script href="{{URL::asset('client/js/stellar.js')}}"></script>
        <script href="{{URL::asset('client/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script href="{{URL::asset('client/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script href="{{URL::asset('client/js/jquery.ajaxchimp.min.js')}}"></script>
        <script href="{{URL::asset('client/js/mail-script.js')}}"></script>
        <script href="{{URL::asset('client/js/owl.carousel-about.min.js')}}"></script>
        <!-- contact js -->
        <script href="{{URL::asset('client/js/jquery.form.js')}}"></script>
        <script href="{{URL::asset('client/js/jquery.validate.min.js')}}"></script>
        <script href="{{URL::asset('client/js/contact.js')}}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script href="{{URL::asset('client/js/gmaps.min.js')}}"></script>
        <script href="{{URL::asset('client/js/theme.js')}}"></script>
</body>

</html>
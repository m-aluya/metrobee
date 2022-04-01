<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Metro National Spelling Bee ">
    <meta property="og:url" content="https://metrobee.org.ng/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Campus Metro National Spelling Bee" />
    <meta property="og:description" content="Highlights of moments from the 2019 Grand Finale! Enter the <?= date('Y') ?> contest at www.metrobee.org.ng for a total of N3k only. Register to spell your way to stardom" />
    <meta property="og:image" content="https://scontent-lhr8-1.xx.fbcdn.net/v/t1.0-9/p960x960/44455637_307437329844855_8310299948646137856_o.jpg?_nc_cat=102&_nc_sid=85a577&_nc_ohc=i9Zk2HFuCykAX_wNDBr&_nc_ht=scontent-lhr8-1.xx&_nc_tp=6&oh=59b294795b538082c177a72c8597cb0e&oe=5EFBD398" />
    <!-- OG Meta Tags Facebook -->


    <!-- OG Meta Tags Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CampusMetro">
    <meta name="twitter:creator" content="@CampusMetro">
    <meta name="twitter:title" content="Campus Metro National Spelling Bee">
    <meta name="twitter:description" content="Highlights of moments from the 2019 Grand Finale! Enter the <?= date('Y') ?> contest at www.metrobee.org.ng for a total of N3k only. Register to spell your way to stardom">
    <meta name="twitter:image" content="https://scontent-lhr8-1.xx.fbcdn.net/v/t1.0-9/p960x960/44455637_307437329844855_8310299948646137856_o.jpg?_nc_cat=102&_nc_sid=85a577&_nc_ohc=i9Zk2HFuCykAX_wNDBr&_nc_ht=scontent-lhr8-1.xx&_nc_tp=6&oh=59b294795b538082c177a72c8597cb0e&oe=5EFBD398">
    <meta property="og:image:type" content="image/png">
    <!-- OG Meta Tags Twitter -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Metro Spelling Bee | App</title>
    <style>
        .slider_area .single_slider {
            height: 70vh;
            background-size: cover;
            s background-repeat: no-repeat;
            background-position: center;
        }

        .slider_bg_1 {
            background-image: url(<?= Inaki::path(); ?>img/banner/banner.png);
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .slider_area .single_slider .slider_info h3 {
            color: #fff;
            font-size: 60px;
            text-transform: capitalize;
            font-weight: 400;
            line-height: 70px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .slider_area .single_slider .illastrator_png img {
            width: 100%;
            margin: 5%;
        }

        .boxed_btn {
            cursor: pointer;
            font-size: 20px;
            color: #fff;
            padding: 17px 25px;
            margin: 5%;
            background: #e83e8c;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            border: 1px solid transparent;
            display: inline-block;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }
    </style>

    <link rel="stylesheet" href="<?= Inaki::path(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= Inaki::path(); ?>vendors/linericon/style2.css">
    <link rel="stylesheet" href="<?= Inaki::path(); ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?= Inaki::path(); ?>vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= Inaki::path(); ?>vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= Inaki::path(); ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= Inaki::path(); ?>vendors/nice-select/css/nice-select.css">

    <link rel="stylesheet" href="<?= Inaki::path(); ?>css/style2.css">
    <!-- Google Tag Manager
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
             new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
             j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
             'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
             })(window,document,'script','dataLayer','GTM-M4V64C9');</script>
        End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <!--<script>
             !function(f,b,e,v,n,t,s)
             {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
             n.callMethod.apply(n,arguments):n.queue.push(arguments)};
             if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
             n.queue=[];t=b.createElement(e);t.async=!0;
             t.src=v;s=b.getElementsByTagName(e)[0];
             s.parentNode.insertBefore(t,s)}(window,document,'script',
             'https://connect.facebook.net/en_US/fbevents.js');
             fbq('init', '579399552599710'); 
             fbq('track', 'PageView');
        </script>
        <noscript>
             <img height="1" width="1" 
             src="https://www.facebook.com/tr?id=579399552599710&ev=PageView
             &noscript=1"/>
        </noscript> -->
    <!-- End Facebook Pixel Code -->
</head>

<body onload="notifyMe()">
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "120939338494656");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">

                    <a class="navbar-brand logo_h" href="/"><img src="<?= Inaki::path(); ?>img/bee.png" style="height: 70px" class="img-responsive" alt=""></a>
                    <a class="navbar-brand logo_inner_page" href="/"><img src="<?= Inaki::path(); ?>img/beewhite.png" style="width: 50px" class="img-responsive" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav">
                            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= Inaki::path(); ?>gallery">Gallery</a></li>

                            <li class="nav-item"><a class="nav-link" href="<?= Inaki::path() ?>login">Login</a></li>

                            <li class="nav-item"><a class="nav-link" href="<?= Inaki::path() ?>enroll">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>


















    <div style="height: 90px; width: 100%; background: white"></div>








    <div class="slider_area " id="activate">
        <div class="single_slider d-flex align-items-center justify-content-center ">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info"> <br /><br /><br /><br /><br /><br />
                            <h3 style="color:#05364d;">We celebrate & reward academic talents</h3>

                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img class="img-fluid" style="max-width:80%" src="https://metrobee.org.ng/img/bee.png" alt="">
                            <a href="<?= Inaki::path() ?>enroll" class="boxed_btn"><i class="fa fa-long-arrow-right">Register for the 2021/2022 contest here!</i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <section class="home_banner_area" style="margin-top:0px; padding-top: 0">
        <div class="banner_inner">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h3>Welcome to</h3>
                            <h1 class="text-uppercase">Metro National Spelling Bee 2021/2022</h1>
                            <h5 class="text-uppercase">Become Our Bee Champion!</h5>
                            <div class="social_icons my-5">
                                <a href="https://www.facebook.com/campusmetrospellingbee"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/campusmetro"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/campusmetrospellingbee"><i class="ti-instagram"></i></a>

                            </div>
                            <a class="primary_btn" href="<?= Inaki::path() ?>login"><span>Login</span></a>
                            <a class="primary_btn" href="<?= Inaki::path() ?>enroll"><span>Register</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="home_right_img">
                            <img class="img-fluid" src="<?= Inaki::path(); ?>img/banner/home-right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="statistics_area">
        <div class="container">
            <div class="row justify-content-lg-start justify-content-center">
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p></p>
                        <h3><span class="counter">Spell your way to stardom!</span></h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>Study</p>
                        <h3><span class="counter">10,000</span></h3>
                        <p>Words</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <h3><span class="counter">3</span></h3>
                        <p>Stages of Contest</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <h3><span class="counter">5</span></h3>
                        <p>Winners Emerge</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>Bee Champion wins:</p>
                        <h3><span class="counter">One Million Naira</span></h3>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>1st Runner-up wins:</p>
                        <h3><span class="counter">N140,000! </span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>2nd Runner-up wins:</p>
                        <h3><span class="counter">N130,000!</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>3rd Runner-up wins:</p>
                        <h3><span class="counter">N120,000!</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>4th Runner-up wins:</p>
                        <h3><span class="counter">N110,000!</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p class="counter">Grand Finals</p>
                        <h3><span class="counter">At the University of Benin, Benin City, on Saturday, May 7th, 2022.</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p class="counter">Hosting 54 Finalists</p>
                        <h3><span class="counter">Metro Bee will be responsible for Accommodation and Feeding for the 54 finalists expected at the University of Benin.</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>Registration fee including payment for our spelling study handout of 10,000 words is </p>
                        <h3><span class="counter">N3,000</span></h3>
                        <p>only.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>Payment can be made online immediately after submitting the registration form. You are directed to click to continue to payment after submitting the form. Or you can transfer directly into our company's Zenith Bank account displayed as follows:</p>
                        <h3><span class="counter">Famous Metro International Limited <br>1016336813 <br> Zenith Bank PLC</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>Online Preliminaries will start on </p>
                        <h3><span class="counter">April 4th, 2022</span></h3>
                        <p>and end on</p>
                        <h3><span class="counter">April 9th, 2022.</span></h3>
                        <p>It is up to a contestant to choose any day between April 4th and April 9th to take the preliminaries.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="statistics_item">
                        <p>Online Regionals will start on </p>
                        <h3><span class="counter">April 14th, 2022</span></h3>
                        <p>and end on</p>
                        <h3><span class="counter">April 18th, 2022.</span></h3>
                        <p>It is up to a contestant to choose any day between April 14th and April 18th to take the regionals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about_area section_gap" id="about">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="<?= Inaki::path(); ?>img/about-us.png" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <p class="top_text">About the Bee <span></span></p>
                        <h2>
                            About Our Spelling Contest
                        </h2>
                        <p>
                            Our spelling contest is an indoor game that plays on sound and sense, the pronunciation and the meaning of words. The game master known as the Bee Master pronounces a word and states a brief meaning of the word while you as a contestant listen and spell the word in the presence of a panel of judges and a large audience. The challenge is to display your word power and extensive vocabulary simply by spelling your way through both simple and difficult words up to the Grand Finale to win our star prize and become our Bee Champion!
                        </p>
                        <a class="primary_btn" href="enroll"><span>Join the contest</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section Class="section_gap">

        <div class="container">
            <div class="row">


                <div class="col-md-12">

                    <img src="<?= Inaki::path(); ?>img/bee.png" class="img-responsive" style="width:100%" />
                    <br />
                    <div class="col-md-12">
                        <br /><br /><br />
                        <h1 class="text-center wow fadeInUp" data-wow-delay="0.3s">The Bee Champion </h1>
                        <p class="text-center">
                            The Bee Champion or winner may emerge in any of the rounds from the 1st to the 3rd. This can happen if only one of the spellers spells his choice word correctly in addition to the next word that has not been spelt in the Bee Master's list.
                            <br />If there is no winner after the 3rd round, the judges shall call for a tiebreaker of seven words to be served to all the finalists in this round to spell in writing. The speller with the highest score out of seven shall be declared the winner, the Metro Bee Champion 2022.

                        </p>

                    </div>

                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                        <div class="service_item">
                            <img src="<?= Inaki::path(); ?>img/services/s1.png" alt="">
                            <h4>Our Mission</h4>
                            <p>To pre-expose students to advanced vocabulary that will be useful for effective learning in various academic subjects that they are likely to encounter in the course of their higher studies.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                        <div class="service_item">
                            <img src="<?= Inaki::path(); ?>img/services/s2.png" alt="">
                            <h4>Our Vision</h4>
                            <p>A Nigerian culture that rewards academic accomplishments.</p>
                        </div>
                    </div>

                </div>
            </div>
    </section>




    <section class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our Tesitmonial <span></span></p>
                        <h2>What People Say <br>
                            About Us </h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme testimonial-slider ">
                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testi-img mb-4 mb-lg-0">
                                <img src="<?= Inaki::path(); ?>img/beewhite.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <h4>Sandra </h4>
                                <p><small>Geology</small></p>
                                <p> I love campus metro spelling bee. </p>
                                <ul class="star_rating mt-4">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li class="disable"><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testi-img mb-4 mb-lg-0">
                                <img src="<?= Inaki::path(); ?>img/beewhite.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <h4>Olumide</h4>
                                <p><small>Agric. UNIBEN</small></p>
                                <p>This is really impressive, I am proud user of the platform. </p>
                                <ul class="star_rating mt-3">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li class="disable"><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testi-img mb-4 mb-lg-0">
                                <img src="<?= Inaki::path(); ?>img/beewhite.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <h4>Henry</h4>
                                <p><small>Elect. Eng, UNICAL</small></p>
                                <p>I played the preliminaries, and quaified for the game. I am actully planning to win this year's contest. </p>
                                <ul class="star_rating mt-3">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li class="disable"><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <section class="portfolio_area" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our Gallery <span></span></p>
                        <h2>Check Our Recent <br>
                            Works </h2>
                    </div>
                </div>
            </div>
            <div class="filters portfolio-filter">

            </div>
            <div class="filters-content">
                <div class="row portfolio-grid">
                    <div class="grid-sizer col-md-3 col-lg-3"></div>
                    <div class="col-lg-6 col-md-6 all following">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="<?= Inaki::path(); ?>img/portfolio/p1.jpg" alt="">


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 all latest popular upcoming">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="<?= Inaki::path(); ?>img/portfolio/p4.jpg" alt="">


                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 all latest following">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="<?= Inaki::path(); ?>img/portfolio/p2.jpg" alt="">


                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 all latest upcoming">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="<?= Inaki::path(); ?>img/portfolio/p3.jpg" alt="">


                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>










    <section class="portfolio_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">A Little More <span></span></p>
                        <h2> More Information About the Bee </h2>
                    </div>
                </div>
            </div>
            <h2 class="f_size_30 f_600 t_color3 l_height45 mb_90 wow fadeInUp" data-wow-delay="0.3s">Eligibility </h2>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">


                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="list-group ikpa">
                        <li class="list-group-item">A contestant must be of age 18 or above, or if less, must be a student at a higher institution.</li>
                        <li class="list-group-item">A contestant must not have any relatives - siblings, cousins, nephews, nieces, parents, uncles, aunties - who are current staff members or employees of the Metro Spelling Bee.</li>
                        <li class="list-group-item">Contestants are required immediately after registration to follow the Metro National Spelling Bee page on Facebook for regular and timely updates.</li>
                        <li class="list-group-item">Graduates and postgraduate students are not eligible to participate.</li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="list-group ikpa">
                        <li class="list-group-item">A contestant may not be less than 18 years by May 7th, 2022, or if less, must be a student at a higher institution. </li>
                        <li class="list-group-item">A contestant must be a student at a higher institution or posses a UTME (JAMB) score of 160 or above by May 7th, 2022. </li>
                        <li class="list-group-item">All students at colleges, polytechnics and universities in Nigeria are eligible to register to compete for the prizes. </li>
                        <li class="list-group-item">A contestant must pay a nonrefundable fee of three thousand naira (N3,000) only to register, or transfer directly into the company's account, and obtain our spelling handout of ten thousand words.</li>


                    </ul>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top:5em">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">The 2022 Word List</h2>
                    The 2022 Word List is a spelling study material or handout that contains ten thousand (10,000) words in two volumes. Vol. 1 contains seven thousand (7000) English words. All the words to be spelt at the prelims and the regionals will be taken from Vol. 1.
                    <br /><br />Vol. 2 contains 3000 words of French (1500), German(1000) and Spanish (500). All the words to be spelt at the Finals will be taken from both volume 1 (70%) and volume 2 (30% or less).

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="prototype_service_info">
                    <div class="symbols-pulse active">
                        <div class="pulse-1"></div>
                        <div class="pulse-2"></div>
                        <div class="pulse-3"></div>
                        <div class="pulse-4"></div>
                        <div class="pulse-x"></div>
                    </div>




                </div>
            </div>
        </div>

    </section>









    <section Class="section_gap">

        <div class="container">
            <div class="row">


                <div class="col-md-12">

                    <img src="<?= Inaki::path(); ?>img/bee.png" class="img-responsive" style="width:100%" />
                    <br />
                    <div class="col-md-12">
                        <br /><br /><br />
                        <h1 class="text-center wow fadeInUp" data-wow-delay="0.3s">The Preliminaries </h1>
                        <p class="text-center">
                            The preliminaries will start on April 4th, and end on April 9th, 2022, and it will take place online. To participate in the preliminaries, every contestant is required to login to https://metrobee.org.ng. The contestant is prompted to click PLAY to start the preliminaries. At the click of PLAY button, the contestant will hear the first word to be spelt. The contestant shall have 15 seconds to spell every word and shall take a total of 30 spellings. A contestant is required to spell a minimum of 20 words correctly to qualify for participation in the regionals. The contestant may stop spelling when s/he has spelt 20 words correctly, or may continue if desired. During the prelimiaries, a contestant is allowed three attempts to play to qualify after which the contestant is required to pay the sum of five hundred naira only to try again for two more attempts, if the contestant fails to qualify during the first three attempts.

                        </p>

                    </div>

                </div>
            </div>
            <!--</section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="">
                        <h2 class="f_size_30 f_600 t_color3 text-center l_height45 mb_90 wow fadeInUp" data-wow-delay="0.3s">The Preliminaries </h2>
                        <div class="row p_service_info ">
                            The preliminaries will begin on Monday, April 11th, 2022, and will take place online. To participate in the preliminaries, every contestant is required to login to https://metrobee.org.ng. The contestant is prompted to click PLAY to start the preliminaries. At the click of PLAY, the contestant will hear the first word to be spelt. The contestant shall have 15 seconds to spell every word and shall take a total of 30 spellings. A contestant is required to spell a minimum of 20 words correctly to qualify for participation in the regionals. The contestant may stop spelling when s/he has spelt 20 words correctly, or may continue if desired. During the prelimiaries online, a contestant will be allowed three attempts to play to qualify after which the contestant must pay the sum of five hundred naira only to try again for one more attempt, if the contestant fails to qualify during the first three attempts. 



                        </div>

                    </div>
                </div>
            </div>

        </section> -->



            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 rrr">
                            <br /><br />
                            <h2 class="text-center wow fadeInUp" data-wow-delay="0.3s">The Regionals </h2>
                            <p class="">Contestants who passed the preliminaries are grouped based on their geo-political regions of origin. The regionals will start on April 14th and end on Monday, April 18th, 2022, and will take place online.
                                During the regionals, a contestant is allowed two attempts to play to qualify, after which the contestant must pay the sum of five hundred naira to try again for two more attempts if the contestant fails to qualify during the first two attempts.
                            </p><br />
                            <br />
                            <div>
                                <h2 class="text-center wow fadeInUp" data-wow-delay="0.3s">Co-champions and Runners-up </h2>
                                If two or more spellers obtain the same score in a tiebreaker, they are declared co-champions. The speller whose total number of points stands in the next places from the Champion's is declared the 1st Runner-up, 2nd Runner-up, 3rd Runner-up and 4th Runner-up respectively. If the spellers in the next places from the Champion's score the same point, they are declared co-runners-up.


                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 rrr">
                            <br /><br />
                            <h2 class="text-center wow fadeInUp" data-wow-delay="0.3s">The Finals </h2>
                            <p class="">
                                The finals will take place in the University of Benin in Benin City on Saturday, May 7th, 2022. Contestants are required to arrive at the university on Friday, May 6th, and depart on Sunday, May 8th, 2022. There will be 54 finalists based on nine contestants from each of the six geopolitical zones of Nigeria.
                                <br />There will be no more than three rounds at the finals. In every round of the finals, a contestant qualifies for the next round if he/she spells a word correctly onstage at the microphone within 15 seconds. A contestant is eliminated if he/she gives a wrong spelling or if he/she fails to spell his/her given word within 15 seconds.

                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container">

                </div>
            </section>

            <br />
            <section>
                <div class="container">

                    <h2 class="text-center wow fadeInUp" data-wow-delay="0.3s"> Time Allowed </h2>
                    <p class="text-center wow fadeInUp" data-wow-delay="0.3s">
                        Every contestant is allowed 15 seconds to spell a word correctly. Once the Bee Master (the pronouncer) pronounces the word, after stating its meaning, spelling time starts counting down. The contestant may request the pronouncer to repeat the pronunciation of the word, repeat its meaning or give its origin. During this time, spelling time keeps counting down.
                        If the pronouncer obliges, time allowed continues to count down.
                    </p>
                </div>
            </section>
            <br />





            <section class="prototype_service_area_three bg_color">
                <div class="container">
                    <div class="prototype_service_info">
                        <div class="symbols-pulse active">
                            <div class="pulse-1"></div>
                            <div class="pulse-2"></div>
                            <div class="pulse-3"></div>
                            <div class="pulse-4"></div>
                            <div class="pulse-x"></div>
                        </div>

                        <div class="row p_service_info">
                            <div class="col-lg-4 col-sm-12">
                                <div class="p_service_item pr_70 wow fadeInLeft" data-wow-delay="0.3s">
                                    <h5 class="f_600 f_p t_color3">The Bee Master's List </h5>
                                    <p class="f_400">The Bee Master's List is a list of words taken from the spelling list of 10,000 words. All the words to be spelt at the finals are contained in this list. While the the word list of ten thousand words and Cambridge English Pronouncing Dictionary by Daniel Jones are the primary sources of the words in this list, Merriam-Webster Unabridged dictionary is the final authority and ultimate source of words through all stages of the contest. This Bee Master's list is issued to the spellers only at the end of bee. Only the Bee Master has prior knowledge of the words in the list before the time of the finals. </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="p_service_item pl_50 pr_20 wow fadeInLeft" data-wow-delay="0.5s">
                                    <h5 class="f_600 f_p t_color3">Role of the Bee Master </h5>
                                    <p class="f_400">The Bee Master is the pronouncer of words during the bee following the standard of Cambridge English Pronouncing Dictionary. The Bee Master also provides further information such as the meaning, usage or origin of the given word during the bee. He or she declares the winner of the bee as the Metro Bee Champion. </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="p_service_item pl_70 wow fadeInLeft" data-wow-delay="0.4s">
                                    <h5 class="f_600 f_p t_color3">The Panel of Judges </h5>
                                    <p class="f_400">The Panel of Judges is a panel of three members one of which is an expert in English or Linguistics. The judges monitor the event procedures to ensure the rules are not violated. They listen carefully to both the Bee Master and the spellers and determine whether a word has been correctly pronounced and spelt or not. In any case of objection by a contestant, they alone give a verdict on the matter. The judges' decisions are final. </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>




            <footer class="footer_area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="footer_top flex-column">
                                <div class="footer_logo">
                                    <a href="/#">
                                        <img src="<?= Inaki::path(); ?>img/beewhite.png" style="width: 100px" alt="">
                                    </a>
                                    <div class="d-lg-block d-none">
                                        <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                                            <div class="collapse navbar-collapse offset">
                                                <ul class="nav navbar-nav menu_nav mx-auto">
                                                    <li class="nav-item"><a class="nav-link text-white" href="<?= Inaki::path() ?>">Home</a></li>
                                                    <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
                                                    <li class="nav-item"><a class="nav-link text-white" href="#portfolio">Gallery</a></li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>

                                </div>

                                <div class="footer_social mt-lg-0 mt-4">
                                    <a href="https://www.facebook.com/campusmetrospellingbee"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/campusmetro"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/campusmetrospellingbee"><i class="ti-instagram"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row footer_bottom justify-content-center">
                        <a class="text-white col-sm-12" href="https://wa.me/+2349128028164">WhatsApp or Call Precious</a>
                        <a class="text-white col-sm-12" href="https://wa.me/+2349127759238">WhatsApp or Call Charles</a>
                        <p class="col-lg-8 col-sm-12 footer-text">

                            Copyright &copy;<script type="492978061ee2c0bcc890c28e-text/javascript">
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Metro Spelling Bee
                        </p>
                    </div>
                </div>
            </footer>



            <script src="<?= Inaki::path(); ?>js/jquery-3.2.1.min.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>js/popper.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>js/bootstrap.min.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>js/stellar.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>vendors/isotope/imagesloaded.pkgd.min.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>vendors/isotope/isotope-min.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>vendors/owl-carousel/owl.carousel.min.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>js/jquery.ajaxchimp.min.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>js/mail-script.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>
            <script src="<?= Inaki::path(); ?>js/theme.js" type="492978061ee2c0bcc890c28e-text/javascript"></script>

            <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="492978061ee2c0bcc890c28e-|49" defer=""></script>
</body>

</html>
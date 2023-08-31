<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="title" content="Meditex">
    <meta property="fb:app_id" content="312" />
    <meta property="og:type" content="Medical" />
    <meta property="og:url" content="http://steelthemes.com/demo/Elango/meditex-final" />
    <meta property="og:title" content="Meditex">
    <meta property="og:image" content="http://steelthemes.com/demo/Elango/meditex-final/assets/image/fbimg-210x210.jpg">
    <meta property="og:description" content="Meditex is html 5 Template">
    <meta name="full-screen" content="yes">
    <meta name="theme-color" content="#568701">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <title>KCL MED</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/assets/fonts/font/flaticon.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('landing/assets/image/fav/favicon-32x32.png') }}"
        sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('landing/assets/image/fav/favicon-16x16.png') }}"
        sizes="16x16">
</head>
<body class="sbar_color_one">
    <!--Start Preloader -->
    <div class="preloader"></div>
    <!--End Preloader -->
    <div class="page-wapper home-page-one">
        <header class="site-header" id="header-one">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img
                            src="{{ asset('landing/assets/image/default-logo.png') }}" class="img-fluid"
                            alt="img"></a>
                    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav navbar-mobile ml-auto mr-auto">
                            <li class="nav-item activee">
                                <a class="nav-link link_hd" href="#"> Accueil </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link_hd" href="#"> Départements </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link_hd" href="#"> Pages </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link_hd" href="#"> Blog </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link_hd" href="#"> CONNECTEZ-VOUS </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Main Header -->
        </header>
        <!------main-content------>
        <main class="main-content">
            <!------main-slider------>
            <section class="main-slider">
                <div class="main-slider-carousel main-slider-one owl-carousel owl-theme">
                    <div class="slide"
                        style="background-image:url({{ asset('landing/assets/image/banner/home-1-banner-1.jpg') }})">
                        <div class="container text-left">
                            <div class="content ">
                                <h1>GEREZ VOTRE<br />
                                    <span>CABINET MÉDICAL FACILEMENT</span>
                                </h1>
                                <div class="link-box">
                                    <a href="{{route('login')}}" class="theme-btn ">CONNECTEZ-VOUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide"
                        style="background-image:url({{ asset('landing/assets/image/banner/home-1-banner-2.jpg') }})">
                        <div class="container text-left">
                            <div class="content ">
                                <h1>KCLMED<br />
                                    <span>
                                        garder tout en ordre</span>
                                </h1>

                                <div class="link-box">
                                    <a href="#" class="theme-btn ">CONNECTEZ-VOUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide"
                        style="background-image:url({{ asset('landing/assets/image/banner/home-1-banner-3.jpg') }})">
                        <div class="container text-left">
                            <div class="content ">
                                <h1>KCLMED<br />
                                    <span>
                                        TOUTES TYPES DE CLINIQUES</span>
                                </h1>

                                <div class="link-box">
                                    <a href="#" class="theme-btn ">CONNECTEZ-VOUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!------main-slider------>
            <!-------appointment-section----->
            <section class="appointment_section hm-one">
                <div class="container">
                    <div class="appointment_inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="appont_sec_inner">
                                    <h6>Assistance Technique</h6>
                                    <a href="#">(000) 000-0000</a>
                                    <p>Nous vous fournirons une assistance continue.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="appont_sec_inner">
                                    <h6>HEURES DE TRAVAIL</h6>
                                    <ul>
                                        <li> Lundi...............<span>8:00 - 18:00</span></li>
                                        <li> Mardi.......................<span>8:00 - 18:00</span></li>
                                        <li> Mercredi.................<span>8:00 - 18:00</span></li>
                                        <li> Jeudi....................<span>8:00 - 18:00</span></li>
                                        <li> Vendredi....................<span>8:00 - 18:00</span></li>
                                        <li> Samedi....................<span>8:00 - 12:00</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="appont_sec_inner">
                                    <h6>CONTACTEZ-NOUS</h6>
                                    <form method="post" action="#">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Nom"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="email*"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="phone" placeholder="telephone"
                                                        required="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                <button class=" theme-btn" type="submit" name="submit-form">Envoyer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-------appointment-section----->
            <!-------appointment-section----->
            <section class="department_section hm-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading clearfix">
                                <h1>
                                    tout type de <span>cliniques</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="department_inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="department_icon_content">
                                    <a href="#"><span class="flaticon-brain dep_icon"></span></a>
                                    <a href="#">
                                        <h2>Psychiatrie</h2>
                                    </a>
                                    <p>Dans ses tentatives continues pour définir, comprendre et catégoriser les troubles...</p>
                                </div>
                                <div class="department_icon_content">
                                    <a href="#"><span class="flaticon-eye-drops dep_icon"></span></a>
                                    <a href="#">
                                        <h2>Ophtalmologie</h2>
                                    </a>
                                    <p >Notre mission est d'améliorer la qualité de vie grâce à l'amélioration de la vision...
                                    </p>
                                </div>
                                <div class="department_icon_content">
                                    <a href="#"><span class="flaticon-heart-2 dep_icon"></span></a>
                                    <a href="#">
                                        <h2>Cardiologie</h2>
                                    </a>
                                    <p>Nos domaines d'expertise font du département un centre national de référence en cardiologie...
                                    </p>
                                </div>
                                <div class="department_icon_content">
                                    <a href="#"><span class="flaticon-bacteria dep_icon"></span></a>
                                    <a href="#">
                                        <h2>Immunologie</h2>
                                    </a>
                                    <p>Le système immunitaire assure la défense d'un organisme contre les invasions...</p>
                                </div>
                                <div class="department_icon_content">
                                    <a href="#"><span class="flaticon-blood dep_icon"></span></a>
                                    <a href="#">
                                        <h2>Hématologie</h2>
                                    </a>
                                    <p>Dans le domaine médical, l'hématologie inclut le traitement du sang...</p>
                                </div>
                                <div class="department_icon_content">
                                    <a href="#"><span class="flaticon-stomach dep_icon"></span></a>
                                    <a href="#">
                                        <h2>Gastroentérologie</h2>
                                    </a>
                                    <p>Avec des experts reconnus au niveau national et international en gastroentérologie...</p>
                                </div>
                                <div class="department_icon_content">
                                    <a href="#"><span class="flaticon-joint dep_icon"></span></a>
                                    <a href="#">
                                        <h2>Orthopédie</h2>
                                    </a>
                                    <p>Nous avons une équipe diversifiée de cliniciens, d'administrateurs et de chercheurs...</p>
                                </div>
                                <div class="department_icon_content">
                                    <a href="#"><span class="flaticon-lung dep_icon"></span></a>
                                    <a href="#">
                                        <h2>Pneumologie</h2>
                                    </a>
                                    <p>Medicol est l'une des principales installations médicales en Amérique pour le diagnostic...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-------department-section----->
            <!---------welcomen-sec--------->
            <section class="welcome_section hme-one"
                style="background:url({{ asset('landing/assets/image/welcome-hme-1-bg.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="welcme_inner">
                                <div class="heading clearfix">
                                    <h1>BIENVENUE À <span>KCLMED </span></h1>
                                </div>
                                <h6 >Notre mission est de fournir un environnement de travail facile aux médecins pour gérer leur travail (rendez-vous, médicaments, patients, etc.)</h6>

                            </div>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                </div>
            </section>
            <!---------welcomen-sec--------->

            {{-- <!-------appointment-section----->
            <section class="testimonial_sec hm-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading clearfix">
                                <h1>WHAT <span>CLIENTS SAY</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme two-item">
                        <div class="testimonial_content">
                            <p>"When I began looking for the "best" center for Max I chose Medicol. You are the best.
                                Many thanks to you and your warm, concerned staff for providing a safe haven for Max and
                                giving me much needed respite. We will see how his nasty disease progresses and if
                                possible will send him again next summer… "</p>
                            <div class="client_details">
                                <img src="{{ asset('landing/assets/image/test-1.png') }}" class="img-fluid"
                                    alt="test" />
                                <div class="client_in">
                                    <h6>Reta Schmidt</h6>
                                    <span>Patient</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>"Three and a half months ago, my family lost someone that meant the world to us: my
                                father. We made many trips to Medicol with my father for comfort care. We did have a few
                                star employees that deserve recognition. We will never take that from him, but he adored
                                two employees and they were great to him."</p>
                            <div class="client_details">
                                <img src="{{ asset('landing/assets/image/test-2.png') }}" class="img-fluid"
                                    alt="test" />
                                <div class="client_in">
                                    <h6>Katlynn Pouros</h6>
                                    <span>Patient's family</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme client-carousel">
                        <div class="item"><img src="{{ asset('landing/assets/image/client/client-hm-1.jpg') }}"
                                class="img-fluid" alt="img" /></div>
                        <div class="item"><img src="{{ asset('landing/assets/image/client/client-hm-2.jpg') }}"
                                class="img-fluid" alt="img" /></div>
                        <div class="item"><img src="{{ asset('landing/assets/image/client/client-hm-3.jpg') }}"
                                class="img-fluid" alt="img" /></div>
                        <div class="item"><img src="{{ asset('landing/assets/image/client/client-hm-4.jpg') }}"
                                class="img-fluid" alt="img" /></div>
                        <div class="item"><img src="{{ asset('landing/assets/image/client/client-hm-5.jpg') }}"
                                class="img-fluid" alt="img" /></div>
                    </div>
                </div>
            </section> --}}

            <!---Accordion--->
            <div class="recent-tags hme-one" id="faqs">
                <div class="container">
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="heading">
                                            <h1>POPULAR<span> ARTICLES</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="articles-outer">
                                    <div class="articles-inner">
                                        <a href="#"><img
                                                src="{{ asset('landing/assets/image/articles/articles-3-3.jpg') }}"
                                                class="img-fluid" alt="articles"></a>
                                        <div class="articles-content">
                                            <p>Business . <a href="#"> July 10, 2018</a></p>
                                            <h2><a href="#">Thousands of Patients Referred to Substance Use
                                                    Treatment</a></h2>
                                        </div>
                                    </div>
                                    <div class="articles-inner">
                                        <a href="#"><img
                                                src="{{ asset('landing/assets/image/articles/articles-3-2.jpg') }}"
                                                class="img-fluid" alt="articles"></a>
                                        <div class="articles-content">
                                            <p>Lifestyle . <a href="#"> April 04, 2018</a></p>
                                            <h2><a href="#">MedStar Health Bel Air Cancer Services Aligns
                                                    Expertise</a></h2>
                                        </div>
                                    </div>
                                    <div class="articles-inner">
                                        <a href="#"> <img
                                                src="{{ asset('landing/assets/image/articles/articles-3-1.jpg') }}"
                                                class="img-fluid" alt="articles"></a>
                                        <div class="articles-content">
                                            <p>Experience . <a href="#"> February 20, 2018 </a></p>
                                            <h2><a href="#">Dr. Gabriel Del Corral Joins MedStar Plastic &
                                                    Reconstructive Surgery</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="heading">
                                            <h1>MEDICAL <span>FAQs</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" id="faq-accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    What causes tooth decay? <i
                                                        class="flaticon-plus main n-active"></i> <i
                                                        class="flaticon-minus main active-min"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne"
                                            data-parent="#faq-accordion">
                                            <div class="card-body">
                                                Decay is caused by bacteria that collect on teeth and feed on the
                                                carbohydrates in our diet. The bacteria produce acid that wears away at
                                                the enamel on our teeth. If decay is left untreated, it can cause pain,
                                                infection and even tooth loss. Protect your teeth against decay by
                                                brushing at least twice a day, flossing daily, visiting your dentist
                                                regularly.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed btn-block text-left"
                                                    type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    What is dry mouth and what can I do about it? <i
                                                        class="flaticon-plus main n-active "></i> <i
                                                        class="flaticon-minus main active-min"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                            data-parent="#faq-accordion">
                                            <div class="card-body">
                                                Decay is caused by bacteria that collect on teeth and feed on the
                                                carbohydrates in our diet. The bacteria produce acid that wears away at
                                                the enamel on our teeth. If decay is left untreated, it can cause pain,
                                                infection and even tooth loss. Protect your teeth against decay by
                                                brushing at least twice a day, flossing daily, visiting your dentist
                                                regularly.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed btn-block text-left"
                                                    type="button" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    How often should I change my toothbrush? <i
                                                        class="flaticon-plus main n-active"></i> <i
                                                        class="flaticon-minus main active-min"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree"
                                            data-parent="#faq-accordion">
                                            <div class="card-body">
                                                Decay is caused by bacteria that collect on teeth and feed on the
                                                carbohydrates in our diet. The bacteria produce acid that wears away at
                                                the enamel on our teeth. If decay is left untreated, it can cause pain,
                                                infection and even tooth loss. Protect your teeth against decay by
                                                brushing at least twice a day, flossing daily, visiting your dentist
                                                regularly.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed btn-block text-left"
                                                    type="button" data-toggle="collapse" data-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    How often should I see a dentist? <i
                                                        class="flaticon-plus main n-active"></i> <i
                                                        class="flaticon-minus main active-min"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour"
                                            data-parent="#faq-accordion">
                                            <div class="card-body">
                                                Decay is caused by bacteria that collect on teeth and feed on the
                                                carbohydrates in our diet. The bacteria produce acid that wears away at
                                                the enamel on our teeth. If decay is left untreated, it can cause pain,
                                                infection and even tooth loss. Protect your teeth against decay by
                                                brushing at least twice a day, flossing daily, visiting your dentist
                                                regularly.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- .// Accordion -->
            <!--Map Section-->
            <section class="map-section">
                <div class="container-fluid">
                    <!--Map Outer-->
                    <div class="map-outer">
                        <div class="google-map" id="contact-google-map" data-map-lat="44.231172"
                            data-map-lng="-76.485954" data-icon-path="assets/image/icons/map-marker.png"
                            data-map-title="Alabama, USA" data-map-zoom="12"
                            data-markers='{
                "marker-1": [42.231172, -84.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                "marker-3": [40.880550, -78.393705, "<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>"]
                }'>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Map Section-->
            <!-------contact-through----->
            <div class="contact_through">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="contact_through_inner">
                                <span class="flaticon-phone-1 icon"></span>
                                <p>Emergency Cases: <br />
                                    (052) 611-5711</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="contact_through_inner">
                                <span class="flaticon-placeholder icon"></span>
                                <p>E7088 Micaela Cliffs, <br />
                                    Thielshire, OK 95062</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="contact_through_inner">
                                <span class="flaticon-envelope icon"></span>
                                <p>Email Address<br />
                                    contact@meditex.com</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="contact_through_inner">
                                <span class="flaticon-calendar icon"></span>
                                <p>Book Online<br />
                                    Appointment Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------contact-through----->
            <!--------footer-------->
            <div class="footer home-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget first">
                                <h2>ABOUT US</h2>
                                <div class="footer-text">
                                    <p>As the only hospital in our growing county, things are buzzing as we expand our
                                        facilities and services. We are an intimate, 200 licensed bed hospital and the
                                        caregivers of neighbors we love.</p>
                                    <ul class="social-media">
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                                        <li><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a> </li>
                                        <li><a href="#" target="_blank"><i class="fa fa-wifi"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-widget two">
                                <h2>DEPARTMENTS</h2>
                                <div class="footer-text">
                                    <ul>
                                        <li><a href="#"> Psychiatry</a></li>
                                        <li><a href="#">Ophthalmology</a></li>
                                        <li><a href="#">Cardiology </a></li>
                                        <li><a href="#">Immunology </a></li>
                                        <li><a href="#">Hematology </a></li>
                                        <li><a href="#">Gastroenterology </a></li>
                                        <li><a href="#">Orthopedics </a></li>
                                        <li><a href="#">Pulmonary</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-widget two">
                                <h2>LINKS</h2>
                                <div class="footer-text">
                                    <ul>
                                        <li><a href="#"> About Us</a></li>
                                        <li><a href="#">Appointment</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                        <li><a href="#">Blog </a></li>
                                        <li><a href="#">Doctors</a></li>
                                        <li><a href="#">Gallery </a></li>
                                        <li><a href="#">Timetable </a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget third">
                                <h2>NEWSLETTER</h2>
                                <div class="footer-text">
                                    <p>Subscribe to our newsletter. We are not spammers.!</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="email" id="email"
                                                placeholder="Enter Your Email*"><br />
                                            <button class="theme-btn" type="submit">SUBSCRIBE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-last home-one">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="left">
                                <p>© 2023 <span>KCLMED.</span> All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------footer-------->
            <!-------backtotop-------->
            <a href="#" id="scroll" class="default-bg" style="display: none;"><span></span></a>
            <!-------backtotop-------->
            <!------main-content------>
        </main>
        <!------main-slider------>
    </div>
    <!---------mbile-navbar----->
    <div class="bsnav-mobile">
        <div class="bsnav-mobile-overlay"></div>
        <div class="navbar">
            <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close"></span></button>
        </div>
    </div>
    <!---------mbile-navbar----->
    <!-----------------------------------script-------------------------------------->
    <script src="{{ asset('landing/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/owl.js') }}"></script>
    <script src="{{ asset('landing/assets/js/bsnav.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery-ui.js') }}"></script>
    <!---smooth-scrool-->
    <script src="{{ asset('landing/assets/js/SmoothScroll.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/validator.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/contact.js') }}"></script>
    <script src="{{ asset('landing/assets/js/appear.js') }}"></script>
    <script src="{{ asset('landing/assets/js/script.js') }}"></script>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
    <script src="{{ asset('landing/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('landing/assets/js/map-script.js') }}"></script>
    <!--End Google Map APi-->
</body>
</html>

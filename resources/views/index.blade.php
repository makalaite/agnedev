<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="portfolio">
    <meta name="author" content="Agne Petrylaite">

    <title>Agne Petrylaite</title>
    <link rel="icon" href="img/logos/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional fonts for this theme -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet"
          href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">


    <!-- Custom styles for this theme -->
    <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/agency.css')}}" rel="stylesheet">

    <!-- Temporary navbar container fix until Bootstrap 4 is patched -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
    </style>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body id="page-top">

<div id="demo-content">
    {{--<header class="entry-header">--}}
    {{--<h1 class="entry-title">Welcome to my page</h1>--}}
    {{--</header>--}}

    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div id="content">


        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse" id="mainNav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Agne Petrylaite</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#about">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#work">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Agne Petrylaite</div>
                    <div class="intro-heading">Junior web developer</div>
                    <a href="#about" class="page-scroll btn btn-xl">Get to know me</a>
                </div>
            </div>
        </header>

        <!-- About -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">My story</h2>
                        <h3 class="section-subheading text-muted">Brief encounter.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="img/about/me.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2017</h4>
                                        <h4 class="subheading">New start in IT field</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Hi! My name is Agne but friends call me Agle. You will
                                            find my
                                            background is in social work
                                            with youth and children, but most likely, it was not enough for me. As an
                                            organised
                                            person, who enjoys dynamic
                                            tasks and structured planning, i could not find fulfillment. I chose to
                                            spend a
                                            year
                                            abroad and keep looking for
                                            a dream specialty.
                                            Yet a while ago I got fascinated and found myself in web development. I
                                            figured
                                            out
                                            that logical tasks and
                                            problem solving is way more thrilling, because it gives you broad
                                            understanding,
                                            persistence and teaches to find
                                            ways out.
                                            Now, as a present student, proud to introduce myself as a back end
                                            pre-junior
                                            web
                                            developer.
                                            Almost a year passed since i started studying php. Finally feeling
                                            ready to try my development skills
                                            and looking forward to start career in junior web development position.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="img/about/logocodo.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <h2 class="section-heading">Studies</h2>
                                    <div class="timeline-heading">
                                        <h4>Code Academy</h4>
                                        <h4 class="subheading">Php studies</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <ul class="text-muted">
                                            <li>Installing apache server with PHP, MySQL on Ubuntu.</li>
                                            <li> Projecting MySQL databases</li>
                                            <li> PHP projects development with Laravel</li>
                                            <li> Version control system and project deployment on the server</li>
                                            <li> Front-end: HTML, CSS, JavaScript, Angular</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="img/about/vu.png" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Vilnius University</h4>
                                        <h4 class="subheading">Social work</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <ul class="text-muted">
                                            <li>Social work research - analysis with statistical software SPSS
                                                statistics
                                                v19
                                            </li>
                                            <li>Methods and interactions of social work with individuals, groups</li>
                                            <li>Practical trainings of teamwork and informal education</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            {{--<li class="timeline-inverted">--}}
                            {{--<div class="timeline-image">--}}
                            {{--<h4>Be Part--}}
                            {{--<br>Of Our--}}
                            {{--<br>Story!</h4>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid -->
        <section id="portfolio" class="bg-faded">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Portfolio</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/atraskVrDB.PNG" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Discover VR</h4>
                            <p class="text-muted">MySQL Workbench database</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/personalVR.PNG" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Discover VR</h4>
                            <p class="text-muted">Php Laravel CMS project</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/angular.PNG" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Medical cms</h4>
                            <p class="text-muted">Using Angular TypeScript</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/flights.PNG" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Find Flights</h4>
                            <p class="text-muted">Php Laravel project for searching flights using Faker Factory
                                library</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/fast.PNG" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Fast typing game</h4>
                            <p class="text-muted">Keyboard game for learning JavaScript</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/calculator2.PNG" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Calculator</h4>
                            <p class="text-muted">Using JavaScript</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="https://github.com/IOT101CodeAcademyTeam/NoDragInLogisticsCargo">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                </div>
                            </div>
                            <img src="img/portfolio/hackathon.PNG" class="img-fluid" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>No drag in logistics</h4>
                            <p class="text-muted">Hackathon team repository for cargo tracking project, device was given
                                by Telia</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio Modals -->

        <!-- Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Discover virtual reality</h2>
                                    <p class="item-intro text-muted">Database for CMS project.</p>
                                    <img class="img-responsive" src="img/portfolio/atraskVrDB.PNG" alt="">
                                    <p>Adding foreign key relationships using EER diagram, one-to-many connections.
                                        Tables created for usage of web pages with categories and translations of them,
                                        language codes, users roles and permissions, clients orders and reservations for
                                        different game rooms.
                                    </p>

                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Discover virtual reality</h2>
                                    <p class="item-intro text-muted">CMS for virtual reality rooms website</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/personalVR.PNG" alt="">
                                    <p>First cms project using laravel. Learned how to make migrations from database.
                                        How
                                        to use seeds, describe controllers, request data from db or post data to db.
                                        Using one main blade
                                        for different services. Learning routing, middleware, validation, usage of
                                        helpers,
                                        making own artisan commands and describing db tables relationships.</p>
                                    <ul class="list-inline">
                                        <a href="https://github.com/makalaite/personal_vr.dev">Visit project</a>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Medical CMS</h2>
                                    <p class="item-intro text-muted">Current project with angular cli</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/angular.PNG" alt="">
                                    <p>
                                        Project idea is to create personal space for doctors to share, post and comment
                                        interests about work related subjects. Also check their work schedules and
                                        upcoming patients. Patients can also register and book appointments, read
                                        medical blog. The back end of the project is created with laravel.

                                    </p>
                                    <ul class="list-inline">
                                        <a href="https://github.com/makalaite/medicalFrontend">Visit project</a>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 4 -->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Flight finder</h2>
                                    <p class="item-intro text-muted">Php Laravel project for searching flights</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/flights.PNG" alt="">
                                    <p> Project idea was to make a search system which helps to find flights
                                        from different countries choosing various airlines. Displaying origin place,
                                        destination,
                                        departure and arrival. Data was created using Faker library. Fake data generates
                                        by using
                                        created artisan commands. Authentication used.
                                    </p>
                                    <ul class="list-inline">
                                        <a href="https://github.com/makalaite/flight_finder">Visit project</a>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 5 -->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Fast typing</h2>
                                    <p class="item-intro text-muted">practice with JavaScript</p>

                                    <p>
                                        Every view has logic for every state. One state is be SHOW other - HIDE.
                                        Checks the value of input for setting level. Adds one life every 20 scores.
                                        Randomly generates golden letters which gives +5 points. Counts your average
                                        speed.
                                    </p>
                                    <ul class="list-inline">
                                        <li><a href='{!! url('/game') !!}'>Try to play :)</a></li>
                                        <li>
                                            <a href="https://github.com/makalaite/game.dev/blob/master/public/js/gameLogic.js">Or
                                                visit project</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 6 -->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Calculator</h2>
                                    <p class="item-intro text-muted">Made with JavaScript</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/calc.PNG" alt="">
                                    <p>JavaScript practice using switch statement</p>
                                    <ul class="list-inline">
                                        <li><a href='{!! url('/calculator') !!}'>Try it</a></li>
                                        <li><a href="https://github.com/makalaite/calculator/blob/master/js/main.js">Or
                                                visit project</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- skills -->
            <section id="skills" class="bg-faded">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">Programming skills</h2>
                        </div>

                        <div class="skills">
                            <div class="container">

                                <div id="block1">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-php-plain">PHP</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-javascript-plain">JavaScript</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-typescript-plain">TypeScript</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-css3-plain">CSS</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-bootstrap-plain">Bootstrap</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-laravel-plain">Laravel</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-angularjs-plain">Angular</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-mysql-plain">MySQL</i>
                                    </div>

                                </div>

                                <div id="block2">

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-linux-plain">Linux</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-ubuntu-plain">Ubuntu</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-git-plain">Git</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-phpstorm-plain">PhpStorm</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-trello-plain">Trello</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-wordpress-plain">WordPress</i>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="devicon-illustrator-plain">Illustrator</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Work experience -->
            <section id="work">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">Work experience</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a href="http://www.kinopasaka.lt/lt" target="_blank">
                                <img class="img-responsive" src="img/logos/Pasaka.jpg" alt=""></a>
                            <h4 class="service-heading">Administrator</h4>
                            <p class="text-muted">Work with content management system to supervise kinopasaka.lt
                                website.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="https://career.hm.com/content/hmcareer/en_se/workingathm/what-can-you-do-here/logistics.html"
                               target="_blank">
                                <img class="img-responsive" src="img/logos/hnm2.png" alt=""></a>
                            <h4 class="service-heading">Administrator's assistant</h4>
                            <p class="text-muted">Managing of delivery control system.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="http://www.matulaiciosc.lt/" target="_blank">
                                <img class="img-responsive" src="img/logos/matulaitis2.png" alt=""></a>
                            <h4 class="service-heading">Social worker</h4>
                            <p class="text-muted">Document processing for non governmental projects and work with youth
                                groups.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="http://www.coffeehill.lt/" target="_blank">
                                <img class="img-responsive" src="img/logos/coffe.png" alt=""></a>
                            <h4 class="service-heading">Chief barista</h4>
                            <p class="text-muted">Maintenance of two cafeterias.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="http://www.aukstynkojom.lt/" target="_blank">
                                <img class="img-responsive" src="img/logos/logo.png" alt=""></a>
                            <h4 class="service-heading">Preschool teacher</h4>
                            <p class="text-muted">Development of monthly projects in kindergarten by promoting
                                children's
                                social
                                skills.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact">
                <div class="banner">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-6 ">
                                <h2 style="color: #fed136">Let's get in touch:</h2>
                            </div>
                            <div class="col-lg-6">

                                <ul class="list-inline banner-social-buttons">
                                    <li>
                                        <a href="https://www.linkedin.com/in/agne-petrylaite-33614510b/" target="_blank"
                                           class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span
                                                    class="network-name">LinkedIn</span></a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/makalaite" target="_blank"
                                           class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span
                                                    class="network-name">GitHub</span></a>
                                    </li>
                                    <li>
                                        <a href="mailto:agnepetrylaite@gmail.com" target="_blank"
                                           class="btn btn-default btn-lg"><i
                                                    class="fa fa-envelope fa-fw"></i> <span
                                                    class="network-name">agnepetrylaite@gmail.com</span></a>
                                    </li>
                                    <li>
                                        <a href="cv/AgnePetrylaiteCV.pdf"
                                           target="_blank" class="btn btn-default btn-lg"><i
                                                    class="fa fa-file-pdf-o fa-fw"></i> <span
                                                    class="network-name">Download CV</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="copyright">Copyright &copy; Agne 2017</span>
                        </div>


                    </div>
                </div>
            </footer>


    </div>
</div>





<!-- Bootstrap core JavaScript -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/tether/tether.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/contact_me.js')}}"></script>

<!-- Custom JavaScript for this theme -->
<script src="{{asset('js/agency.min.js')}}"></script>
<script src="{{asset('js/agency.js')}}"></script>

<script src="{{asset('js/scroll.js')}}"></script>

</body>

</html>

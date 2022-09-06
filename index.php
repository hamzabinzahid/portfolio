<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hamza Zahid - Full Stack Web Developer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="img/favicon.ico" rel="shortcut icon">

    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/testimonials.css" rel="stylesheet">
    <link href="css/counter.css" rel="stylesheet">

    <!-- Font Awesome Icons CDN -->
    <script src="https://kit.fontawesome.com/4e5e55d998.js" crossorigin="anonymous"></script>

    <script>
    function _(id) {
        return document.getElementById(id);
    }

    function submitForm() {
        _("mybtn").disabled = true;
        _("status").innerHTML = 'please wait ...';
        var formdata = new FormData();
        formdata.append("n", _("n").value);
        formdata.append("e", _("e").value);
        formdata.append("m", _("m").value);
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "message.php");
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText == "success") {
                    _("my_form").innerHTML = '<h3>Thank You ' + _("n").value +
                        '<br> I have received your text, I will respond you back soon</h3><br><button id="mybtn" class="submit-btn"><a href="/" class="text-white" style="color:white;">Acknowledged</a></button>';
                } else {
                    _("status").innerHTML = ajax.responseText;
                    _("mybtn").disabled = false;
                }
            }
        }
        ajax.send(formdata);
    }
    </script>

    <style>
    @media (max-width: 768px) {
        #testimonials .profile .pic {
            margin: 30px auto;
        }
    }

    @media (max-width:920px) and (min-width:800px) {
        #testimonials .profile .pic {
            margin: 30px auto;
            margin-bottom: 20px;
        }


        #about .about-title {
            margin-top: 32px;
        }
    }

    @media (max-width:920px) and (min-width:768px) {
        .countera {
            width: 306px;
            font-size: 20px;
            margin-left: 54px;
        }

        .counterb {
            width: 306px;
            margin-left: 396px;
            margin-top: -234px;
            font-size: 20px;
        }

        .counterc {
            width: 306px;
            margin-left: 48px;
            margin-top: 31px;
            font-size: 20px;
        }

        .counterd {
            width: 306px;
            margin-left: 396px;
            /* margin-top: -230px; */
            margin-top: -239px;
            font-size: 20px;
        }

        .hardwork {
            margin-top: 10px;
        }

        .done {
            font-size: 20px;
        }

        .countermain {
            overflow-y: hidden;
        }
    }

    @media (max-width:1190px) and (min-width:1000px) {
        .quote2 {
            width: 72%;
        }

        .quote1 {
            width: 71%;
            margin-left: 38px;
        }

        .name1 {
            margin-left: 41px;
        }

        .test2 {
            overflow-x: hidden;
        }

        .test2 .pic {
            margin-top: 10px;
        }
    }
    </style>

</head>

<body>
    <div id="preloader"></div>

    <!--==========================
  Hero Section
  ============================-->
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">

                <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->

                <div class="hero-logo">
                    <img class="" src="img/logo.png" alt="Imperial">
                </div>

                <h1>Welcome to My World</h1>
                <h2>I create <span class="rotating">beautiful graphics, functional websites, responsive web
                        applications</span>
                </h2>
                <div class="actions">
                    <a href="#about" class="btn-get-started">Get Strated</a>
                    <a href="#services" class="btn-services">My Services</a>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Header Section
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="#hero"><img src="img/logo.png" alt="" title="" class="logo" /></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="#hero">Header 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#hero">Home</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#team">Statistics</a></li>

                    <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->

                    <li><a href="#contact">Contact Me</a></li>

                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
  About Section
  ============================-->
    <section id="about">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">About Me</h3>
                    <div class="section-title-divider"></div>
                    <!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque laudantium, totam rem aperiam</p> -->
                </div>
            </div>
        </div>
        <div class="container about-container wow fadeInUp">
            <div class="row">

                <div class="col-lg-6 about-img">
                    <img src="img/myself.jpg" alt="About Me Image">
                </div>

                <div class="col-md-6 about-content">
                    <h2 class="about-title">Providing you great services and ideas</h2>
                    <p class="about-text">
                        Hey There! I warmly welcome to my portfolio. I, Hamza Zahid am a Full Stack Website developer
                        with my
                        expertise in front and back end web technologies that also includes creating absolutely
                        fantastic graphics
                        for your
                        reputed business.
                    </p>
                    <p class="about-text">
                        I don't just build you websites, I build you a brand experience that clients will recognize each
                        time they
                        interact with your brand.
                        With my specialization in Web Design & development, I beleive that design and business
                        objectives go hand in
                        hand.You need a design that represents your company's personality, yet gives you an edge from
                        the
                        competition.
                    </p>
                    <p class="about-text">
                        Working with you,I find the heart and soul of your brand, and the outcome then make you,your
                        business and
                        your site stand out from the crowd.. <br>
                        <b><i>Let's shake things up together</i></b>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Services Section
  ============================-->
    <section id="services">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">My Services</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Making your business reach a whole next level</p>
                </div>
            </div>

            <div class="row jusstify-content-center">

                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-desktop"></i></div>
                    <h4 class="service-title"><a href="">Front end devlopment</a></h4>
                    <p class="service-description">I create responsive front end with technologies Bootstrap,React &
                        Angluar JS
                    </p>
                </div>

                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-link"></i></div>
                    <h4 class="service-title"><a href="">Back End Development</a></h4>
                    <p class="service-description">I integrate your websites with backend using PHP,Laravel & AJAX</p>
                </div>

                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                    <h4 class="service-title"><a href="">SEO</a></h4>
                    <p class="service-description">I do Search Engine Optimization of your website resulting in ranking
                        at GOOGLE
                    </p>
                </div>

                <div class="col-md-4 col-span-2 service-item">
                    <div class="service-icon"><i class="fa fa-magic"></i></div>
                    <h4 class="service-title"><a href="">Graphics Design</a></h4>
                    <p class="service-description">Fantastic Graphics that suit your business i.e.
                        LOGO,POSTERS,ADVERTISEMENT......</p>
                </div>

                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-wordpress"></i></div>
                    <h4 class="service-title"><a href="">Wordpress Development</a></h4>
                    <p class="service-description">You select a theme & I make you a masterpiece out of that</p>
                </div>

                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fab fa-shopify"></i></div>
                    <h4 class="service-title"><a href="">Shopify Development </a></h4>
                    <p class="service-description">I design and develop beautiful ecommerce solutions for business
                        owners at
                        shopify around the world.</p>
                </div>

            </div>
        </div>
    </section>

    <!--==========================
  Subscrbe Section
  ============================-->
    <section id="subscribe">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="subscribe-title">Special Discount For You</h3>
                    <p class="subscribe-text">You can direclty place your order at my <b>FIVERR</b> profile
                        to avail a special discount</p>
                </div>
                <div class="col-md-4 subscribe-btn-container">
                    <a class="subscribe-btn" href="https://www.fiverr.com/hamza_binzahid?up_rollout=true"
                        target="_blank">Order
                        Now</a>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Porfolio Section
  ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Portfolio</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Here are a few of my best done projects till date</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);"
                        href="https://hypechicks.co/" target="_blank">
                        <div class="details">
                            <h4>Hype Chicks</h4>
                            <span>NFT Website</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);"
                        href="https://yogf-99f5f.web.app/">
                        <div class="details">
                            <h4>YOG FOUNDATION</h4>
                            <span>YOGA Service Provider Website</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
                        <div class="details">
                            <h4>MemoryGram</h4>
                            <span>Your Personal Virtual Book</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);"
                        href="http://bitcoin-bros.com/">
                        <div class="details">
                            <h4>Bitcon Bros</h4>
                            <span>The Cryptocurrency Hub</span>
                        </div>
                    </a>
                </div>

                <!-- <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
            <div class="details">
              <h4>Portfolio 5</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
            <div class="details">
              <h4>Portfolio 6</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
            <div class="details">
              <h4>Portfolio 7</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Portfolio 8</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div> -->

            </div>
        </div>
    </section>

    <!--==========================
  Testimonials Section
  ============================-->
    <section id="testimonials">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Testimonials</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">What my clients think about me</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="profile">
                        <div class="pic"><img src="img/client-1.jpg" alt=""></div>
                        <h4 class="name1">Greg Colby</h4>
                        <span class="name1">Hypechikcs - CEO</span>
                    </div>
                </div>
                <div class="col-md-9 quote1">
                    <div class="quote">
                        <b><img src="img/quote_sign_left.png" alt=""></b> Working with Hamza was much better than
                        expected and we
                        had
                        really high expectations. He is an incredibly talented developer but what really makes him stand
                        out is his
                        work ethic and steady approach. Time after time, and without us asking, he added enhancements
                        and
                        improvements that resulted in a better end product for us and our clients. <small><img
                                src="img/quote_sign_right.png" alt=""></small>
                    </div>
                </div>
            </div>

            <div class="row test2">
                <div class="col-md-9 quote2">
                    <div class="quote">
                        <b><img src="img/quote_sign_left.png" alt=""></b> Hamza's talent and experience proved immensely
                        valuable
                        for
                        our latest web project. He has been brilliantly involved since the very beginning, providing
                        advice and
                        guidance even before
                        we signed the proposal. The work we received from him was top-notch, thoroughly documented, and
                        full of
                        touches that show his commitment to quality. I can't recommend him highly enough. <small><img
                                src="img/quote_sign_right.png" alt=""></small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile">
                        <div class="pic"><img src="img/client-2.jpg" alt=""></div>
                        <h4>Sara Burnett</h4>
                        <span>Moneygram Ltd</span>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!--==========================
  Team Section
  ============================-->
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Career Statistics</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">What do the career stats say</p>
                </div>
            </div>

            <!-- <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div> -->

            <div class="row text-center countermain">

                <div class="col-md-3 counter1 countera">
                    <div class="item wow fadeInUpBig animated animated" data-number="17" style="visibility: visible;">
                        <i class="fa fa-briefcase fa-5x"></i>
                        <p id="number1" class="number" style="margin-bottom: 0px;">17</p>
                        <span class="line"></span>
                        <p class="done">Projects done</p>
                    </div>
                </div>

                <div class="col-md-3 counter1 counterb">
                    <div class="  item wow fadeInUpBig animated animated" data-number="23" style="visibility: visible;">
                        <i class="fa fa-smile-o fa-5x"></i>
                        <p id="number2" class="number" style="margin-bottom: 0px;">23</p>
                        <span class="line"></span>
                        <p class=" done">Happy clients</p>
                    </div>
                </div>

                <div class="col-md-3 counter1 counterc">
                    <div class="item wow fadeInUpBig animated animated" data-number="12,000"
                        style="visibility: visible;">
                        <i class="fas fa-code fa-5x"></i>
                        <p id="number3" class="number" style="margin-bottom: 0px;">12,000+</p>
                        <span class="line"></span>
                        <p class="done hardwork">Lines of code</p>
                    </div>
                </div>

                <div class="col-md-3 counter1 counterd">
                    <div class="item wow fadeInUpBig animated animated" data-number="730" style="visibility: visible;">
                        <i class="fa fa-hourglass fa-5x"></i>
                        <p id="number4" class="number" style="margin-bottom: 0px;">730</p>
                        <span class="line"></span>
                        <p class="done">Days of hardwork</p>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
        <div class="col-md-12">
          <div id="projectFacts" class="sectionClass">
            <div class="fullWidth eight columns">
              <div class="projectFactsWrap ">

                <div class="item wow fadeInUpBig animated animated" data-number="17" style="visibility: visible;">
                  <i class="fa fa-briefcase"></i>
                  <p id="number1" class="number">17</p>
                  <span></span>
                  <p>Projects done</p>
                </div>

                <div class="  item wow fadeInUpBig animated animated" data-number="23" style="visibility: visible;">
                  <i class="fa fa-smile-o"></i>
                  <p id="number2" class="number">23</p>
                  <span></span>
                  <p>Happy clients</p>
                </div>

                <div class="item wow fadeInUpBig animated animated" data-number="10,000" style="visibility: visible;">
                  <i class="fas fa-code"></i>
                  <p id="number3" class="number">10,000+</p>
                  <span></span>
                  <p>Lines of code</p>
                </div>

                <div class="item wow fadeInUpBig animated animated" data-number="730" style="visibility: visible;">
                  <i class="fa fa-hourglass"></i>
                  <p id="number4" class="number">730</p>
                  <span></span>
                  <p>Days of hardwork</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div> -->


        </div>
    </section>

    <!--==========================
  Contact Section
  ============================-->
    <!-- <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Me</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Connect with me up and send your message,I'll be replying back shortly</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Lahore, Pakistan</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>developer.hamzazahid@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+92 309 459 0606</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <form action="message.php" method="post" role="form" class="contactForm">

              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section> -->

    <section id="contact">
        <div class="contact-box">
            <div class="contact-links">
                <h2>CONTACT</h2>
                <div class="links">
                    <div class="link">
                        <a href="https://www.linkedin.com/in/hamzabinzahid/" target="_blank" title="LinkedIn"><img
                                src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="LinkedIn"></a>
                    </div>
                    <div class="link">
                        <a href="https://github.com/hamzabinzahid" target="_blank" title="GitHub"><img
                                src="https://i.postimg.cc/YCV2QBJg/github.png" alt="Github"></a>
                    </div>
                    <!-- <div class="link">
            <a href="https://github.com/hamzabinzahid" target="_blank" title=""><img src="https://i.postimg.cc/W4Znvrry/instagram.png"
                alt="codepen"></a>
          </div> -->
                    <div class="link">
                        <a href="mailto:developer.hamzazahid@gmail.com" target="_blank" title="Email"><img
                                src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <!-- <form method="POST" action="index.php" id="contact-form">
                    <div class="form-item">
                        <input type="text" name="name" required>
                        <label>Name:</label>
                    </div>

                    <div class="form-item">
                        <input type="text" name="email" required>
                        <label>Email:</label>
                    </div>

                    <div class="form-item">
                        <textarea class="" name="message" required></textarea>
                        <label>Message:</label>
                    </div>

                    <button type="submit" class="submit-btn">Send</button>
                </form> -->

                <form id="my_form" onsubmit="submitForm(); return false;">
                    <div class="form-item">
                        <input type="text" name="name" id="n" required>
                        <label>Name:</label>
                    </div>

                    <div class="form-item">
                        <input type="text" name="email" id="e" required>
                        <label>Email:</label>
                    </div>

                    <div class="form-item">
                        <textarea class="" name="message" id="m" required></textarea>
                        <label>Message:</label>
                    </div>

                    <span id="status"></span>
                    <button type="submit" id="mybtn" class="submit-btn">Send</button>
                </form>

            </div>
        </div>
    </section>

    <!--==========================
  Footer
============================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        Copyright &copy; 2022 <strong>Hamza Zahid</strong>. All Rights Reserved
                    </div>
                    <!-- <div class="credits"> -->
                    <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
                    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/easing/easing.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>
    <script src="js/testimonial.js"></script>
    <script src="js/counter.js"></script>

    <script src="contactform/contactform.js"></script>

</body>

</html>
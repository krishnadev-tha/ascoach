
<?php
if(isset($_POST['submit11'])){
  $to = "iamkrishnadev1999@gmail.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $subject2 = "Copy of your form submission";
  $message = "Name : " . $first_name . "\n\n" ."Last Name: ". $last_name."\n\n" ."Email Address: ". $email . "\n\n" ."Message: ". $_POST['message'];
  $message2 = "Name : " . $first_name . "\n\n" ."Last Name: ". $last_name."\n\n" ."Email Address: ". $email . "\n\n" ."Message: ". $_POST['message'];
  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
  // You can also use header('Location: thank_you.php'); to redirect to another page.
  }


$mysqlserverhost = "localhost";
$database_name = "epiz_26102432_ascoach";
$username_mysql = "epiz_26102432";
$password_mysql = "UGpxVVpHxnWm4Vl";

// ------------------------- Do not modify code nder this field -------------------------- //


function sanitize($variable){
  $clean_variable = strip_tags($variable);
  $clean_variable = htmlentities($clean_variable, ENT_QUOTES, 'UTF-8');
  return $clean_variable;
}

function connect_to_mysqli($mysqlserverhost, $username_mysql, $password_mysql, $database_name){
  $connect = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
  if (!$connect) {
      die("Connection failed mysql: " . mysqli_connect_error());
  }
  return $connect;  
}

if(isset($_POST["processform"])){
  $connection = connect_to_mysqli($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
  $firstfield = mysqli_real_escape_string($connection, sanitize($_POST["firstfield"]));
 
  $sql = "INSERT INTO table_form (email_id) VALUES ('$firstfield')";
  if (mysqli_query($connection, $sql)) {} 
    else {}
  mysqli_close($connection);
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ASCoach &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="h2 mb-0">AS<span>Coach</span></a></h1>
            <!-- <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">AS<span>Coach</span> <span class="text-primary">.</span> </a></h1> -->
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#training-section" class="nav-link">Our Training</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#tas-section" class="nav-link">TAS Support</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row">

          <div class="col-md-6 mt-lg-5 ml-auto text-left align-self-end align-self-md-center">
            <h1>Professional Life Coaching</h1>
            <p class="mb-4"><a href="#contact-section" class="btn btn-primary mr-2 mb-2">Get Started</a></p>
          </div>
            
        </div>
      </div>
    </div>  

    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
            <h2 class="text-white">Special Offers</h2>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="mr-3"><span class="flaticon-bill display-3 text-special"></span></div>
            <div>
              <h3 class="text-white h4">50% less of every purchase</h3>
              <p class="text-special">A step-by-step guide to break into investment</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="mr-3"><span class="flaticon-customer-service display-3 text-special"></span></div>
            <div>
              <h3 class="text-white h4">More programs than ever before</h3>
              <p class="text-special">The Complete main Investment divisions</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-lg-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-6 order-md-1" data-aos="fade">
            <h2 class="section-title mb-3">Welcome to ASCoach</h2>
            <p class="lead">I am a Financing Coach. While I do some loan brokering, my specialty is in matching my clients with a financing resource.</p>
            <p> making a personal recommendation for them to that resource, and then coaching my clients on how to make a presentation which will effectively sell their request.</p>
            <p class="mb-4">The resulting partnership is a successful—and usually long-term—connection between my clients’ particular financing needs and the interests of the financing resource</p>
            <p><img src="images/signature.jpg" alt="Image" class="img-fluid w-25"></p>
          </div>
          
        </div>
      </div>
    </section>
  


    <div class="site-section bg-light" id="training-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our Training</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled training">
              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How to deal your business?</a></h2>
                  <span class="text-muted d-block mb-4">Finance</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p>
                </div>
              </li>

              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How to stay progressive in knowledge</a></h2>
                  <span class="text-muted d-block mb-4">Social Life</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p>
                </div>
              </li>

              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How To Invest In Investing Company</a></h2>
                  <span class="text-muted d-block mb-4">Family Issue</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p>
                </div>
              </li>

            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled training">
              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How to deal your business?</a></h2>
                  <span class="text-muted d-block mb-4">Family Issue</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p>
                </div>
              </li>

              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How to stay progressive in knowledge</a></h2>
                  <span class="text-muted d-block mb-4">Finance</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p>
                </div>
              </li>

              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How To Invest In Investing Company</a></h2>
                  <span class="text-muted d-block mb-4">Job Issue</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>

    
    
    
    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 text-left">
            <h2 class="section-title mb-3">Meet Team</h2>
            <p class="lead">We are a team because we respect, trust & care for each other. Our greatest strength is our team spirit & that will remain because a core of us come through the leagues together.</p>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <div class="img-card2">  <img src="images/Aaksh Singh.jpg" alt="Aaksh Singh" class="img-fluid"></div>
              
              </figure>
              <div class="p-3">
                <h3>Aakash Singh</h3>
                <span class="position">Expert in Motivational</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <div class="img-card2">
                <img src="images/person_6.jpg" alt="Image" class="img-fluid">
               </div>
              </figure>
              <div class="p-3">
                <h3>Dave Simpson</h3>
                <span class="position">Expert in Financing Issue</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <div class="img-card2">
                <img src="images/person_7.jpg" alt="Image" class="img-fluid">
               </div>
              </figure>
              <div class="p-3">
                <h3>Ben Thompson</h3>
                <span class="position">Expert in Social Life</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <div class="img-card2">
                <img src="images/person_8.jpg" alt="Image" class="img-fluid">
               </div>
              </figure>
              <div class="p-3">
                <h3>Kyla Stewart</h3>
                <span class="position">Expert in Social Life</span>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>


    <section class="site-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-6" stylr="position: relative;">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev">Prev</a> / <a href="#" class="custom-next">Next</a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto">
            
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <h2 class="section-title mb-3">Social Life</h2>
                <p class="lead">What is good social life?</p>
                <p>Having strong relationships and love in your life Being able to manage your money Being in good health, with enough energy to get things done each day (physical well-being) Feeling engaged with where you live.</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              <div>
                <h2 class="section-title mb-3">Money &amp; Finance</h2>
                <p class="lead">Importance of Money & Finance</p>
                <p>Finance is the soul and blood of any business and no firm can survive without finance. It concerns itself with the management of monetary affairs of the firm—how money can be raised on the best terms available and how the procured money can be devoted to the best uses.</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              <div>
                <h2 class="section-title mb-3">Motivation</h2>
                <p class="lead">Motivation is always internal to the person.</p>
                <p>Human behaviour is caused by the various needs. A worker works in a factory because he needs money. Similarly, a thirsty man feels the need of water to conquer his thirst. The feeling of needs is a continuous process and the satisfaction of one need leads to the creation of a new one.</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-career"></span></div>
              <div>
                <h3>Business Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-bill"></span></div>
              <div>
                <h3>TAX  CONSULTING</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-customer-service"></span></div>
              <div>
                <h3>IT SERVICE</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-plan"></span></div>
              <div>
                <h3>Insurance Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-growth"></span></div>
              <div>
                <h3>Financial Investment</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"> <img 
                src="images/rupee.svg"
                alt="MORTGAGE LOAN"
                height="42"
               style="margin: 11px 0 -2% !important;" />
              </div>
              <div>
                <h3>MORTGAGE LOAN</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
<!-- 
    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section> -->

    
    
    

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our Blog Posts</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="blog-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="blog-single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="blog-single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="blog-single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="blog-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="blog-single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </section>



    <section class="site-section bg-light" id="tas-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our TAS Support</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-6 mb-6 mb-lg-6">
            <img src="images/tas4.png" alt="Image" class="img-fluid">
          </div>

          <div class="col-md-6 col-lg-6 mb-6 mb-lg-6">
            <img src="images/TAS2.png" alt="Image" class="img-fluid">
            <!-- <div class="h-entry">
              <a href="blog-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="blog-single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>  -->
          </div>

        </div>
      </div>
    </section>

   


    <section class="site-section " id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Reach to us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Shop 01, Kala Nikaten Society, Shamshan Road, Bhayandar (E)</p>
            <!-- <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p> -->
          </div>
          <div class="col-md-4">
            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+91 836 961 3417</a></p>
          </div>
          <div class="col-md-4">
            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">singhaakash498@gmail.com</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            <form action="" method="post" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" name="submit11" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>

            

            
          </div>
          
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p class="mb-5">Aakash Singh’s objective is to tap into the unrealized potential and help you achieve your personal and business goals with ease and at a pace than you may have never imagined.</p>

                <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                <form action="#" method="post" class="footer-subscribe">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-white text-black" type="button" id="button-addon2">Send</button>
                    </div>
                  </div>
                </form>

              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-5">
              <img src="images/img_1.jpg" alt="" class="img-fluid mb-4">
              <h2 class="footer-heading mb-4">Some Paragraph</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, laudantium nisi quo, sit neque quisquam.</p>
            </div>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>

<?php 
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>AGRICULTURE</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo-transparent11-png.png" alt="#" style="height:70px"/></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="products.html">Products </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="blog.html">Blog</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="services.php">Service</a>
                              </li>

                              <?php if(!isset($_SESSION['user_id'])) { ?>
                              <li class=" d_none get_btn">
                                 <a href="login.php">LOGIN</a>  
                                 <?php } ?>

                             <?php if(isset($_SESSION['user_id'])) { ?>
                              <li class=" d_none get_btn">
                                    <a href="logout.php">Logout</a>                       
                               </li>
                              <?php } ?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="text-bg">
                     <h1>AGRICULTURE</h1>
                     <p>Agriculture is the backbone of our existense,providing foor,livelihood,and sustainability to the world.Embracing modern techniques while preserving nature's balance is key to a thriving future.let's cultivate innovation,nature the land,and harvest prosperity together."</p>
                     <br>
                     <a href="#">Discover</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="box_text">
                     <figure><img src="images/box3.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <figure><img src="images/box1.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <figure><img src="images/box2.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- three_box -->
      <!-- hottest -->
      <div  class="hottest">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>"Agricultural Destinations for
                         <br> Farmers and Enthusiasts"</h2>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="hottest_box">
                     <p>"Agriculture plays a crucial role in the global economy, providing food, raw materials, and employment. Explore the most innovative and sustainable agricultural destinations worldwide, where modern techniques and traditional farming merge to create a prosperous future.""Agriculture plays a crucial role in the global economy, providing food, raw materials, and employment. Explore the most innovative and sustainable agricultural destinations worldwide, where modern techniques and traditional farming merge to create a prosperous future.""Agriculture plays a crucial role in the global economy, providing food, raw materials, and employment. Explore the most innovative and sustainable agricultural destinations worldwide, where modern techniques and traditional farming merge to create a prosperous future."


 </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      <!-- end hottest -->
      <!-- choose  section -->
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="titlepage">
                     <h2>Why Choose Us? </h2>
                     <p>there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined  </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="padding_with">
                     <div class="row">
                        <div class="col-md-6 padding_bottom">
                           <div class="choose_box">
                              <i><img src="images/icon1.png" alt="#"/></i>
                              <div class="choose_text">
                                 <h3>Excellent Service</h3>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 padding_bottom">
                           <div class="choose_box">
                              <i><img src="images/icon2.png" alt="#"/></i>
                              <div class="choose_text">
                                 <h3>Clean Working</h3>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 padding_bottom2">
                           <div class="choose_box">
                              <i><img src="images/icon3.png" alt="#"/></i>
                              <div class="choose_text">
                                 <h3>Quality And Reliability</h3>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="choose_box">
                              <i><img src="images/icon4.png" alt="#"/></i>
                              <div class="choose_text">
                                 <h3>Expert Farmer</h3>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                  <div class="choose_img">
                     <figure><img src="images/food.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <a class="read_more" href="read-more.html">Read More</a>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end choose  section -->
      <!-- product  section -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>Our Product</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_left0">
                  <div class="product_box">
                     <figure><img src="images/product1.jpg" alt="#"/></figure>
                     <h3 class="black">vegetable</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="product_box">
                     <figure><img src="images/product2.jpg" alt="#"/></figure>
                     <h3 >weat</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 padding_right0">
                  <div class="product_box">
                     <figure><img src="images/product3.jpg" alt="#"/></figure>
                     <h3>fruit</h3>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 padding_left0">
                  <div class="product_box">
                     <figure><img src="images/product4.jpg" alt="#"/></figure>
                     <h3>sunflowere</h3>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 padding_right0">
                  <div class="product_box">
                     <figure><img src="images/rice1.JPG" alt="#"/></figure>
                     <h3>Livestock</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end product  section -->
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>People Says About Farm</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide about_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/tes1.png" alt="#"/></i>
                                          <h4>Ramesh Patel</h4>
                                          <p>"Farming has been my passion for years, and this platform has given me access to the latest techniques and resources. The expert advice on organic farming helped me improve my yield without harming the environment. Highly recommended!"</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/tes1.png" alt="#"/></i>
                                          <h4>Jayesh Prajapati</h4>
                                          <p>"I was struggling with pest control on my farm until I came across this website. The practical solutions and modern methods shared here have made a huge difference in my crops. Now, I feel more confident in sustainable farming!"
</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/tes1.png" alt="#"/></i>
                                          <h4>Mohan Singh</h4>
                                          <p>"Agriculture is evolving, and staying updated is crucial. This platform provides excellent insights into modern irrigation and agribusiness opportunities. Thanks to their guidance, I have expanded my farm into a profitable venture!"
</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      </div>
      <!--  footer -->
          <!-- footer -->
     <footer id="contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="titlepage">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form id="request" class="main_form" action="contact.php" method="POST">
                            <div class="row">
                                <div class="col-md-3">
                                    <input class="contactus" placeholder="Full Name" type="type" name="Name">
                                </div>
                                <div class="col-md-3">
                                  <input class="contactus" placeholder="Email" type="type" name="Email">
                                </div>
                                <div class="col-md-3">
                                  <input class="contactus" placeholder="Phone Number" type="type" name="Phone">
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                    <ul class="social_icon">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="contactus1" placeholder="Message" type="type" Message="Message" name="Message">Message</textarea>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <button class="send_btn">Send</button>
                                </div>
                                </div>

                        </form>
                    </div>
                  <div class="col-md-3 border_right">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>Palanpur</li><br></br>
                            <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>94295-26287</li>
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>Naturegreen@gmail.com</li>
                     </ul>
                  </div>
                  <div class="col-md-3 border_right">
                     <h3>Useful Link</h3>
                     <ul class="link">
                        <li><a href="#">Nature Green</a></li>
                        <li><a href="#">NG Products</a> </li>
                        <li><a href="#">NG Gallery</a></li>
                        <li><a href="#">NG informaton</a> </li>
                        <li><a href="#">NG Helps</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 border_right">
                     <h3>Menus</h3>
                     <ul class="link">
<li><a href="index.html">Home</a></li>                             
<li><a href="about.html">About</a></li>                                                     
<li><a href="products.html">Products</a></li>                             
<li><a href="blog.html">Blog</a></li>
<li><a href="contact.html">Contact</a></li>
                     </ul>
                  </div>
                <div class="col-md-3">
                     <form class="bottom_form">
                    <!--      <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>  -->
                     </form>
                  </div>
               </div>
            </div>    
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2025 All Right Reserved By <a href="https://html.design/">Develop By Paresh & Darshan</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>


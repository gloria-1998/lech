<?php include 'contact.php';?>

<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icons" type="colorlib images/jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/slicknav.css">


	<script type="text/javascript" src="JS/bootstrap.js"></script>
	<script type="text/javascript" src="JS/jquery-3.5.1.slim.min.js"></script>
	<script type="text/javascript" src="JS/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>


   <title>LECH</title>
  </head>

  <body>

    <?php echo $alert; ?>
  	 <!-- navigationbar -->
   <section id="nav-bar">
   	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="colorlib images/logo.png"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="nav-barNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

    <li class="nav-item">
         <a class="nav-item nav-link active" href="index.html">HOME</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="about.html">ABOUT US</a>
     </li>

     <li class="nav-item">
      <a class="nav-link" href="services.html">SERVICES</a>
  </li>
    <li class="nav-item">
      <a class="nav-link" href="project.html">PROJECT</a>
  </li>
 
  <li class="nav-item">
      <a class="nav-link" href="contact.php">CONTACT</a>
  </li>
</ul>
   
  </div>

  <div class="col-xl-4 col-lg-4 d-none d-lg-block">
       <div class="Appointment d-flex justify-content-end">
         <div class="search_icon">
          <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
           <i class="fa fa-search"></i>
            </a>
            </div>
             </div>
              </div>
</nav>

        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                          <div class="dd">
                            <h3>contact</h3>
                            <p><a href="index.html">Home</a> / contact</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->
    <section class="contact-section">
      <div class="container">
         <div class="d-none d-sm-block mb-5 pb-4">


           <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                      
                    </div>
                    <h4 class="sent-notification"></h4>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="POST" id="myform">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="body" id="body" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="send" onclick="sendEmail()" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                         
           <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

           <script type="text/javascript">
             function sendEmail() {
              var name = $("#name");
              var email = $("#email");
              var subject = $("subject");
              var body = $("#body");

              if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                  url: 'sendEmail.php',
                  method: 'POST',
                  dataType: 'json',
                  data:{
                    name: name.va1(),
                    email: email.va1(),
                    subject: subject.va1(),
                    body: body.va1()
                  },
                  success: function (response) {
                    $('#myform')[0].reset();
                    $('.sent-notification').text("mesage sent successfully.");
                  }
                });
              }
             } 
             function isNotEmpty(caller){
              if (caller.va1()=="") {
                caller.css('border', '1px solid red');
                return false;
              }
              else {
                caller.css('border', '');
                return true;
              }
             }
           </script>
  
 -->

  <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    }
  </script>


                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-home"></i></span>
                            <div class="media-body">
                                <h3>Abuja Nigeria</h3>
                                <p>NO.25 Mesaya Street, Wuse Zone 6.</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <div class="media-body">
                                <h3>08163945362</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            <div class="media-body">
                                <h3>lechresourceslimited@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
             </div>
          </div>

    </section>



    <!-- footer -->
     <div class="footer">
     <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                        About
                                </h3>
                            <p>Abuja Nigeria <br>NO.25 Mesaya Street, Wuse Zone 6.<br>
                                <a href="#">08163945362</a> <br>
                                <a href="#">lechresourceslimited@gmail.com</a>
                            </p>
                            <p>



                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Popular Searches
                            </h3>
                            <ul>
                                <li><a href="#">Constuction</a></li>
                                <li><a href="#">Import and Export</a></li>
                                <li><a href="#">Foods and Beverages</a></li>
                                <li><a href="#">Oil and Gas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2 offset-xl-1 offset-lg-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="project.html">Project</a></li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                    
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All right RESERVED.<i class="fa fa-heart-o" aria-hidden="true"></i> by CHIDINMA.
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </footer>

   <!--  modal -->
   <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="serch_form">
                <input type="text" placeholder="search" >
                <button type="submit">search</button>
            </div>
          </div>
        </div>
      </div>

       <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
    
        <script src="js/main.js"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>







</body>
</html>

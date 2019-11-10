<?php 

include("php_action/db_connect.php");

include("php_action/retrieve/feedback.php");

?>  

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/icon.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="pup ccrms,PUP CCRMs,pupccrms,PUPCCRMS,">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>PUP CCRMs</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">					
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/preloader.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="./admin/bower_components/select2/dist/css/select2.min.css">
    </head>
    <body>
        <!-- preloader-->
        <div class="preloader" style="background-image:-webkit-linear-gradient(0deg,rgba(98, 189, 252) 0%, rgba(132, 144, 255) 100%)">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- #preloader-->
        <!-- Header-->
          <header id="header" >
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="index.html"><img src="img/logo1.png" alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="./index.html">Home</a></li>
                      <li class="manu-active"><a href="#survey">Survey</a></li>
                      <li class="menu-has-children"><a href="">Pages</a>
                        <ul>
                          <li><a href="https://www.pup.edu.ph/">PUPWebSite</a></li>
                          <li><a href="./admin/login.php">CCRM Admin Login</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
          </header><!-- #header -->

          	<!-- Start banner Area 
			<section class=" generic-banner relative" style="background-image:-webkit-linear-gradient(0deg,rgba(98, 189, 252,1) 0%, rgba(132, 144, 255,1) 100%);margin-top:78px">					
                    <div class="container">
                        <div class="row height align-items-center justify-content-center">
                            <div class="col-lg-10">
                                <div class="generic-banner-content">
                                    <h2 class="text-white">Feedback</h2>
                                    <p class="text-white">Give Us your Feedback!<br>you dont have to worry about your feedback data <br> it is secured here inside our system.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>		
             End banner Area -->
        
        <div class="col-md-12">
            <br><br>
            <hr>
        </div>

        <!-- Start Align Area -->
        <div class="whole-wrap">
            <div class="container">
                <div class="section-top-border" id="survey">
<!--start here the form ***********************************************************************-->
                    <form method = "post" action = "surveyform.php">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h3 class="mb-30">Feedback: <br> Survey Form</h3>
                            <p>You dont have to worry about information <b>leak</b>, Your Information is <b>secured</b> in our system. </p>
                    
                    <h5>HOW WE DEAL WITH COMPLAINTS, COMMENDATIONS AND  SUGGESTIONS</h5>
                    <p>We take all complaints, commendations and suggestions seriously. We promise to treat your feedback fairly, impartially and confidentially.</p>
                    <p>We treat everyone who gives feedback equally, regardless of whether they make a complaint, commendation or suggestion. We will not discriminate against you on the basis of your age, disability, ethnicity, gender, religion, belief, sexual orientation or any other irrelevant ground. We will respond to you as promptly as possible, regardless of the subject matter of your feedback or the method through which you contact us.</p>
                    <h5>Commendations</h5>
                    <p>We aim to acknowledge your commendation in writing within one working day and ensure your feedback is passed on to the relevant people.</p>
                    <h5>Suggestions</h5>
                    <p>We aim to acknowledge your Suggestions in writing within one working day. Decisions will be taken in light of the relevant criteria.</p>
                    <p>We will draw on your feedback to improve our concessionaires' services and products where appropriate</p>
                    <blockquote class="generic-blockquote">
                    <div class="col-lg-12">
                        <h5>HOW WE USE YOUR INFORMATION</h5>
                        <p>The PUP-RGO only uses your personal data to contact you to acknowledge your feedback, resolve any queries you may raise, or provide additional information relevant to the issues you have raised.</p>
                        <p>Under Philippine Data Privacy Act of 2012 you have the right to ask for anonymity, for which as a state university, complies for it is under the jurisdiction of the law, and the right to ask us to correct any inaccuracies in that information. If you want more information about this, please contact Resource Generation Office.</p>
                    </div>
                    </blockquote>


                    <div class="row">
                    <div class="col-sm-6 mt-50" style="margin-left:16px">
                    <p>to continue, Please Provide Concession Category and Stall Location.</p>
                    <h5>Category</h5><br>
                        
                    <select class = "default-select" name = "category" id = "default-select" required>
                    <option value = "">Select Category</option>
                    <option value = "food">Food</option>
                    <option value = "nonfood">Non-Food</option>

                     </select>
                    </div>
                    </div>


                     <br>


                     <div class="row">
                     <div class="col-sm-6" style="margin-left:16px">
                        <h5>Area</h5><br>
                        
                        <select class = "default-select" id = "default-select" name = "location" required>
                        <option value = "">Select Area</option>
                        <option value = "north">North</option>
                        <option value = "south">South</option>
                        <option value = "west">West</option>
                        <option value = "east">East</option>
                        <option value = "sampaguita">Sampaguita</option>
                        <option value = "lagoon">Lagoon</option>

                      

                        </select>
                        </div>
                        </div>
                        <blockquote class="generic-blockquote mt-20">
                            <div class="col-lg-12">
                                <p><b>Note</b> : Please Enter the Category and the Location of the stall you want to give your feedback so we can filter it for you. </p>
                                <p>     By Clicking <b>Next</b> button, You <b>Agree</b> to the terms and condition stated above.</p>
                            </div>
                        </blockquote>
                        <hr>
                        <a href="./choose.php" class="genric-btn primary circle mt-10"><span><i class="fa fa-arrow-left"></i> </span>Prev</a>
                        <button type = "submit" id = "feedback" name = "next" class="genric-btn primary circle arrow pull-right mt-10"><strong> Next</strong><span class="fa fa-arrow-right"></span></button>
                    </form>
					</div>
                </div>
            </div>
        </div>
        <!-- End Align Area -->

        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4 class="text-white">About Us</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4 class="text-white">Contact Us</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                            </p>
                            <p class="number">
                                012-6532-568-9746 <br>
                                012-6532-569-9748
                            </p>
                        </div>
                    </div>						
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4 class="text-white">Newsletter</h4>
                            <p>You can trust us. we only send  offers, not a single spam.</p>
                            <div class="d-flex flex-row" id="mc_embed_signup">


                                  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                    <div class="input-group add-on">
                                          <input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>
                                      <div class="input-group-btn">
                                        <button class="genric-btn primary circle arrow"><span class="lnr lnr-arrow-right"></span></button>
                                      </div>
                                    </div>
                                      <div class="info mt-20"></div>									    
                                  </form>

                            </div>
                        </div>
                    </div>						
                </div>
                <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<br> This system is develop by <a><b>G</b>ot<b>C</b>oncept <b>M</b>ulti<b>T</b>ech <b>F</b>irm.</a> and made with template from <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>	
        <!-- End footer Area -->

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d4db5c0f29b8e57"></script>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/owl.carousel.min.js"></script>			
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>			
        <script src="js/parallax.min.js"></script>	
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>				
        <script src="js/main.js"></script>	
        <script src="js/preloader.js"></script>
        <script src="./admin/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script  type="text/javascript">
            $(document).ready(function () {
               

                $('.select2').select2()

                $('#food').hide()
                $('#nonfood').hide()

                $('#stallcategory').change(function () {
                    $(this).find("option").each(function () {
                    $('#' + this.value).hide();
                    });
                $('#' + this.value).show();
                });

                $('#others').hide()

                $('#area').change(function () {
                    $(this).find("option").each(function () {
                    $('#' + this.value).hide();
                    });
                $('#' + this.value).show();
                });

                $('#dropdown').change(function() {
  	                if( $(this).val() == 'Other') {
       		            $('#id_info').prop( "disabled", true );
                    } else {       
                        $('#id_info').prop( "disabled", false );
                    }
                });
            });
        </script>
    </body>
</html>
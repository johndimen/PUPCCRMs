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
                      <li class="manu-active"><a href="#feedback">Feedback</a></li>
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

          	<!-- Start banner Area -->
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
            <!-- End banner Area -->
        
        <div class="col-md-12">
            <br><br>
            <hr>
        </div>

        <!-- Start Align Area -->
        <div class="whole-wrap">
            <div class="container">
                <div class="section-top-border" id="feedback">
                    <form action = "feedback.php" method = "post">
                    <div class="row">
                        <div class="col-lg-8">
                            
                            <h3 class="mb-30">Feedback Form</h3>
                            <p>You dont have to worry about information <b>leak</b>, Your Information is <b>secured</b> in our system. </p>
                            
                                <div class="row">
                                    <div class="col-sm-3" style="margin-left:16px">
                                            <h5>Stall Location</h5>
                                                <select class="default-select" name = "area" id="area" required>
                                                    <option value=""selected>Select Stall Location</option>
                                                    <option value="North">North</option>
                                                    <option value="East">East</option>
                                                    <option value="South">South</option>
                                                    <option value="West">West</option>
                                                    <option value="lagoon">Lagoon</option>
                                                    <option value="sampaguita">Sampaguita</option>
                                                    <option value="others">Others</option>
                                                </select>
                                    </div>
                                    <div class="col-sm-3" id="others">
                                        <h5>Specify:</h5>
                                        <input type="text" name="specify" id="specify" class="single-input">
                                    </div>
                                </div>
                                    <br>
                                    <div class="col-sm-3">
                                        <h5>Stall No.</h5>
                                        <select class="default-select" name="stallno" id="stallno" required>
                                            <option value="">Select Stall No.</option>
                                        </select>
                                    </div>
                                    <br><br><br>                                    
                                    <div class="col-sm-5">
                                        <h5>Stall Category</h5>
                                        <select class="default-select" name="stallcategory" id="stallcategory" required>
                                            <option value="">Select Stall Category</option>
                                            <option value="food">Food</option>
                                            <option value="nonfood">Non-Food</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <br>
                                    <div class="col-md-12">
                                        <h5>Questions (rate your answer)</h5>
                                        <hr>
                                        <br>
                                        <div class="col-md-12">
                                            <h5>General Questions</h5>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <P>How about the hygiene?</P>
                                                        <label for="question3" class="form-text-label" >
                                                        <select name = "hygiene" class = "default-select" id = "default-select" required>
			    					    					<option value = "1">Outstanding</option>
		    					    						<option value = "2">Very Good</option>
	    					    							<option value = "3">Good</option>
    					    								<option value = "4">Bad</option>
				    								    </select></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <P>How about the hospitality of the attendant(s)?</P>
                                                        <label for="question3" class="form-text-label" >
                                                        <select name = "hospitable" class = "default-select" id = "default-select" required>
					    					    			<option value = "1">Outstanding</option>
				    					    				<option value = "2">Very Good</option>
			    					    					<option value = "3">Good</option>
		    					    						<option value = "4">Bad</option>
	    					    						</select></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <P>Is the Product at the fair price?</P>
                                                        <label for="question7" class="form-text-label" >
                                                            <select name = "price" class = "default-select" id = "default-select" required>
			    									    	    <option value = "1">Outstanding</option>
				    				    			    		<option value = "2">Very Good</option>
					    				    	    			<option value = "3">Good</option>
						    			        				<option value = "4">Bad</option>
							    	    				</select></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <P>How's the product condition?</P>
                                                        <label for="question4" class="form-text-label" >
                                                            <select name = "condition" class = "default-select" id = "default-select" required>
												            	<option value = "1">Outstanding</option>
							            						<option value = "2">Very Good</option>
										            			<option value = "3">Good</option>
													            <option value = "4">Bad</option>
												            </select></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <P>How's the area around the stall?</P>
                                                        <label for="question6" class="form-text-label" >
                                                            <select name = "environment" class = "default-select" id = "default-select" required>
				            									<option value = "1">Outstanding</option>
							            						<option value = "2">Very Good</option>
										        			    <option value = "3">Good</option>
													            <option value = "4">Bad</option>
												            </select></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12" id="food" >
                                            <hr>
                                            <h5>Food-related Questions</h5>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <P>Is the food good?</P>
                                                        <label for="question1" class="form-text-label" >
                                                        <select name = "food" class = "default-select" id = "default-select" required>
								        					<option value = "1">Outstanding</option>
									        				<option value = "2">Very Good</option>
										        			<option value = "3">Good</option>
											        		<option value = "4">Bad</option>
												        </select></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
			    								    <div class="form-check">
                                                        <P>How's the preparation of the food?</P>
                                                        <label for="question5" class="form-text-label" >
                                                        <select name = "gear" class = "default-select" id = "default-select" required>
							    						    <option value = "1">Outstanding</option>
							        						<option value = "2">Very Good</option>
								        					<option value = "3">Good</option>
									        				<option value = "4">Bad</option>
										        		</select></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12" id="nonfood">
                                            <hr>
                                            <h5>Non-Food-Related Question</h5>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <P>How's the service(s)?</P>
                                                        <label for="question2" class="form-text-label" >
                                                        <select name = "service" class = "default-select" id = "default-select" required>
				    	    								<option value = "1">Outstanding</option>
					    	    							<option value = "2">Very Good</option>
						    	    						<option value = "3">Good</option>
							    	    					<option value = "4">Bad</option>
								    	    			</select> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset id='rating' class="rating" style="padding-left: 10px; padding-right:15px">
                                                <h5>Overall Evaluation</h5>
                                                <input class="stars" type="radio" id="star53" name="rating" value="5" />
                                                <label class = "full" for="star53" title="Awesome - 5 stars"></label>
                                                <input class="stars" type="radio" id="star4half3" name="rating" value="4.5" />
                                                <label class="half" for="star4half3" title="Pretty good - 4.5 stars"></label>
                                                <input class="stars" type="radio" id="star43" name="rating" value="4" />
                                                <label class = "full" for="star43" title="Pretty good - 4 stars"></label>
                                                <input class="stars" type="radio" id="star3half3" name="rating" value="3.5" />
                                                <label class="half" for="star3half3" title="Meh - 3.5 stars"></label>
                                                <input class="stars" type="radio" id="star33" name="rating" value="3" />
                                                <label class = "full" for="star33" title="Meh - 3 stars"></label>
                                                <input class="stars" type="radio" id="star2half3" name="rating" value="2.5" />
                                                <label class="half" for="star2half3" title="Kinda bad - 2.5 stars"></label>
                                                <input class="stars" type="radio" id="star23" name="rating" value="2" />
                                                <label class = "full" for="star23" title="Kinda bad - 2 stars"></label>
                                                <input class="stars" type="radio" id="star1half3" name="rating" value="1.5" />
                                                <label class="half" for="star1half3" title="Meh - 1.5 stars"></label>
                                                <input class="stars" type="radio" id="star13" name="rating" value="1" />
                                                <label class = "full" for="star13" title="Sucks big time - 1 star"></label>
                                                <input class="stars" type="radio" id="starhalf3" name="rating" value="0.5" />
                                                <label class="half" for="starhalf3" title="Sucks big time - 0.5 stars"></label>
                                            </fieldset>
                                        </div> 
                                            <br>
                                            <br>
                                            <div class="col-md-6">
                                                <h5>Feedback Type</h5>
                                                <select name="feedbacktype" id="feebacktype" class="defalt-select">
                                                    <option value=""Seledted> Select Feedback Type</option>
                                                    <option value="complain">Complain</option>
                                                    <option value="suggestion">Suggestion</option>
                                                    <option value="commend">Commend</option>
                                                </select>
                                            </div>
                                    </div>
                                    <br>
                                    <h5>Your message</h5>
                                    <p>Any feedbacks, questions, incidents, suggestions, and violent reactions. <br> Please write down below and let US know</p>
                                    <textarea id ="message" name = "message" class="single-textarea" style="line-height:20px;height: 200px;border-radius: 5px;" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                                </div>
                                
						    
                                <!-- For Gradient Border Use -->
                                <!-- <div class="mt-10">
                                    <div class="primary-input">
                                        <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                                        <label for="primary-input"></label>
                                    </div>
                                </div> -->
                            
                            
                        </div>
                        <br>
							<hr>
                        <br>
                           <h5>Feedback Details</h5>
                            <p>(It is <b>required</b> to fill up this form.)  All fields mark with <b>*</b> are <b>required</b>.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-sm-8">
										<h5>Name*</h5>
										<input type="text" name="name" placeholder="Name." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" class="single-input" required>
                                    </div>
									<div class="col-sm-8" style="margin-top:10px">
										<h5>Sender Type*</h5>
									   <label for="question7" class="form-text-label">
                                                <select name = "type" class = "default-select" id = "dropdown" required>
													<option value = "Student">Student</option>
													<option value = "Employees">Employees</option>
													<option value = "Faculty">Faculty</option>
													<option value = "Other">Others</option>
												</select></label>
									</div>
                                    <div class="col-sm-8" style="margin-top:10px">
										<h5>Identification No.*</h5>
										<input type="text" name="id_info" id="id_info" placeholder="ID No." onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID No.'"  class="single-input" required>
                                    </div>
                                </div>
                                <div class="col-md-6">  
                                    <p>(in case of inquiry)<br>Please provide E-mail and Contact No.</p>
                                    <div class="col-sm-8">
										<h5>E-mail*</h5>
										<input type="text" name="email" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'"  class="single-input" required>
                                    </div>
                                    <div class="col-sm-8" style="margin-top:10px">
										<h5>Contact No.*</h5>
										<input type="text" name="contact" placeholder="Contact No." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact No.'" class="single-input" required>
                                    </div>
                                </div>
                            </div>
                        
                        
                        <hr>
						<input type = "text" hidden = "true" value = "true" name = "sample">
                        <button id = "feedback" name = "submit" class="genric-btn primary circle arrow pull-right mt-10"><strong> Send</strong><span class="lnr lnr-rocket"></span></button>
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
                $("#rating .stars").click(function () {
                    $.post('rating.php',{rate:$(this).val()},function(d){
                               if(d>0)
                               {
                                   alert('You already rated');
                               }else{
                                   alert('Thanks For Rating');
                               }
                           });
                    var label = $("label[for='" + $(this).attr('id') + "']");
                                
                    $("#feedback").text(label.attr('title'));
                    $(this).attr("checked");
                });

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
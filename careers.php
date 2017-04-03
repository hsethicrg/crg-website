<?php
session_start();
include("include/functions.php");

require 'PHPMailer/PHPMailerAutoload.php';

ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Kolkata');

$mail = new PHPMailer();

		if(isset($_SESSION["successmailCarrier"])) {
			

		$mail->setFrom('info@crgroup.co.in','CRG Solutions Pvt. Ltd.');
		$mail->Subject = 'Thank you for contacting us';
		$name= $_SESSION["successmailCarrier"];
		$msg1 = '';
		$msg1 = file_get_contents('templates/contact_us_response.html');
		$msg1 = str_replace('{NAME}', $name, $msg1);
		
		$mail->addAddress($_SESSION["successmailCarrier"]);
		$mail->msgHTML($msg1);
		$mail->send();
	
	//die();
} 
else{
	 
	//die('sssssssssss');
	
	}


		


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>CRG Solutions Pvt Ltd</title>
	<!--<title>CR Group | CRG Solutions Pvt Ltd| Tableau | Tableau Partner | Business Intelligence | Atlassian | Tableau Services | .net Development | PHP Development </title>-->
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="images/favicon.png" />
<link rel='stylesheet' id='config-css'  href='css/ts-config.css' type='text/css' media='all' />
<link rel='stylesheet' id='mailchimp-checkbox-css'  href='css/checkbox.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome.min-css'  href='css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery.flipcountdown-css'  href='css/jquery.flipcountdown.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-css'  href='css/jquery-ui.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap.min-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl.carousel-css'  href='css/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='easy-responsive-tabs-css'  href='css/easy-responsive-tabs.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery.circliful-css'  href='css/jquery.circliful.css' type='text/css' media='all' />
<link rel='stylesheet' id='cubeportfolio.min-css'  href='css/cubeportfolio.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='megamenu-css'  href='css/megamenu.css' type='text/css' media='all' />
<link rel='stylesheet' id='styles-css'  href='css/styles.css' type='text/css' media='all' />
<link rel="stylesheet" id="custom-css" href="css/mobile.css" type="text/css" media="all" />
<link rel='stylesheet'   href='css/stylesheet.css' type='text/css' media='all' />
<!--[if IE 8]>
      <link rel="stylesheet" type="text/css" href="css/vc-ie8.css" media="screen">
      <![endif]-->
<link rel='stylesheet'   href='css/layout.css' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C500%2C400%2C100&#038;ver=1428634381' type='text/css' media='all' />
<!--Start of Zopim Live Chat Script-->
<!--      <script type="text/javascript">        window.$zopim||(function(d,s){var z=$zopim=function(c){        z._.push(c)},$=z.s=        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');        $.src='//v2.zopim.com/?4DPo3favbnE3NcQ3Zn7r5xg7lxoQ6GIR';z.t=+new Date;$.        type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');        </script>
      --><!--End of Zopim Live Chat Script-->
</head>
<body>

<!--pop-up for sales-presales opening-->

<div class="container"> 
  <!-- Modal -->
  <div class="modal fade" id="current_opening" role="dialog" >
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <form method= "post" id="learn_custom_form" action="ajax/ajax-3.php" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <div class="row text-left modal-field">
              <input type="hidden" name="position" value="Sales Account Manager">
              <label>Position :</label>
              <b>Sales Account Manager</b> <br>
              <!--<label>Location :</label> <b>Delhi</b> <br>
                                    <label>Experience :</label> <b>2 Years </b>--> 
            </div>
            <div class="row text-left">
              <div class="col-sm-12 col-lg-12 col-xs-12">
                <div class="row modal-field">
                  <h6>Name</h6>
                  <input type="text" class="required form-control" placeholder="Your Name" name="name">
                </div>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                   <div class="row modal-field">
                    <h6>Mobile No.</h6>
                    <input type="text" class="required amountLength form-control" placeholder="Mobile No." name="mobile" onkeypress="return isNumber(event)">
                  </div>
                </div>
                
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <div class="row modal-field">
                    <h6>Email.</h6>
                    <input type="email" class="required form-control validEmail " placeholder="Enter Email address" name="email">
                  </div>
                </div>
                
                 <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="row modal-field">
                  <h6>Comments</h6>
                  <textarea class="required form-control" name="comment" placeholder="Comments" rows="4" maxlength="250"></textarea>
                </div>
                </div>
                 <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="row modal-field">
                  <h6>Upload Resume</h6>
                  <input type="file" class="required form-control" name="resume" placeholder="Upload your Resume">
                </div>
              </div>
              </div> ko
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="tp-caption tp-resizeme">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--pop-up for sales-presales opening--> 

<!--pop-up for services opening-->

<div class="container"> 
  <!-- Modal -->
  <div class="modal fade" id="services_opening" role="dialog" >
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <form method= "post" id="learn_custom_form1" action="ajax/ajax-3.php" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <div class="row text-left modal-field">
              <h6>Position</h6>
              <select class="form-control" name="position">
                <option value="Tableau Consultant">Tableau Consultant</option>
                <option value="PHP Developer">PHP Developer</option>
                <option value="Dot Net Developer">Dot Net Developer</option>
              </select>
            </div>
            <div class="row text-left">
              <div class="col-sm-12 col-lg-12 col-xs-12">
                <div class="row modal-field">
                  <h6>Name</h6>
                  <input type="text" class="required form-control" placeholder="Your Name" name="name">
                </div>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <div class="row modal-field">
                    <h6>Mobile No.</h6>
                    <input type="text" class="required amountLength form-control" placeholder="Mobile No." name="mobile" onkeypress="return isNumber(event)">
                  </div>
                </div>
                
                <div class="row modal-field">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <h6>Email.</h6>
                    <input type="email" class="required form-control" placeholder="Enter Email address" name="email">
                  </div>
                </div>
                
                <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="row modal-field">
                  <h6>Comments</h6>
                  <textarea class="required form-control" name="comment" placeholder="Comments" rows="4" maxlength="250"></textarea>
                </div>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="row modal-field">
                  <h6>Upload Resume</h6>
                  <input type="file" class="required form-control" name="resume" placeholder="Upload your Resume">
                </div></div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="tp-caption tp-resizeme">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--pop-up for services opening--> 

<!--pop-up for shared opening-->

<div class="container"> 
  <!-- Modal -->
  <div class="modal fade" id="shared_opening" role="dialog" >
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <form method= "post" id="learn_custom_form2" action="ajax/ajax-3.php" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <div class="row text-left modal-field">
              <p>No opening as of now. Still we recommend you to share your profile. We will get back to you at an appropriate time.</p>
            </div>
            <div class="row text-left">
              <div class="col-sm-12 col-lg-12 col-xs-12">
                <div class="row modal-field">
                  <h6>Name</h6>
                  <input type="text" class="required form-control" placeholder="Your Name" name="name">
                </div>
                </div>
                <div class="row modal-field">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <h6>Mobile No.</h6>
                    <input type="text" class="required amountLength form-control" placeholder="Mobile No." name="mobile" onkeypress="return isNumber(event)">
                  </div>
                </div>
                <div class="row modal-field">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <h6>Email.</h6>
                    <input type="email" class="required form-control" placeholder="Enter Email address" name="email">
                  </div>
                </div>
                
                <div class="row modal-field">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <h6>Comments</h6>
                  <textarea class="required form-control" name="comment" placeholder="Comments" rows="4" maxlength="250"></textarea>
                </div>
                </div>
                <div class="row modal-field">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <h6>Upload Resume</h6>
                  <input type="file" class="required form-control" name="resume" placeholder="Upload your Resume">
                </div></div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="tp-caption tp-resizeme">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--pop-up for shared opening--> 

<!--Wrapper-->
<div id="wrapper"> 
  <!-- Start header -->
  <?php include ('menu.php'); ?>
  <!-- End header --> <!-- content --> 
  <!--<div id="container_full">
            <!-- Start slideshow --> 
  <!--					
            <div  class="ts-home4-people-say parallax-section background_opacity">
            	<!--
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12  ">
                        <div class="st-wrapper">
                           <div class="ts-section-title text-center">
                              <p align="justify">CRG strives to establish and maintain a best in class work environment. CRG is a global company that is widely                                                                         diverse with employees from different parts of the world and different ideas. CRG recognizes that diversity is                                                                         truly a competitive advantage and helps drive innovation. CRG has an inclusive environment that fosters respect                                                                         for individuals, their ideas and contributions. CRG also has an entrepreneurial spirit and encourages its employees                                                                         to learn and grow by giving them new opportunities and autonomy.</p>
                           </div>
                          
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            -->
  
  <section id="banner">
    <div class="banner ts-careers-banner parallax-section">
      <div class="overlay"></div>
      <div class="banner-content text-center"> 
        <!-- <h1>Contact us</h1>						<p>Start your project with us. We'd love to work with you</p>--> 
      </div>
    </div>
  </section>
  <div class="container">
    <?php
		session_start();
		 if(isset($_SESSION["successmailCarrier"])){ ?>
    <div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong> Your Resume succesfully uploaded.. </div>
    <?php session_destroy(); } ?>
  </div>
  
  <!-- End slideshow -->
  <div  class="ts-contact-support parallax-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4" onclick="open_popup('Sales');" data-toggle="modal"  data-target="#current_opening"	>
          <div class="ts-wrapper">
            <div class="ts-contact-hotline text-center tp-resizeme">
              <div class="table-cell tp-resizeme"> <span class="ts-contact-icon" ><i class="fa fa-support"></i></span>
                <div class="ts-contact-info" align="center">
                  <h4>Sales/Pre-Sales</h4>
                  <!--<h3>(020) 2423-1410</h3>-->
                  <p class="sub_p"><span class="display-none">Join our sales & marketing team</span></p>
                  <!--<a href="mailto:support@crgroup.co.in">support@crgroup.co.in</a>-->
                  <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme ts-btn">Current Opening</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4" onclick="open_popup('Services');" data-toggle="modal"  data-target="#services_opening">
          <div class="ts-wrapper">
            <div class="ts-contact-hotline text-center">
              <div class="table-cell"> <span class="ts-contact-icon"><i class="fa fa-phone"></i></span>
                <div class="ts-contact-info" align="center">
                  <h4>Services</h4>
                  <!--<h3>(+91) 98-20-240455</h3>-->
                  <p class="sub_p"><span class="display-none">Join our services team</span></p>
                  <!--<a href="mailto:sales@crgroup.co.in">sales@crgroup.co.in</a>-->
                  <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme ts-btn"> 
                  <a href="javascript:void(0)">Current Opening</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4" onclick="open_popup('Shared Services');"data-toggle="modal"  data-target="#shared_opening">
          <div class="ts-wrapper">
            <div class="ts-contact-hotline text-center">
              <div class="table-cell"> <span class="ts-contact-icon"><i class="fa fa-wechat"></i></span>
                <div class="ts-contact-info" align="center">
                  <h4>Shared Services</h4>
                  <p class="sub_p"><span class="display-none">Join our shared services team</span></p>
                  <!--<a href="#">Click to chat</a>-->
                  <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme ts-btn">Current Opening</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End / content -->
<div class="container">
  <div class="row">
    <div class="col-sm-12  ">
      <div class="st-wrapper">
        <div class="ts-about-content text-justify">
          <p>CRG strives to establish and maintain a best in class work environment. CRG is a global company that is widely                                                                         diverse with employees from different parts of the world and different ideas. CRG recognizes that diversity is                                                                         truly a competitive advantage and helps drive innovation. CRG has an inclusive environment that fosters respect                                                                         for individuals, their ideas and contributions. CRG also has an entrepreneurial spirit and encourages its employees                                                                         to learn and grow by giving them new opportunities and autonomy.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div  class="ts-home4-people-say parallax-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12  ">
        <div class="st-wrapper">
          <div class="text-center ts-trial quote-text">
            <h3>What people say</h3>
          </div>
          <div class="ts-testimonial-style2 ts-list-testimonial dark">
            <div class="ts-item-testimonial text-center">
              <div class="icon-quote-left"></div>
              <div class="client-quote quote-text">
                <p>As a man with children, I'm very grateful to CRG for the tremendous benefits package.<br>
                  It really makes me feel appreciated.</p>
              </div>
              <div class="icon-quote-right"></div>
              <div class="info-testimonial">
                <div class="client-avatar">
                  <figure> 
                    <!--<img src="images/avatar/client-avatar-95x95.png" alt="">--> 
                  </figure>
                </div>
                <div class="client-info"> <span><b>Team Leader</b></span> <!--                                                                                           <span class="client-position"><b>Consumer Electronics Company</b></span>												<span class="client-website"><a href="http://www.geekoos.com">www.geekoos.com</a></span>--> 
                </div>
              </div>
            </div>
            <div class="ts-item-testimonial text-center">
              <div class="icon-quote-left"></div>
              <div class="client-quote quote-text">
                <p>Working in CRG is truly linking with the leadership passion at its best. It is a pleasure to be at a workplace where your passion <br>
                  for creativity and hard work is matched by your colleagues with equal agility to help you in every which way.<br>
                  Success is a true team-sport here! True corroborative teamwork between shores!</p>
              </div>
              <div class="icon-quote-right"></div>
              <div class="info-testimonial">
                <div class="client-avatar">
                  <figure> 
                    <!--<img src="images/avatar/client-avatar-95x95.png" alt="">--> 
                  </figure>
                </div>
                <div class="client-info"> <span><b>Project Leader</b></span> <!-- <span class="client-position"><b>FMCG Company</b></span>												<span class="client-website"><a href="http://www.geekoos.com">www.geekoos.com</a></span>--> 
                </div>
              </div>
            </div>
            <div class="ts-item-testimonial text-center">
              <div class="icon-quote-left"></div>
              <div class="client-quote quote-text">
                <p>CRG is a fast growing company with an entrepreneurial spirit. Opportunities abound.</p>
              </div>
              <div class="icon-quote-right"></div>
              <div class="info-testimonial">
                <div class="client-avatar">
                  <figure> 
                    <!--<img src="images/avatar/client-avatar-95x95.png" alt="">--> 
                  </figure>
                </div>
                <div class="client-info"> <span><b>Project Manager</b></span> <!--<span class="client-position"><b>Car Rental Company</b></span>												<span class="client-website"><a href="http://www.geekoos.com">www.geekoos.com</a></span>--> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End / content --> 

<!-- Start footer -->
<?php include ('footer-upper.php'); ?>
<!-- End footer -->
</div>
<!-- End / Page wrap --> <!--Overlay--> 

<!--Overlay--> <script type='text/javascript' src='js/jquery.js'></script> 
<script type='text/javascript' src='js/jquery-ui.js'></script> 
<script type='text/javascript' src='js/jquery-ui.js'></script> 
<script type='text/javascript' src='js/jquery-migrate.min.js'></script> 
<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script> 
<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script> 
<script type='text/javascript' src='js/loading.js'></script> 
<script type='text/javascript' src='js/accordion.js'></script> 
<script type='text/javascript' src='js/lasted-blog-slide.js'></script> 
<script type='text/javascript' src='js/comment-reply.min.js'></script> 
<script type='text/javascript' src='js/jquery.form.min.js'></script> 
<script type='text/javascript' src='js/scripts.js'></script> 
<script type='text/javascript' src='js/jquery.blockUI.min.js'></script> 
<script type='text/javascript' src='js/bootstrap.min.js'></script> 
<script type='text/javascript' src='js/jquery.appear.min.js'></script> 
<script type='text/javascript' src='js/jquery.countTo.js'></script> 
<script type='text/javascript' src='js/jquery.countdown.js'></script> 
<script type='text/javascript' src='js/jquery.fitvids.js'></script> 
<script type='text/javascript' src='js/readmore.js'></script> 
<script type='text/javascript' src='js/subscribre.js'></script> 
<script type='text/javascript' src='js/jquery.validate.min.js'></script> 
<script type='text/javascript' src='js/jquery.owl.carousel.js'></script> 
<script type='text/javascript' src='js/easyResponsiveTabs.js?'></script> 
<script type='text/javascript' src='js/jquery.circliful.min.js'></script> 
<script type='text/javascript' src='js/jquery.sticky.js'></script> 
<script type='text/javascript' src='js/jquery.cubeportfolio.min.js'></script> 
<script type='text/javascript' src='js/portfolio.js'></script> 
<script type='text/javascript' src='js/chosen.jquery.min.js'></script> 
<script type='text/javascript' src='js/accordion.min.js'></script> 
<script type='text/javascript' src='js/custom.js'></script>


</body>
</html>
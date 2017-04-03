<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>CRG Solutions Pvt Ltd</title>
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
      <!--[if IE 8]>
      <link rel="stylesheet" type="text/css" href="css/vc-ie8.css" media="screen">
      <![endif]-->	
      <link rel='stylesheet'   href='css/layout.css' type='text/css' media='all' />
      <link rel='stylesheet'   href='css/stylesheet.css' type='text/css' media='all' />
      <link rel='stylesheet' id='redux-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C500%2C400%2C100&#038;ver=1428634381' type='text/css' media='all' />
      <!--Start of Zopim Live Chat Script-->    
      <!--    <script type="text/javascript">        window.$zopim||(function(d,s){var z=$zopim=function(c){        z._.push(c)},$=z.s=        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');        $.src='//v2.zopim.com/?4DPo3favbnE3NcQ3Zn7r5xg7lxoQ6GIR';z.t=+new Date;$.        type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');        </script>
         -->        <!--End of Zopim Live Chat Script-->
   </head>
   <body>
      <iframe name="tblank" style="display:none"></iframe>
      <!--Wrapper-->    
      <div id="wrapper">
         <!-- Start header -->		<?php include ('menu.php'); ?>		<!-- End header -->			
         <!--pop-up for Book Assessment-->
         <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="book_assessment" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="showMsg2" style="display:none;">Thanks, we will reply soon.</div>
                     <form target="tblank" onsubmit="setTimeout(function(){jQuery('#learn_atlassian_form').hide();jQuery('.showMsg2').show();},3000);"  id="learn_atlassian_form" method= "post" action="ajax/ajax-2.php">
                        <input type="hidden" name="type" value="Bi Institute Request" />
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-sm-12 col-lg-12 col-xs-12">
                                 <div class="row modal-field">
                                    <h6>First Name*</h6>
                                    <input type="text" class="required form-control" placeholder="Your Name" name="name">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Business Email*</h6>
                                    <input type="text" class="required form-control validEmail officeEmailCheck" placeholder="Business Email" name="email">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Mobile No.*</h6>
                                    <input type="text" class="required amountLength form-control" placeholder="10 Digit Mobile No." name="mobile"  onkeypress="return isNumber(event)">
                                 </div>
                                 <input type="hidden" name="subjectvalue" value="Bi Institute Page, About Tableau Training">
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="tp-caption tp-resizeme">Request a Seat</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="program_assessment" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="showMsg23" style="display:none;">Thanks, we will reply soon.</div>
                     <form target="tblank" onsubmit="setTimeout(function(){jQuery('#atlassian_training').hide();jQuery('.showMsg23').show();},3000);"  id="atlassian_training" method= "post" action="ajax/ajax-2.php">
                        <input type="hidden" name="type" value="Bi Institute Request" />
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-sm-12 col-lg-12 col-xs-12">
                                 <div class="row modal-field">
                                    <h6>First Name*</h6>
                                    <input type="text" class="required form-control" placeholder="Your Name" name="name">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Business Email*</h6>
                                    <input type="text" class="required form-control validEmail officeEmailCheck" placeholder="Business Email" name="email">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Mobile No.*</h6>
                                    <input type="text" class="required amountLength form-control" placeholder="10 Digit Mobile No." name="mobile"  onkeypress="return isNumber(event)">
                                 </div>
                                 <input type="hidden" name="subjectvalue" value="Bi Institute Page,best training program">
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="tp-caption tp-resizeme">Request a Seat</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!--pop-up for Book Assessment-->
         <!-- Banner -->	
         <section id="banner">
            <div class="banner ts-tableau-banner ">
               <div class="banner-content">
                  <div align="center">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="contents text-center">
                              <div class="ts-header tp-resizeme tp-simpleresponsive ts-big-caption-style2">
                                 Looking For a <span>Career</span> In Visual <span>Analytics?</span> <br>
                              </div>
                              <div class="tp-caption ts-caption-medium tp-fade tp-resizeme start">
                                 <label>How Can It Help You?</label><br><br>
                                 <p>Unleash the power of your most valuable assets using Tableau: Data & People. CRG Experts have deep implementation expertise to help solve your business decision making challenges.</p>
                              </div>
                              <div align="center">
                                 <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme ts-btn">
                                    Learn More&nbsp;<i class="fa fa-arrow-down"></i>
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
      </div>
      </section>  
      <!-- End Banner -->
      <!--Get Started-->
      <section id="banner">
         <div class="banner ts-analysis-banner">
            <div class="container">
               <div class="banner-content text-left">
                  <div align="center>"	
                  <div class="showMsg1" style="display:none;">Thanks, we will reply soon.</div>
                  <form target="tblank" onsubmit="setTimeout(function(){jQuery('#validate_form').hide();jQuery('.showMsg1').show();},3000);"  id="validate_form" method= "post" action="ajax/ajax-2.php">
                     <input type="hidden" name="type" value="Request a set" />
                     <div class="row">
                        <div class="col-lg-3 col-sm-3"></div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-left bi-form">
                           <label>Name</label>
                           <input class="form-control" name="name" type="text" placeholder="Your Name">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-sm-3"></div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-left bi-form">
                           <label>Email</label>
                           <input class="required form-control validEmail officeEmailCheck" name="email" type="text" placeholder="Email Address">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-3 col-sm-3"></div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-left bi-form">
                           <label>Phone</label>
                           <input class="required form-control amountLength" name="mobile" type="text" placeholder="Mobile No." onkeypress="return isNumber(event)" maxlength="10">
                        </div>
                     </div>
                     <div class="row  bi-form" align="center">
                        <input type="hidden" name="subjectvalue" value="Bi Institute Page, Request A Set area">	
                        <button type="submit" class="tp-caption tp-resizeme">Request a Seat</button>
                  </form>
                  </div>			
               </div>
            </div>
         </div>
      </section>
      <!--Get Started-->
      <!-- Start three block  -->			
      <div  class="ts-home4-support parallax-section">
         <div class="ts-trial text-center">
            <h3>HOW WE PARTNER YOUR SUCCESS WITH TABLEAU</h3>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                  <div class="st-wrapper">
                     <div class="ts-service-style-4 text-center">
                        <!--<span class="icon-service">										<i class="fa fa-pagelines"></i>									</span>-->	                             
                        <span class="ts-contact-icon" ><i class="fa fa-gear fa-5x"  id="fa-color"></i></span>	                          										
                        <div class="service-heading ts-trial">
                           <h3>
                              About Tableau Training
                           </h3>
                        </div>
                        <div class="bi-content">
                           <div class="description-service">
                              <p align="justify">	•	60+ hours training program</br>
                                 •	Delivered in Gurgaon</br>
                                 •	Best trainers having years of experience of solving toughest data problems</br>
                                 •	Live project</br>
                              </p>
                           </div>
                        </div>
                        <div align="center">
                           <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme ts-btn"  data-toggle="modal" data-target="#book_assessment">
                              <a href="#" class="tsign">Sign Up</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-5">
                  <div class="st-wrapper">
                     <div class="ts-service-style-4 text-center">
                        <!--<span class="icon-service">										<i class="fa  fa-briefcase"></i> 									</span>	-->	                                                                        
                        <span class="ts-contact-icon"><i class="fa fa-graduation-cap fa-5x" id="fa-color"></i></span>											
                        <div class="service-heading ts-trial">
                           <h3>
                              What makes this the best training program?
                           </h3>
                        </div>
                        <div class="bi-content">
                           <div class="description-service">
                              <p align="justify">•	25+ years of excellence</br>
                                 •	Ranked # 1 Tableau Partner</br>
                                 •	Passionate about knowledge sharing<br>
                              </p>
                           </div>
                        </div>
                        <div align="center">
                           <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme ts-btn"  data-toggle="modal" data-target="#program_assessment">
                              <a href="#" class="psign">Sign Up</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-4 col-xs-4"></div>
         <div class="col-lg-4 col-md-4 col-xs-4">
         <div class="ts-trial text-center">
            <h3>MINIMUM ELIGIBILITY</h3>
            </div>
            <div class="text-justify">
               <p align="left">•	Graduate</br>
                  •	Minimum two years working experience
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-xs-4">     
         </div>
      </div>
      <!--Get in Touch-->
      <div  class="ts-home4-service parallax-section ts-in-touch">
         <div class="overlay"></div>
         <div class="container">
            <div class="row contact-form">
               <div class="st-wrapper">
                  <div class="ts-section-title  text-center">
                     <h3><label>GET IN TOUCH. GET THE EDGE</label></h3>
                  </div>
                  <div  class="bg_parallax">
                     <div class="row">
                        <div class="inner-row clearfix"  align="justify">
                           <div class="col-md-12 text-center">
                              Get Started With Tableau! Drop us a message or Fill The Below Form &amp; we will be in touch ASAP.
                              <div class="showMsg" style="display:none;">Thanks, we will reply soon.</div>
                              <form target="tblank" onsubmit="setTimeout(function(){jQuery('#learn_custom_form').hide();jQuery('.showMsg').show();},3000);"  id="learn_custom_form" method= "post" action="ajax/ajax-2.php">
                                 <input type="hidden" name="type" value="Get In Touch" />
                                 <div class="row">
                                    <div class="col-lg-6 col-sm-6 contact-field">
                                       <input class="required form-control" name="name" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg-6 col-sm-6 contact-field">
                                       <input class="required amountLength form-control" name="mobile" type="text" placeholder="Mobile Number"  onkeypress="return isNumber(event)" maxlength="10">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-6 col-sm-6 contact-field">
                                       <input class="required form-control" name="company" type="text" placeholder="Company Name">
                                    </div>
                                    <div class="col-lg-6 col-sm-6 contact-field">
                                       <input class="required form-control validEmail officeEmailCheck" name="email" type="text" placeholder="Business Email">
                                    </div>
                                 </div>
                                 <div class="row contact-field">
                                    <div class="ts-section-title  text-center">
                                       <label>Message to Us</label>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-xs-12">
                                       <textarea class="required form-control" rows="4" name="message">
                                       </textarea>
                                    </div>
                                 </div>
                                 <div class="row contact-field">
                                    <input type="hidden" name="subjectvalue" value="Bi Institute Page, Contact us area">
                                    <button type="submit" class="tp-caption tp-resizeme">Submit</button>
                              </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Get in Touch-->
      <br>
      <!-- End / content -->
      <!-- Start footer -->		<?php include('footer-upper.php'); ?>		<!-- End footer -->		
      </div>
      <script>
         jQuery(document).on('click','.tsign',function(){
           jQuery('#learn_atlassian_form').show();
           jQuery('.showMsg2').hide();
           document.getElementById("learn_atlassian_form").reset();
         
         
         })
         jQuery(document).on('click','.psign',function(){
           jQuery('#atlassian_training').show();
           jQuery('.showMsg23').hide();
           document.getElementById("atlassian_training").reset();
         
         
         })
      </script>
      <!-- End / Page wrap -->	<script type='text/javascript' src='js/jquery.js'></script>	<script type='text/javascript' src='js/jquery-ui.js'></script>	<script type='text/javascript' src='js/jquery-ui.js'></script>	<script type='text/javascript' src='js/jquery-migrate.min.js'></script>	<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>	<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script> 	<script type='text/javascript' src='js/loading.js'></script>		<script type='text/javascript' src='js/accordion.js'></script>		<script type='text/javascript' src='js/lasted-blog-slide.js'></script>		<script type='text/javascript' src='js/comment-reply.min.js'></script>	<script type='text/javascript' src='js/jquery.form.min.js'></script>	<script type='text/javascript' src='js/scripts.js'></script>	<script type='text/javascript' src='js/jquery.blockUI.min.js'></script>		<script type='text/javascript' src='js/bootstrap.min.js'></script>	<script type='text/javascript' src='js/jquery.appear.min.js'></script>	<script type='text/javascript' src='js/jquery.countTo.js'></script>	<script type='text/javascript' src='js/jquery.countdown.js'></script>	<script type='text/javascript' src='js/jquery.fitvids.js'></script>	<script type='text/javascript' src='js/readmore.js'></script>	<script type='text/javascript' src='js/subscribre.js'></script>	<script type='text/javascript' src='js/jquery.validate.min.js'></script>	<script type='text/javascript' src='js/jquery.owl.carousel.js'></script>	<script type='text/javascript' src='js/easyResponsiveTabs.js?'></script>	<script type='text/javascript' src='js/jquery.circliful.min.js'></script>	<script type='text/javascript' src='js/jquery.sticky.js'></script>	<script type='text/javascript' src='js/jquery.cubeportfolio.min.js'></script>	<script type='text/javascript' src='js/portfolio.js'></script>	<script type='text/javascript' src='js/chosen.jquery.min.js'></script>		<script type='text/javascript' src='js/accordion.min.js'></script>	<script type='text/javascript' src='js/custom.js'></script>        <script type='text/javascript' src='js/ajax.js'></script>                
   </body>
</html>
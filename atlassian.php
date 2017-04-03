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
      <!--[if IE 8]>
      <link rel="stylesheet" type="text/css" href="css/vc-ie8.css" media="screen">
      <![endif]-->
      <link rel='stylesheet'   href='css/layout.css' type='text/css' media='all' />
      <link rel='stylesheet'   href='css/stylesheet.css' type='text/css' media='all' />
      <link rel='stylesheet' id='redux-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C500%2C400%2C100&#038;ver=1428634381' type='text/css' media='all' />
      <!--Start of Zopim Live Chat Script-->
      <!--       <script type="text/javascript">        window.$zopim||(function(d,s){var z=$zopim=function(c){        z._.push(c)},$=z.s=        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');        $.src='//v2.zopim.com/?4DPo3favbnE3NcQ3Zn7r5xg7lxoQ6GIR';z.t=+new Date;$.        type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');        </script>  
         --><!--End of Zopim Live Chat Script-->
      
   </head>
   <body>
      <iframe name="tblank" style="display:none"></iframe>
      <!--Wrapper-->
      <div id="wrapper">
         <!-- Start header -->
         <?php include ('menu.php'); ?>
         <!-- End header --> 
         <!--pop-up for Book Assessment-->
         <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="book_assessment" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <style>.thanks_msg{}</style>
                  <div class="modal-content">
                     <div class="showMsg1" style="display:none;">Thanks, we will reply soon.</div>
                     <form target="tblank" onsubmit="setTimeout(function(){jQuery('#validate_form').hide();jQuery('.showMsg1').show();},3000);" id="validate_form" method="post" action="ajax/ajax-2.php">
                        <input type="hidden" name="type" value="download free trial" />
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
                                    <h6>Company Name*</h6>
                                    <input type="text" class="required form-control" placeholder="Company Name" name="company">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Business Email*</h6>
                                    <input type="text" class="required form-control validEmail officeEmailCheck" placeholder="Business Email" name="email">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Mobile No.*</h6>
                                    <input type="text" class="required amountLength form-control" maxlength="10" placeholder="10 Digit Mobile No." name="mobile"  onkeypress="return isNumber(event)">
                                 </div>
                                 <input type="hidden" name="subjectvalue" value="Atlassian Page, Download Free Trial">
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="tp-caption tp-resizeme" name="tsubmit">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="jira_services" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <style>.thanks_msg{}</style>
                  <div class="modal-content">
                     <div class="showMsg12" style="display:none;">Thanks, we will reply soon.</div>
                     <form target="tblank" onsubmit="setTimeout(function(){jQuery('#learn_datawatch_form').hide();jQuery('.showMsg12').show();},3000);" id="learn_datawatch_form" method="post" action="ajax/ajax-2.php">
                        <input type="hidden" name="type" value="Jira Services" />
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
                                    <h6>Company Name*</h6>
                                    <input type="text" class="required form-control" placeholder="Company Name" name="company">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Business Email*</h6>
                                    <input type="text" class="required form-control validEmail officeEmailCheck" placeholder="Business Email" name="email">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Mobile No.*</h6>
                                    <input type="text" class="required amountLength form-control" maxlength="10" placeholder="10 Digit Mobile No." name="mobile"  onkeypress="return isNumber(event)">
                                 </div>
                                 <input type="hidden" name="subjectvalue" value="Atlassian Page, Jira Services Inquiry">
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="tp-caption tp-resizeme" name="tsubmit">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="jira_health_check" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <style>.thanks_msg{}</style>
                  <div class="modal-content">
                     <div class="showMsg123" style="display:none;">Thanks, we will reply soon.</div>
                     <form target="tblank" onsubmit="setTimeout(function(){jQuery('#learn_atlassian_form').hide();jQuery('.showMsg123').show();},3000);" id="learn_atlassian_form" method="post" action="ajax/ajax-2.php">
                        <input type="hidden" name="type" value="Jira health check" />
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
                                    <h6>Company Name*</h6>
                                    <input type="text" class="required form-control" placeholder="Company Name" name="company">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Business Email*</h6>
                                    <input type="text" class="required form-control validEmail officeEmailCheck" placeholder="Business Email" name="email">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Mobile No.*</h6>
                                    <input type="text" class="required amountLength form-control" maxlength="10" placeholder="10 Digit Mobile No." name="mobile"  onkeypress="return isNumber(event)">
                                 </div>
                                 <input type="hidden" name="subjectvalue" value="Atlassian Page, Jira Health Check Inquiry">
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="tp-caption tp-resizeme" name="tsubmit">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="confluence" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <style>.thanks_msg{}</style>
                  <div class="modal-content">
                     <div class="showMsg1234" style="display:none;">Thanks, we will reply soon.</div>
                     <form target="tblank" onsubmit="setTimeout(function(){jQuery('#confluence_service').hide();jQuery('.showMsg1234').show();},3000);" id="confluence_service" method="post" action="ajax/ajax-2.php">
                        <input type="hidden" name="type" value="confluence service" />
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
                                    <h6>Company Name*</h6>
                                    <input type="text" class="required form-control" placeholder="Company Name" name="company">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Business Email*</h6>
                                    <input type="text" class="required form-control validEmail officeEmailCheck" placeholder="Business Email" name="email">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Mobile No.*</h6>
                                    <input type="text" class="required amountLength form-control" maxlength="10" placeholder="10 Digit Mobile No." name="mobile"  onkeypress="return isNumber(event)">
                                 </div>
                                 <input type="hidden" name="subjectvalue" value="Atlassian Page, Confluence Service Inquiry">
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="tp-caption tp-resizeme" name="tsubmit">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="atlassiantraining" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <style>.thanks_msg{}</style>
                  <div class="modal-content">
                     <div class="showMsg1234" style="display:none;">Thanks, we will reply soon.</div>
                     <form target="tblank" onsubmit="setTimeout(function(){jQuery('#atlassian_training').hide();jQuery('.showMsg1234').show();},3000);" id="atlassian_training" method="post" action="ajax/ajax-2.php">
                        <input type="hidden" name="type" value="atlassian training" />
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
                                    <h6>Company Name*</h6>
                                    <input type="text" class="required form-control" placeholder="Company Name" name="company">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Business Email*</h6>
                                    <input type="text" class="required form-control validEmail officeEmailCheck" placeholder="Business Email" name="email">
                                 </div>
                                 <div class="row modal-field">
                                    <h6>Mobile No.*</h6>
                                    <input type="text" class="required amountLength form-control" maxlength="10" placeholder="10 Digit Mobile No." name="mobile"  onkeypress="return isNumber(event)">
                                 </div>
                                 <input type="hidden" name="subjectvalue" value="Atlassian Page, Atlassian Training Inquiry">
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="tp-caption tp-resizeme" name="tsubmit">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!--pop-up for Book Assessment--> 
         <!-- Banner -->
         <section id="banner">
            <div class="banner ts-tableau-banner">
               <div class="banner-content">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="contents text-center">
                              <div class="ts-header tp-resizeme ts-big-caption-style2"> Unleash The Power In Every <span>Team</span><br>
                                 <br>
                              </div>
                              <div class="tp-caption tp-fade tp-resizeme ts-start2"> From medicine and space travel to disaster response robots, our products help teams all over the planet advance humanity through the power of software.<br>
                                 <br><br>
                              </div>
                              <div align="center">
                                 <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme ts-btn"> Learn More&nbsp;<i class="fa fa-arrow-down"></i> </div>
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
               <div class="banner-content text-center">
                  <div class="ts-header1 tp-resizeme ts-big-caption-style2 ts-start"> Tools For Teams, From Start-Up To Enterprise<br>
                     <br>
                  </div>
                  <div class="tp-caption tp-fade tp-resizeme ts-start1"> Atlassian provides the tools to help every team unleash their full potential. <br>
                     <br>
                  </div>
                  <div align="center">
                     <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme ts-btn"> <a href="#">Get Started</a> </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Get Started--> 
      <!-- Start three block  -->
      <div  class="ts-home11-different-hosting parallax-section">
         <div class="container">
            <div class="row">
               <div align="center">
                  <div class="tp-product-main">Tools for teams, from startup to enterprise</div>
                  <p>JIRA | Confluence | HipChat | Bitbucket | SourceTree | Bamboo | Clover | FishEye </p>
                  <br>
                  <div class="col-sm-4">
                     <div class="ts-wrapper">
                        <div class="ts-products-head">Tracking/Support</div>
                        <div class=" ">
                           <a href="">
                              <figure><img class="img-responsive" alt="" src="images/homepage/tracking.png"></figure>
                           </a>
                        </div>
                        <br>
                        <br>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="ts-wrapper">
                        <div class="ts-products-head">Collaboration</div>
                        <div class="">
                           <a href="">
                              <figure><img class="img-responsive col-img" alt="" src="images/homepage/collaboration.png"></figure>
                           </a>
                           <h3><a href=""></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="ts-wrapper">
                     <div class="ts-products-head text-center">Coding</div>
                     <div class="">
                        <a href="">
                           <figure><img class="img-responsive" alt="" src="images/homepage/coding.png"></figure>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      </div>
      <div  class="ts-home11-twitter parallax-section ts-consultancy-banner">
         <div class="ts-overlay"></div>
         <div class="container">
            <div class="row">
               <div class="col-sm-12 text-center">
                  <div class="ts-wrapper consult-head">
                     <h2>Consultancy</h2>
                     <h3>Expert consultation and custom services for the entire Atlassian stack.</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div  class="ts-home11-meet-hosting parallax-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12  ">
                  <div class="ts-wrapper">
                     <div  class="ts-home11-meet-hosting-content">
                        <div class="row ">
                           <div class="inner-row clearfix">
                              <div class="col-sm-6 col-lg-3 col-md-3  ">
                                 <div class="ts-wrapper">
                                    <div class="team-item team-item-style1 text-center  ">
                                       <i class="fa fa-cogs fa-5x"></i>
                                       <h4 class="ctext">JIRA SERVICES</h4>
                                       <!--<span>UX &amp; UI DESIGNER</span>-->
                                       <div class="ts-para">
                                          <p>Starting with a simple setup to complex configuration, of Jira Experts can help you extract full value from your JIRA licenses.</p>
                                       </div>
                                       <div class="tp-caption ts-button-s3 sfb tp-resizeme ts-btn-rounded" onclick="open_popup('jira_services')"            data-toggle="modal" data-target="#jira_services"> <a class="cform1" href="javascript:void(0);">Contact US</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-lg-3 col-md-3  ">
                                 <div class="ts-wrapper">
                                    <div class="team-item team-item-style1 text-center  ">
                                       <i class="fa fa-medkit fa-5x"></i>
                                       <h4 class="ctext1">JIRA HEALTH CHECK</h4>
                                       <!--<span>PROJECT MANAGER</span>-->
                                       <div class="ts-para">
                                          <p>Allow our Consultants to analyse & review your environment & recommend best practices you can adopt.</p>
                                       </div>
                                       <div class="tp-caption ts-button-s3 sfb tp-resizeme ts-btn-rounded" onclick="open_popup('jira_health_check')"          data-toggle="modal" data-target="#jira_health_check"> <a class="cform2" href="javascript:void(0);">Contact US</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-lg-3 col-md-3  ">
                                 <div class="ts-wrapper">
                                    <div class="team-item team-item-style1 text-center  ">
                                       <i class="fa fa-wrench fa-5x"></i>
                                       <h4 class="ctext">CONFLUENCE SERVICE</h4>
                                       <!--	<span>LEAD PROJECT MANAGER</span>-->
                                       <div class="ts-para">
                                          <p>CRG Consultants Team can help you get more out of your wiki & enable collaboration that allows easy organizing of work.</p>
                                       </div>
                                       <div class="tp-caption ts-button-s3 sfb tp-resizeme ts-btn-rounded" onclick="open_popup('confluence_services')"         data-toggle="modal" data-target="#confluence"> <a  class="cform3" href="javascript:void(0);">Contact US</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-lg-3 col-md-3  ">
                                 <div class="ts-wrapper">
                                    <div class="team-item team-item-style1 text-center  ">
                                       <i class="fa fa-graduation-cap fa-5x"></i>
                                       <h4 class="ctext">ATLASSIAN TRAINING</h4>
                                       <!--<span>CEO / CO-FOUNDER</span>-->
                                       <div class="ts-para">
                                          <p>Want to get started TRAINED?<BR>
                                             Our Quickstart approach can save you time & bring down your costs substantially through customized trainings.
                                          </p>
                                       </div>
                                       <div class="tp-caption ts-button-s3 sfb tp-resizeme ts-btn-rounded" onclick="open_popup('atlassian_training')"    data-toggle="modal" data-target="#atlassiantraining"> <a class="cform4" href="javascript:void(0);">Contact US</a> </div>
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
      <!--Trial Version-->
      <section id="banner">
         <div class="banner-content text-center ts-trial">
            <h3>Get your trial version of any Atlassian product for free</h3>
            <div class="product1-resources" align="center">
               <div class="tp-caption ts-button-s3 sfb tp-resizeme ts-btn-trial" data-toggle="modal" data-target="#book_assessment">
                  <a class="cform" href="javascript:void(0);">Download Free Trial</a>
               </div>
            </div>
         </div>
      </section>
      <!--Trial Version-->
      <div  class="ts-home11-business-hosting parallax-section">
         <div class="ts-overlay"></div>
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="ts-wrapper">
                     <div class="ts-section-title text-center" >
                        <h3>More Free Value Added Services</h3>
                     </div>
                     <div  class="bg_parallax ">
                        <div class="row">
                           <div class="inner-row clearfix">
                              <div class="col-sm-6 ts-home11-business-hosting-left">
                                 <div class="ts-wrapper">
                                    <div class="ts-feature-item right">
                                       <div class="icon-feature"> <i class="fa fa-group fa-3x"></i> </div>
                                       <div class="info-feature">
                                          <h3><a href="">CRG Atlassian Team Support</a></h3>
                                          <p>With our exclusive CRG Service Desk, you will get Free Consultation on Atlassian products and how to use them effectively.</p>
                                       </div>
                                    </div>
                                    <div class="ts-feature-item right">
                                       <div class=""> <i class=""></i> </div>
                                       <div class="info-feature">
                                          <h3><a href=""> </a></h3>
                                          <p></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="ts-wrapper">
                                    <div class="ts-feature-item left">
                                       <div class="icon-feature"> <i class="fa fa-calendar fa-3x"></i> </div>
                                       <div class="info-feature">
                                          <h3><a href="">CRG Atlassian Complimentary Events</a></h3>
                                          <p>All our Licensed Customer owners will also be part of the CRG Community and get notified about special Events & Trainings.</p>
                                       </div>
                                    </div>
                                    <div class="ts-feature-item left">
                                       <div class=""> <i class=""></i> </div>
                                       <div class="info-feature">
                                          <h3><a href=""></a></h3>
                                          <p></p>
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
      </div>
      <!--Get in Touch-->
      <div  class="ts-home4-service parallax-section ts-in-touch">
         <div class="overlay"></div>
         <div class="container">
            <div class="row contact-form">
               <div class="st-wrapper">
                  <div class="ts-section-title  text-center">
                     <h3>
                        <label>GET IN TOUCH. GET THE EDGE</label>
                     </h3>
                  </div>
                  <style>
                     .thanks_msg{}
                  </style>
               </div>
               <div  class="bg_parallax">
                  <div class="row">
                     <div class="inner-row clearfix text-justify">
                        <div class="col-md-12 text-center">
                           Get Started With Atlassian! Drop us a message or Fill the Below Form &amp; we will be in touch ASAP.
                           <div class="showMsg" style="display:none;">Thanks, we will reply soon.</div>
                           <!--<form target="tblank" onsubmit="jQuery(this).html(&#039;&lt;p class=&amp;quot;thanks_msg&amp;quot;&gt;Thanks, we will reply soon.&lt;/p&gt;&#039;);"   id="validate_form" method= "post" action="ajax/ajax-2.php">-->
                           <?php /*?>
                           <form target="tblank" onsubmit="setTimeout(function(){jQuery('#validate_form').hide();jQuery('.showMsg').show();},3000);"  class="homepage" method= "post" id="validate_form" action="ajax/ajax-2.php">  <?php */?>
                           <form target="tblank" onsubmit="setTimeout(function(){jQuery('#learn_custom_form').hide();jQuery('.showMsg').show();},3000);"  id="learn_custom_form" method= "post" action="ajax/ajax-2.php">
                              <input type="hidden" name="type" value="Get In Touch" />
                              <div class="row">
                                 <div class="col-lg-6 col-sm-6 contact-field">
                                    <input class="required form-control" name="name" type="text" placeholder="Your Name" required>
                                 </div>
                                 <div class="col-lg-6 col-sm-6 contact-field">
                                    <input class="required amountLength form-control" name="mobile" type="text" placeholder="Mobile Number" maxlength="10" onkeypress="return isNumber(event)" required>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6 col-sm-6 contact-field">
                                    <input class="required form-control" name="company" type="text" placeholder="Company Name" required>
                                 </div>
                                 <div class="col-lg-6 col-sm-6 contact-field">
                                    <input class="required form-control validEmail officeEmailCheck" name="email" type="text" placeholder="Business Email" required>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="ts-section-title  text-center contact-field">
                                    <label>Message to Us</label>
                                 </div>
                                 <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <textarea class="required form-control" rows="4" name="message" required></textarea>
                                 </div>
                              </div>
                              <div class="row contact-field">
                                 <input type="hidden" name="subjectvalue" value="Atlassian Page, Contact us area">
                                 <input type="submit" class="tp-caption tp-resizeme" name="tabsubmit" value="Submit">
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
      <!-- Start footer -->
      <?php include('footer-upper.php'); ?>
      <!-- End footer -->
      </div>
      <script>
         jQuery(document).on('click','.cform',function(){
         	//alert (jQuery('.ctext1').text())
         	//jQuery('.hclass').val('text');
           jQuery('#validate_form').show();
           jQuery('.showMsg1').hide();
           document.getElementById("validate_form").reset();
         
         
         })
         jQuery(document).on('click','.cform1',function(){
           jQuery('#learn_datawatch_form').show();
           jQuery('.showMsg12').hide();
           document.getElementById("learn_datawatch_form").reset();
         
         
         })
         jQuery(document).on('click','.cform2',function(){
           jQuery('#learn_atlassian_form').show();
           jQuery('.showMsg123').hide();
           document.getElementById("learn_atlassian_form").reset();
         
         
         })
         jQuery(document).on('click','.cform3',function(){
           jQuery('#confluence_service').show();
           jQuery('.showMsg1234').hide();
           document.getElementById("confluence_service").reset();
         })
         
         jQuery(document).on('click','.cform4',function(){
           jQuery('#atlassian_training').show();
           jQuery('.showMsg12345').hide();
           document.getElementById("atlassian_training").reset();
         })
      </script>
      <!-- End / Page wrap --> <script type='text/javascript' src='js/jquery.js'></script> <script type='text/javascript' src='js/jquery-ui.js'></script> <script type='text/javascript' src='js/jquery-ui.js'></script> <script type='text/javascript' src='js/jquery-migrate.min.js'></script> <script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script> <script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script> <script type='text/javascript' src='js/loading.js'></script> <script type='text/javascript' src='js/accordion.js'></script> <script type='text/javascript' src='js/lasted-blog-slide.js'></script> <script type='text/javascript' src='js/comment-reply.min.js'></script> <script type='text/javascript' src='js/jquery.form.min.js'></script> <script type='text/javascript' src='js/scripts.js'></script> <script type='text/javascript' src='js/jquery.blockUI.min.js'></script> <script type='text/javascript' src='js/bootstrap.min.js'></script> <script type='text/javascript' src='js/jquery.appear.min.js'></script> <script type='text/javascript' src='js/jquery.countTo.js'></script> <script type='text/javascript' src='js/jquery.countdown.js'></script> <script type='text/javascript' src='js/jquery.fitvids.js'></script> <script type='text/javascript' src='js/readmore.js'></script> <script type='text/javascript' src='js/subscribre.js'></script> <script type='text/javascript' src='js/jquery.validate.min.js'></script> <script type='text/javascript' src='js/jquery.owl.carousel.js'></script> <script type='text/javascript' src='js/easyResponsiveTabs.js?'></script> <script type='text/javascript' src='js/jquery.circliful.min.js'></script> <script type='text/javascript' src='js/jquery.sticky.js'></script> <script type='text/javascript' src='js/jquery.cubeportfolio.min.js'></script> <script type='text/javascript' src='js/portfolio.js'></script> <script type='text/javascript' src='js/chosen.jquery.min.js'></script> <script type='text/javascript' src='js/accordion.min.js'></script> <script type='text/javascript' src='js/custom.js'></script> <script type='text/javascript' src='js/ajax.js'></script>
   </body>
</html>
<?php require_once "../inc/paths.php"; ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8" />
    <title>Contact A Future For Orphans Uganda || A Charity Organisation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Helping Orphans, Charity Organisation in Kampala Uganda, Helping the elderly" name="keywords" />
    <meta content="ricky luke" name="author" />
    
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/x-icon" href="../images/favicons/favicon.ico">
    <meta name="description" content="Contact A Future For Orphans Uganda today to donate and help change lives of those in need.">
    <script src="https://kit.fontawesome.com/e31240470d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/style.js" defer></script>

    <!-- CSS Files
    ================================================== -->
    <link href="../css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />        
</head>

<body>
    <!-- header begin -->
    <?php require_once "../inc/header.php"; ?>
    <!-- header close -->    

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader4.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Contact Us</h1>
									<p>We are glad to hear from you</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <section aria-label="section">
                <div class="container">
						<div class="row">
							
							<div class="col-lg-8 mb-sm-30">
							<h3>Do you have any question?</h3>
							
							<form name="contactForm" id="contact_form" class="form-border" method="post" action="email.php">
								<div class="field-set">
									<input type="text" name="name" id="name" class="form-control" placeholder="Your Name" maxlength="100" />
								</div>

								<div class="field-set">
									<input type="text" name="email" id="email" class="form-control" placeholder="Your Email" maxlength="100" />
								</div>

								<div class="field-set">
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" maxlength="20" />
								</div>

								<div class="field-set">
								    <small><i>Not more than 200 words.</i></small>
									<textarea name="message" id="message" class="form-control" placeholder="Your Message" maxlength="200"></textarea>
								</div>

								<div class="spacer-half"></div>

								<div id="submit">
									<input type="submit" id="send_message" value="Submit Form" class="btn btn-custom"  />
								</div>
								<div id="mail_success" class="success">Your message has been sent successfully.</div>
								<div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
							</form>
						</div>
						
						<div class="col-lg-4">

							<div class="padding40 box-rounded mb30" data-bgcolor="#F2F6FE">
								<h3>Uganda Office</h3>
								<address class="s1">
									<span><i class="id-color fa fa-map-marker fa-lg"></i>Parliamentary Av., Kampala</span>
									<span><i class="id-color fa fa-phone fa-lg"></i>+256 783282541</span>
                                    <span><i class="fa fa-envelope-o fa-lg"></i>P. O. Box, 110688, Kampala, Uganda</span>
									<span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:info@affouganda.org">info@affouganda.org</a></span>
								</address>
							</div>


							<div class="padding40 bg-color text-light box-rounded">
								<h3>International Contacts</h3>
								<address class="s1">
									<span><i class="fa fa-map-marker fa-lg"></i>Belgium, Turkey, Romania, Netherlands</span>
									<span><i class="fa fa-phone fa-lg"></i>Coming Soon</span>
									<span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:info@affouganda.org">info@affouganda.org</a></span>
								</address>
							</div>

						</div>
							
						</div>
					</div>

            </section>

        </div>
        <!-- content close -->
        
    <!-- footer begin -->
    <?php require_once "../inc/footer.php"; ?>
    <!-- footer close -->
		
        	
    <!-- Javascript Files
    ================================================== -->
    <script src="js/validation.js"></script>
</body>
</html>
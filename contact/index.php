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
    <link rel="icon" type="image/x-icon" href="../images/favicons/favicon-32x32.png">
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
    <div class="contact spacer">
    	<div class="container">
    		<div class="col-left spacer">
				<div class="spacer-half">
					<h1>Contact Us</h1>
					<p>Our team will respond back to you as quick as possible.</p>
				</div>

				<div>
					<h3>Do you have any question?</h3>
							
					<form name="contactForm" id="contact_form" class="form-border" method="post">
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
							<small><i>Not more than 200 words.</i></small><br>
							<textarea name="message" id="message" class="form-control" placeholder="Your Message" maxlength="200"></textarea>
						</div>

						<div class="spacer-half"></div>

								<div id="submit">
									<input type="submit" id="send_message" value="Send" class="btn btn-custom"  />
								</div>
								<div id="mail_success" class="success">Your message has been sent successfully.</div>
								<div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
							</form>
				</div>
            </div>

            <div class="col-right spacer">
            	<div>
					<h3>Uganda Office</h3>
					<address class="s1">
						<p><span class="id-color fa fa-map-marker"></span> Hoima road next to Total energies Namungona, Kasubi</p>
						<p><span class="id-color fa fa-phone"></span> +256 783282541</p>
                        <p><span class="fa fa-envelope-o"></span> P. O. Box, 110688, Kampala, Uganda</p>
						<a href="mailto:info@ffouganda.org"> <span class="fa fa-envelope-o"></span> info@ffouganda.org</a>
					</address>
				</div>

				<div>
					<h3>International Contacts</h3>
					<address>
						<p><span class="fa fa-map-marker"></span> Belgium, Turkey, Romania, Netherlands</p>
						<a href="https://wa.me/32466490141" target="_blank">
						  <span class="fa fa-whatsapp"></span> +32 466 490141
						</a><br>
						<a href="mailto:info@ffouganda.org"> <span class="fa fa-envelope-o"></span> info@ffouganda.org</a>
					</address>
				</div>
            </div>
    	</div>
    </div>
    <!-- content close -->
           
        
    <!-- footer begin -->
    <?php require_once "../inc/footer.php"; ?>
    <!-- footer close -->
		
        	
    <!-- Javascript Files
    ================================================== -->
    <script src="../js/validation.js"></script>
</body>
</html>
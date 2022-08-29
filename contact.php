<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wood Stock HTML Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2053 Leather Shop
http://www.tooplate.com/view/2053-leather-shop
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
 <!-- CSS FILES -->    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                    
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
        
<!--

Tooplate 2129 Crispy Kitchen

https://www.tooplate.com/view/2129-crispy-kitchen

-->

</head>
<body>

<nav class="navbar navbar-expand-lg bg-white shadow-lg">
      <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">
                    Myanmar Traditinal Food
                </a>
     <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="gellary.php">Gellary</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>
    <div id="tooplate_main">

        <header class="site-header site-contact-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Mingalabr</h1>

                            <strong class="text-white">We are happy to get in touch with you</strong>
                        </div>

                    </div>
                </div>
                
                <div class="overlay"></div>
            </header>
<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$phone=$_POST['t3'];
$mesg=$_POST['t4'];
if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
{$er="<font color='red' size='+1'> Message sent successfully</font>"; }
}

?>
     

      <section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Leave a message</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="#" method="post" role="form">
                                <div class="col-lg-6 col-6">
                                    <label for="name" class="form-label">Full Name</label>

                                    <input type="text" name="t1" id="t1" class="form-control" placeholder="Your Name" class="required input_field"/>
                                </div>

                                <div class="col-lg-6 col-6">
                                   <label for="contact-email" class="form-label">Email</label>

     <input type="email" name="t3" id="t3" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email" class=" validate-email required input_field"/>
                                </div>

                                <div class="col-12">

                                     <label for="phone" class="form-label">Phone Number</label>

                                    <input type="telephone" name="t2" id="t2"  class="form-control" placeholder="1234567890"/>

                                    <label for="contact-message" class="form-label">Message</label>

                                    <textarea class="form-control" rows="5" id="t4" name="t4" placeholder="Your Message"></textarea>
                                </div>

                                <div class="col-lg-5 col-12 ms-auto">
                                    <input type="submit" class="form-control" value="send" class="submit_button" id="sub" name="sub"/>
                                </div>
                            </form>
                            <h2><?php echo $er;?></h2>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4">

                            <h5>Weekdays</h5>

                            <div class="d-flex mb-lg-3">
                                <p><b>Monday to Friday<b></p>

                                <p class="ms-5"><b>9:00 AM - 08:00 PM<b></p>
                            </div>

                            <h5>Weekends</h5>

                            <div class="d-flex">
                                <p><b>Saturday and Sunday<b></p>

                                <p class="ms-5"><b>11:00 AM - 11:00 PM<b></p>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4 class="mt-5 mb-4">Chaik Wam Pogoda Road, Thamine, Yangon, Myanmar</h4>

                            <div class="google-map pt-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14920.891757756479!2d-73.83496372506556!3d40.8623107607295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28cbc17f4a0c3%3A0x9ae0f1e804a817d!2s121%20Einstein%20Loop%20N%2C%20Bronx%2C%20NY%2010475%2C%20USA!5e0!3m2!1sen!2sth!4v1650470337727!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        
	
    	 
           
            <div class="clear"></div>
            
    </div> <!-- END of tooplate_main -->
    


 <footer class="site-footer section-padding">
            
            <div class="container">
                
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-white mb-4 me-5">Myanmar Traditional Food</h4>
                    </div>

                    <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                        <p> Chaik Wam Pogoda Road, Thamine, Yangon, Myanmar</p>

                        <a href="" class="custom-btn btn btn-dark mt-2">Directions</a>
                    </div>

                    <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>

                        <p class="mb-2">Monday - Friday</p>

                        <p>9:00 AM - 08:00 PM</p>

                        <p>Tel: <a href="tel: 01787576581" class="tel-link">01787576581</a></p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Social</h6>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="https://twitter.com/search?q=tooplate.com&src=typed_query&f=live" target="_blank"
                                 class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    
                        <p class="copyright-text tooplate-mt60">Myanmar © 2022 Traditional Food, Ltd.
                        <br>Design By: <a rel="nofollow" href="https://www.tooplate.com/" target="_blank">Helary</a></p>
                        
                    </div>

                </div><!-- row ending -->
                
             </div><!-- container ending -->
             
        </footer>

 <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

<script src="js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        var $elem = $('#content');
        
        $('#nav_up').fadeIn('slow');
        
        $(window).bind('scrollstart', function(){
            $('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
        });
        $(window).bind('scrollstop', function(){
            $('#nav_up,#nav_down').stop().animate({'opacity':'1'});
        });
        
        $('#nav_up').click(
            function (e) {
                $('html, body').animate({scrollTop: '0px'}, 800);
            }
        );
    });
</script>

</body>
</html>
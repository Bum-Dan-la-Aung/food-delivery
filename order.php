<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>



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
                            <a class="nav-link active" href="menu.php">Menu</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>
    <div id="tooplate_main">
	
    	 <section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Let's Order</h2>
                        </div>
        <?php
			include("connection.php");
			$sel=mysql_query("select * from item  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			
			?>

			
                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="#" method="post" role="form">
                                <div class="col-lg-6 col-6">
                                    <label for="name" class="form-label">Food Name</label>

                                   <input value="<?php echo $mat['prod_no'];?>">
                                </div>

                                 <div class="col-lg-6 col-6">
                                    <label for="price" class="form-label">Food Price</label>

                                    <input value="<?php echo $mat['price'];?>">
                                </div>

                                 <div class="col-lg-6 col-6">
                                    <label class="form-label">User Name</label>

                                    <input type="text" name="nam" id="nam" class="form-control" class="input_field" placeholder="Your Name" required/>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label class="form-label">Phone Number</label>

                                    <input type="telephone" name="pho" id="pho"  class="form-control"   class="input_field" placeholder="your number" required/>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Address</label>

                                    <textarea class="form-control" rows="5" id="add" name="add" placeholder="Your address" required></textarea>
                                </div>

                                <div class="col-lg-5 col-12 ms-auto">
                                     <input type="submit" name="ord" id="ord" class="form-control" value="sent order" class="submit_button" />
                                </div>

                               <div class="col-lg-5 col-12 ms-auto">
                                    <input type="submit" name="Cancel" class="form-control" value="Cancel" class="submit_button" />
                              </div>
                            </form>
                           
                        </div>

             <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4" method="post">

                                                  <?php
                     error_reporting(1); 
                     include("connection.php");
            $sel=mysql_query("select * from img='$i' item  where item ");
            $mat=mysql_fetch_array($sel);
    
   echo "
   <td height='480' width='440' align='center'><img src='admin/image/$i' height='400' width='400'><br/>
 
 ".$arr['prod_no'].
   "<br>&nbsp;".$arr['price'].
  "<br><a href='order.php?img=$i'></a>
   
   </td>";
  
  $n++;


    ?>
                                

                          </div> 
            
        
        </div>  
            
            
            
            
            
            
        </div> <!-- END of content -->
                
		</section>
            
           
      </div>
        
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
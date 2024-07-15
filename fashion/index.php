<?php
ob_start();

if($_POST['enter']=="STORE")
{
	$code=$_POST['code'];
	$chest=$_POST['chest'];
	$waist=$_POST['waist'];
	$hips=$_POST['hips'];
	
	
	$s_pic=$_FILES['upload']['tmp_name'];
	$t_pic="images/".$_FILES['upload']['name'];
	
	move_uploaded_file($s_pic,$t_pic);
	
	
	
	

	include "connect.php";

	$q="insert myinfo (code,chest,waist,hips,picture) values ('$code','$chest','$waist','$hips','$t_pic')";
	
	$res=mysql_query($q,$link);
	if(!$res)
	{
		print mysql_error();
	}
	else
	{
		
		header("Location: products.php");
	}
	
	
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>MYNTRA FASHION</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">

    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <strong><span>MYNTRA</span> Fashion</strong>
                    </a>

                   

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
							
                            <li class="nav-item">
                                <a class="nav-link active" href="products.php">Products</a>
                            </li>

                           
                        </ul>


                           
                        </ul>

                       
                    </div>
                </div>
            </nav>

            <section class="slick-slideshow">   
                <div class="slick-custom">
                    <img src="images/slideshow/fashion1.jpg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Cool Fashion</h1>

                                   

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="slick-custom">
                    <img src="images/slideshow/fashion2.png" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 align="right" class="slick-title">Talk to us</h1>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

           

            <section class="front-product">
                <div class="container-fluid p-0">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12">
                            <img src="images/retail-shop-owner-mask-social-distancing-shopping.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="px-5 py-5 py-lg-0">
                                <p>Wanna rock and outfit but u sure if it will suit or not ?
Here, try this body type analysis to shop just the perfect look that suits you</p>
                                <h2 class="mb-4"><span>Please Enter</span>Given Details</h2>

                                <p class="lead mb-4"></p>
 <form action="index.php" method="post"  enctype="multipart/form-data" >
 <table>
<tr>
<td>CODE</td>
<td><input type="text" name="code"></td>
</tr>

<tr>
<td>Chest(inches) : </td>
<td><input type="text" name="chest"></td>
</tr>

<tr>
<td>Waist(inches) : </td>
<td><input type="text" name="waist"></td>
</tr>

<tr>
<td>Hips(inches) : </td>
<td><input type="text" name="hips"></td>
</tr>

<tr>
<td>SELECT PIC : </td>
<td><input type="file" name="upload"></td>
</tr>



<tr>
<td colspan=2><input type="submit" name="enter" value="STORE"></td>

</tr>
</table>
                              
                          
        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="index.html">Myntra</a> Fashion</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Myntra-Fashion</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="#" target="_blank">CodeHackHers</a></p>
                    </div>

                  
                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

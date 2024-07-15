
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mantra-fashion</title>

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
                        <strong><span>Mantra</span> Fashion</strong>
                    </a>

                    

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="products.php">Products</a>
                            </li>

                                  </ul>

                        <div class="d-none d-lg-block">
                            <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                            <a href="product-detail.html" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">We provide you</span>
                                <span class="d-block text-dark">Fashionable Stuffs</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

           <section class="product-detail section-padding">
		    <table border="0" align=center cellpadding=20>
			<tr>
	<?php
	
			include "connect.php";

			$q="select * from myinfo";
			$res=mysql_query($q,$link);
			while($row=mysql_fetch_array($res))
			{
				print "
				<td>
				<table cellpadding=20>
					<tr>
					<td>$row[0]</td><td rowspan='4'><img src='$row[4]' width=200 height=300 border='2'></td>
					</tr>
					<tr><td style='font-size:22px'>Chest= $row[1] inches</td></tr>
					<tr><td style='font-size:22px'>Waist= $row[2] inches</td></tr>
					<tr><td style='font-size:22px'>Hips= $row[3] inches</td></tr>
					</table>
					</td>
					
					
				
				";
			}
		
		?>
		
		</tr>
		</table>
		
		
		
<form action=index.php method=post>
<tr>
<td colspan=12 align="center">
<input type="submit" value=INSERT>
</td>
</tr>
	</table>

                        
        </main>

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
        <!-- CART MODAL -->
        <div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image" alt="">
                            </div>

                           
                            </div>
                        </div>
                    </div>

                   
                    </div>
                </div>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
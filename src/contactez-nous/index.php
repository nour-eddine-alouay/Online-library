<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);
?>




<!doctype html>
<html lang="en">
  <head>
  	<title>Contactez-nous</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.js" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link href="../header/cssheader/style.css" rel="stylesheet">
            <!---------------------------- Header PART -------------------------------->
  

			<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /><link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./footer/css/styleslider.css">
    <link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.js" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">


    <link href="./footer/css/carousel.css" rel="stylesheet">
    <link href="../header/cssheader/style.css" rel="stylesheet">
    <script src="./footer/js/randomImage.js" defer></script>
    <script src="./footer/js/jquery-3.5.1.min.js"></script>
    <script src="./footer/js/txtSize.js"></script>
    
            <!---------------------------- Header PART -------------------------------->
	</head>

	<header>
  <section class="ftco-section">
    <div class="container-fluid px-md-5">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" >Temp Name<span>temporary catchphrase</span></a>
						</div>
						<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
							<form action="../produits%20test/?search=&Prixmin=&Scoremin=&Type=&Prixmax=&Genre=&Language=" class="searchform order-lg-last">
			          <div class="form-group d-flex">
			            <input type="text" class="form-control pl-3" placeholder="chercher">
                  <?php
                  if(isset($_GET['search']))
                  {
                      $searchV = $_GET['search'];
                  }
                  ?>
			            <button  class="form-control search"><span class="fa fa-search"></span></button>
			          </div>
			        </form>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="../carousel/index.php" class="nav-link">Acceuil</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genres</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              <?php
                      $sql = "SELECT name_g FROM genre";
                      $genre = mysqli_query ($connection, $sql);
                    

                         while ($_genre = mysqli_fetch_array($genre,MYSQLI_ASSOC)):;?>
                              <a class="dropdown-item" href="../produits%20test/?search=&Prixmin=&Scoremin=&Type=&Prixmax=&Genre=<?= $_genre['name_g'];?>&Language=">
                                        <?php echo $_genre['name_g'];?>
                              </a>
                          <?php endwhile;?>
              </div>
            </li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              <?php
                      $sql = "SELECT name_t FROM Type";
                      $type = mysqli_query ($connection, $sql);
                    

                         while ($_type = mysqli_fetch_array($type,MYSQLI_ASSOC)):;?>
                              <a class="dropdown-item" href="../produits%20test/?search=&Prixmin=&Scoremin=&Type=<?= $_type['name_t'];?>&Prixmax=&Genre=&Language=">
                                        <?php echo $_type['name_t'];?>
                              </a>
                          <?php endwhile;?>
              </div>
            </li>
            <li class="nav-item"><a href="../produits test/?search=&Prixmin=&Scoremin=&Type=&Prixmax=&Genre=&Language=" class="nav-link">Galleries</a></li>
	          <li class="nav-item"><a href="../contactez-nous/index.php" class="nav-link">Contactez-nous</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	</section>
</header>
	  


	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contactez-nous</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Votre message a été envoyer, merci
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" action="./php/sendEmail.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Nom complet">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Emvoyer le message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contact-nous</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+212XXXXXXXXX</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="#">XXXXXXXXXXXXx.xxx</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Website</span> <a href="../carousel/index.html">Library</a></p>
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

	<footer class="footer-20192">
  <div class="site-section">
    <div class="container">

      <div class="cta d-block d-md-flex align-items-center px-5">
        <div>
          <h2 class="mb-0">Vous ne trouvez pas un livre que vous aimez ?</h2>
          <h3 class="text-dark">nous nous assurerons de l'apporter!</h3>
        </div>
        <div class="ml-auto">
          <a href="../contactez-nous/index.php" class="btn btn-dark rounded-0 py-3 px-5">Contactez-nous</a>
        </div>
      </div>
      <div class="row">

        <div class="col-sm">
          <a href="" class="footer-logo">monter en haut</a>
          <p class="copyright">
            <small>&copy; 2022</small>
          </p>
        </div>
        <div class="col-sm">
          <h3>Company</h3>
          <ul class="list-unstyled links">
            <li><a href="../learn_more/about.php">À propos de nous</a></li>
            <li><a href="../contactez-nous/index.php">Contactez-nous</a></li>
          </ul>
        </div>
        <div class="col-sm">
          <h3>Further Information</h3>
          <ul class="list-unstyled links">
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        
        
      </div>
    </div>
  </div>
</footer>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>



  <script src="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="../header/js/popper.js"></script>
  <script src="../header/js/bootstrap.min.js"></script>
  <script src="../header/js/main.js"></script>
  <script src="../../dist/js/bootstrap.bundle.min.js"></script>

<script src="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="./header/js/jquery.min.js"></script>
<script src="../header/js/popper.js"></script>
<script src="../header/js/bootstrap.min.js"></script>
<script src="../header/js/main.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="./header/js/scriptslider.js"></script>

	</body>
</html>


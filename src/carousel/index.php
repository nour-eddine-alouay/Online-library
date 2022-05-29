<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);


$selectType = "SELECT * FROM books WHERE populaire=1";
$type_run = mysqli_query($connection, $selectType);
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /><link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/styleslider.css">
    <link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.js" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="./css/carousel.css" rel="stylesheet"></link>
    <link href="../header/cssheader/style.css" rel="stylesheet"></link>
    <script src="js/randomImage.js" defer></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/txtSize.js"></script>
  </head>
  <body>
    
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

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"  >
    <div class="carousel-indicators" >
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('./images/b2.jpg');background-repeat: no-repeat;
      background-size: 100%;">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 style="color:white;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">La lecture agrandit l'âme, et un ami éclairé la console.</h1>
            <p>Voltaire</p>
            <p><a class="btn btn-lg btn-primary" href="../Contactez-nous/index.php">Contactez nous</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('./images/b1.jpg');background-repeat: no-repeat;
      background-size: 100%;">
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color:white;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Entre le lecteur et la lecture il y a toujours ce compagnon invisible qui vous promène quelque part: c'est l'auteur.</h1>
            <p>Nacira Boukli-Hacene</p>
            <p><a class="btn btn-lg btn-primary" href="../learn_more/about.php">à propos de nous</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('./images/b3.jpg');background-repeat: no-repeat;
      background-size: 100%;">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 style="color:white;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">Chacune de nos lectures laisse une graine qui germe .</h1>
            <p>Jules Renard</p>
            <p><a class="btn btn-lg btn-primary" href="../produits test/?search=&Prixmin=&Scoremin=&Type=&Prixmax=&Genre=&Language=">parcourir la galerie</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>












  <center> <h2 colspan="4" >← Livres populaires →</h2> </center>
  <div class="row">
    <div class="swiper books-slider">
        <div class="swiper-wrapper">

            <?php
            if(mysqli_num_rows($type_run) > 0)
            {
                foreach($type_run as $_items)
                {
                ?>
                    <a href="../BookPage/?<?= $_items['id']; ?>" width="400" height="500" class="swiper-slide"><img src="<?= $_items['img']; ?>" alt=""></a>
                <?php
                }
              }
            ?>
        </div>
        <img src="images/stand.png" class="stand" alt="">
    </div>

</div>
</main>














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















  <script src="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="../header/js/popper.js"></script>
  <script src="../header/js/bootstrap.min.js"></script>
  <script src="../header/js/main.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="./js/scriptslider.js"></script>

  </body>
</html>

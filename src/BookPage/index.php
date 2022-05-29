<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$id = explode("/?", $link)[1];
$select = "SELECT * FROM books WHERE id= $id";
$query_run = mysqli_query($connection, $select);

$selectGenre = "SELECT * FROM genre WHERE id=(SELECT genre FROM books WHERE id=$id)";
$genre_run = mysqli_query($connection, $selectGenre);

$selectType = "SELECT * FROM type WHERE id=(SELECT type FROM books WHERE id=$id)";
$type_run = mysqli_query($connection, $selectType);

$selectLanguage = "SELECT * FROM language WHERE id=(SELECT language FROM books WHERE id=$id)";
$language_run = mysqli_query($connection, $selectLanguage);
?>




<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sample Product">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">

    <!---------------------------- Bootstrap PART -------------------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Product example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">

    

    <!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

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

    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">

      <!---------------------------- Bootstrap PART -------------------------------->
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
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode">

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
<?php

if(mysqli_num_rows($query_run) > 0)
{
    foreach($query_run as $items)
    {
        ?>
 <section class="u-align-center u-clearfix u-section-1" id="carousel_98d8">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-expanded-width u-product u-white u-product-1">
          <div class="u-container-layout u-container-layout-1">
            <img src="<?= $items['img']; ?>" alt="" class="u-image u-image-default u-product-control u-image-1" data-image-width="1000" data-image-height="1500">
            <div class="u-align-center u-container-style u-grey-5 u-group u-shape-rectangle u-group-1">
              
              <div class="u-container-layout u-container-layout-2">
              <div class="u-product-title-link"  style="height: 5px;font-size: 3rem; font-weight: 700;"><?= $items['title']; ?></div>
                <div class="u-product-control u-product-price u-product-price-1">                
                  <div class="u-price-wrapper u-spacing-10">
                    <div class="u-price" style="text-align: left; font-size: 2rem; font-weight: 500;"><?= $items['prix']; ?>$</div>                    
                  </div>
                </div>

                <h2 class="u-product-control u-text u-text-1">
                </h2><!--/product_title--><!--product_content-->
                <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
                  <p><?= $items['description']; ?></p><!--/product_content_content-->
                </div><!--/product_content--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
                  <p style=" font-size: 1.5rem; font-weight: 500;"><?= $items['author']; ?></p>
                  <div class="u-price" style="text-align: left; font-size: 1.5rem; font-weight: 500;">Score: <?= $items['score']; ?></div>
                    <?php
                    if(mysqli_num_rows($genre_run) > 0)
                    {
                        foreach($genre_run as $_items)
                        {
                        ?>
                           <div class="u-price" style="text-align: left; font-size: 1.5rem; font-weight: 500;">Genre: <?= $_items['name_g']; ?></div>
                        <?php
                        }
                      }
                    ?>

                    <?php
                    if(mysqli_num_rows($type_run) > 0)
                    {
                        foreach($type_run as $_items)
                        {
                        ?>
                           <div class="u-price" style="text-align: left; font-size: 1.5rem; font-weight: 500;">Type: <?= $_items['name_t']; ?></div>
                        <?php
                        }
                      }
                    ?>

                    
                    <?php
                    if(mysqli_num_rows($language_run) > 0)
                    {
                        foreach($language_run as $_items)
                        {
                        ?>
                           <div class="u-price" style="text-align: left; font-size: 1.5rem; font-weight: 500;">Language: <?= $_items['name_l']; ?></div>
                        <?php
                        }
                      }
                    ?>
              </div>
            </div>
          </div>
        </div><!--/product_item--><!--/product-->
      </div>
    </section>
        <?php
    }
}
else
{
    ?>
           <center> <h1 colspan="4" >No Record Found</h1> </center>
    <?php
}
?>
   
    
    
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

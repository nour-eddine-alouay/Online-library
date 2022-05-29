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
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>
<body>



    <div class="s007">
      <form>
        <div class="inner-form" >
          <div class="basic-search">
            <div class="input-field">
              <div class="icon-wrap">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                  <path d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z"></path>
                </svg>
              </div>
              <input id="search" type="text" name='search' placeholder="chercher..." />

            </div>
          </div>
          <div class="advance-search">
            <span class="desc">recherche avancer</span>
            <div class="row">
              <div class="input-field">
                <div class="input-select">
                  <input type="number" step="0.01" min="0" placeholder="Prix min" name="Prixmin">
                </div>
              </div>
              <div class="input-field" >
                <div class="input-select" >
                  <input type="number" step="0.01" min="0" placeholder="Score" name="Scoremin" >
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="Type">
                    <option placeholder="" value="">Type</option>
                    <?php
                      $sql = "SELECT name_t FROM type";
                      $type = mysqli_query ($connection, $sql);
                    

                         while ($_type = mysqli_fetch_array($type,MYSQLI_ASSOC)):;?>
                              <option value="<?php echo $_type['name_t'];?>">
                                        <?php echo $_type['name_t'];?>
                              </option>
                          <?php endwhile;?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row second">
              <div class="input-field">
                <div class="input-select">
                    <input type="number" step="0.01" min="0" placeholder="Prix max" name="Prixmax">
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="Genre">
                    <option placeholder="" value="">Genre</option>
                    <?php
                      $sql = "SELECT name_g FROM genre";
                      $genre = mysqli_query ($connection, $sql);
                    

                         while ($_genre = mysqli_fetch_array($genre,MYSQLI_ASSOC)):;?>
                              <option value="<?php echo $_genre['name_g'];?>">
                                        <?php echo $_genre['name_g'];?>
                              </option>
                          <?php endwhile;?>
                  </select>
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="Language">
                    <option placeholder="" value="">Language</option>
                    <?php
                      $sql = "SELECT name_l FROM language";
                      $language = mysqli_query ($connection, $sql);
                    

                         while ($_language = mysqli_fetch_array($language,MYSQLI_ASSOC)):;?>
                              <option value="<?php echo $_language['name_l'];?>">
                                        <?php echo $_language['name_l'];?>
                              </option>
                          <?php endwhile;?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row third">
              <div class="input-field">
                <button class="btn-search">Chercher</button>
                <button class="btn-delete" onclick="location.href='./?search=&Prixmin=&Scoremin=0&Type=&Prixmax=&Genre=&Language=';"  id="Affichertout">Afficher tout</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
    <script>
      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
      const choices = new Choices('select',
      {
        searchEnabled: false,
        removeItemButton: true,
        itemSelectText: '',
      });
      for (let i = 0; i < customSelects.length; i++)
      {
        customSelects[i].addEventListener('addItem', function(event)
        {
          if (event.detail.value)
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('valid')
            parent.classList.remove('invalid')
          }
          else
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('invalid')
            parent.classList.remove('valid')
          }
        }, false);
      }
      deleteBtn.addEventListener("click", function(e)
      {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++)
        {
          deleteAll[i].click();
        }
      });

    </script>
</body>
<?php

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// read all row from database table
$sql = "SELECT * FROM books";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}


if(isset($_GET['search']))
{
    error_reporting(E_ERROR | E_PARSE);
    $searchV = $_GET['search'];
    $genreV = $_GET['Genre'];
    $typeV = $_GET['Type'];
    $languageV = $_GET['Language'];

    $prixminV = $_GET['Prixmin'];
    $prixmaxV = $_GET['Prixmax'];
    $scoreminV = $_GET['Scoremin'];

    
    $query = "SELECT * FROM books WHERE title LIKE '%$searchV%'";
    if (!empty($genreV))  
    {
      $query .= "AND genre=(SELECT id FROM genre WHERE name_g LIKE '%$genreV%') ";
    }
    if (!empty($typeV))  
    {
      $query .= "AND type=(SELECT id FROM type WHERE name_t LIKE '%$typeV%') ";
    }
    if (!empty($languageV))  
    {
      $query .= "AND language=(SELECT id FROM language WHERE name_l LIKE '%$languageV%') ";
    }

    if (!empty($prixminV))  
    {
      $query .= "AND prix >= $prixminV ";
    }
    if (!empty($prixmaxV))  
    {
      $query .= "AND prix < $prixmaxV ";
    }
    if (!empty($scoreminV))  
    {
      $query .= "AND score >= $scoreminV ";
    }
    
    
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $items)
        {
            ?>
            <div class='height d-flex justify-content-center align-items-center' >
                <div class='card p-3'>
                    <div class='d-flex justify-content-between align-items-center ' style='height:20vh;width:80vw'>
                        <div class='mt-2'>
                            <h4 class='text-uppercase'><?= $items['title']; ?></h4>
                            <div class='mt-5'>
                                <h5 class='text-uppercase mb-0'><?= $items['prix']; ?> $</h5>
                                <div class='d-flex flex-row user-ratings'>
                                    
                                    <h6 class='text-muted ml-1'><?= $items['score']; ?>/5</h6>
                                </div>
                            </div>
                        </div>
                        <div class='image' > <img src='<?= $items['img']; ?>' style='height:20vh;width:8vw'> </div>
                    </div>
                    <div class='d-flex justify-content-between align-items-center mt-2 mb-2'> <span>Auteur: <?= $items['author']; ?></span>
                        <div class='colors'> <span></span> <span></span> <span></span> <span></span> </div>
                    </div >
                    <p style='width:90vw'><?= $items['description']; ?></p> <button class='btn btn-info' onclick="location.href='../BookPage/?<?= $items['id']; ?>';">plus d'information</button>
                </div>
            </div>
            <?php
        }
    }
    else
    {
        ?>
               <center> <h1 colspan="4" >No Record Found</h1> </center>
        <?php
    }
}

?>



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


    <script src="../../dist/js/bootstrap.bundle.min.js"></script>

  <script src="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="./footer/js/jquery.min.js"></script>
  <script src="../header/js/popper.js"></script>
  <script src="../header/js/bootstrap.min.js"></script>
  <script src="../header/js/main.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="./footer/js/scriptslider.js"></script>
  </body>
</html>

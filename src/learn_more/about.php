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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
<link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.js" rel="stylesheet">


    <!-- Bootstrap core CSS -->
<link href="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="../carousel/css/carousel.css" rel="stylesheet">
    <script src="../carousel/js/randomImage.js" defer></script>
    <script src="../carousel/js/jquery-3.6.0.js"></script>
    <script src="../carousel/js/txtSize.js"></script>
    <script src="../carousel/js/menu.js"></script>
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

    
    <section id="pageContent" class="text">
        <main>
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dignissimos, enim aut impedit officia provident, corporis ad aliquid error eligendi laudantium nobis sunt voluptas sed nulla debitis porro ipsum ratione alias? Aperiam dolore corrupti odit adipisci magni dicta debitis natus recusandae facere veritatis consequuntur consequatur suscipit architecto provident quis, deserunt error minus ut animi asperiores repellendus. Cum similique quisquam vero eveniet amet, molestias saepe veniam quia labore maxime pariatur deserunt rem at error consequatur nisi debitis neque voluptate a, ducimus laboriosam quaerat impedit. Cupiditate itaque eum cumque! Saepe quidem minima ad voluptate aliquid dignissimos nisi officiis deserunt tempore repellat quam possimus nesciunt placeat similique et voluptatem, sed modi, facere voluptatum odit quas iste. Iste officiis eaque architecto accusamus quis dicta similique exercitationem, natus excepturi aliquid. Perferendis, nostrum quia saepe pariatur nesciunt unde rerum? <span data-footnote="Donec dictum blandit interdum. Vivamus eleifend massa neque, eu pharetra sapien venenatis a.">Sapiente</span> ad nihil quam dignissimos iusto ea aut minima nemo error autem, deserunt sed nulla blanditiis possimus, eveniet sequi id est et eius officia quaerat eum obcaecati optio. Eaque porro omnis est explicabo quis. Iure ipsam consequuntur molestiae eius, sapiente corporis esse aspernatur porro veritatis hic officiis, sunt ea eligendi sed suscipit delectus itaque fuga cum fugit! Reiciendis doloribus aspernatur adipisci nam totam perferendis quasi qui hic!</p>
            <h2>Lorem ipsum dolor sit.</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis ea quidem unde accusantium delectus voluptatum illum aliquid quasi consectetur ipsa voluptate cum soluta aut voluptas, possimus ullam recusandae saepe fugit culpa blanditiis quo nemo. Necessitatibus fuga minus hic. Voluptatibus exercitationem totam recusandae nobis doloremque aperiam rerum unde iste, non, tenetur eaque? Consequatur sunt facere iste saepe nobis iusto omnis harum quidem? Earum sequi laudantium ullam nulla, ea, rem velit aut, qui architecto molestiae dolore atque error! Animi iure accusantium in blanditiis repudiandae totam sapiente repellat itaque aperiam voluptate qui facilis illum iste, mollitia dicta, corrupti quia neque eaque laudantium at exercitationem accusamus temporibus explicabo? Aperiam hic porro enim sequi, eligendi dolor molestiae quas placeat voluptatem ratione nulla eos id qui suscipit dolore repellendus beatae tempora odio debitis natus illo explicabo ipsa nobis iste! Autem, sed ea! Ipsa iste libero fugit iusto dolores veniam. Minus fugiat officia earum, illo rerum quasi tenetur libero? Harum sunt voluptate explicabo iure est, numquam repellat, maiores doloremque eaque quibusdam amet obcaecati at quasi hic. Molestias inventore tempora quos non quia. Illum dolor, iusto tempora itaque ea rerum est. Aspernatur vitae maiores voluptates labore magni autem ullam unde asperiores. Nobis illo aut ipsa dolorum eius eaque!</p>
            <p>Delectus sequi totam nulla pariatur! Dicta exercitationem numquam amet ut possimus? Sunt nam minus dolorem sequi perspiciatis voluptatum, autem incidunt libero? Est ut ab facere laborum excepturi, aperiam soluta ullam unde reprehenderit, odit iure <span data-footnote="Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;">repudiandae</span> corrupti quas, deleniti alias magni numquam cupiditate at labore quam dolorem. Commodi et, labore natus ullam inventore, voluptatibus perferendis porro saepe ab facilis asperiores eius temporibus nihil expedita numquam repellat pariatur aut impedit doloremque iste voluptates. Soluta reprehenderit voluptas dignissimos beatae molestiae praesentium, ipsa aspernatur, provident aut et totam saepe ex perferendis nostrum quod minima molestias excepturi. Ab quam aliquid numquam perspiciatis omnis optio quos iure modi distinctio alias totam molestias quia impedit, quis, quas odit itaque nostrum voluptates deleniti a nisi consectetur error. Amet mollitia laudantium consequatur iste, quae nisi excepturi libero architecto in, necessitatibus molestiae omnis officia reiciendis quidem accusantium quasi. Inventore soluta doloribus natus ab accusantium, minima quo architecto quisquam eum, magnam voluptatibus nam! Iste architecto earum a quasi tempora eligendi, ipsum obcaecati iure? Id labore dolor quod, commodi veritatis voluptatem accusantium modi assumenda laborum magnam explicabo est aut maiores fuga totam nostrum, quaerat nulla quam officiis eum dolorum harum. Odio debitis fugiat, asperiores laudantium cupiditate accusamus at! Aperiam ab repellendus beatae?</p>
            <p>Eveniet adipisci quod provident praesentium deleniti atque aliquam possimus totam et incidunt porro voluptate eos temporibus nobis itaque quos nam, quis voluptatibus consequatur beatae dolorem fugit natus sit. <span data-footnote="Quisque commodo eu turpis vel pharetra. Curabitur iaculis risus eget finibus fermentum.">Commodi repellendus mollitia delectus</span> ipsum libero voluptate, error eaque, voluptatem nostrum tempore culpa reiciendis ad veniam earum dicta vero aliquam temporibus blanditiis, eius velit eos debitis minus est. Dicta, doloremque libero. Tenetur, exercitationem odit modi fugiat, optio neque reiciendis architecto aut, nesciunt unde perspiciatis? Recusandae dignissimos nobis hic voluptatem, ipsum nesciunt similique mollitia accusantium sit eius quisquam in esse! Cumque amet voluptatem perspiciatis porro asperiores rerum tempore doloremque ea nisi deleniti ratione, alias fugit soluta sunt distinctio reprehenderit dolore exercitationem? Recusandae in accusantium officiis est qui atque perspiciatis, dolorem magnam quisquam doloremque dolore repudiandae ducimus ad animi ex? Odio ratione officiis exercitationem id beatae commodi nisi est odit, sed nesciunt harum autem asperiores accusamus illo iusto recusandae voluptatibus explicabo rem, ipsum minus perspiciatis! Officiis impedit unde, quibusdam animi illum et hic nam pariatur nisi molestias vel, eligendi aspernatur quod? Fugit ut deleniti quae sapiente voluptatum architecto vitae ipsa soluta voluptatem nobis. Nihil, quas vero magnam magni quisquam sed aliquam rem saepe eveniet eligendi nobis voluptate tempore libero? Quia incidunt placeat necessitatibus. Quam?</p>
        </main>
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

  <script src="../../bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="../carousel/js/jquery.min.js"></script>
  <script src="../header/js/popper.js"></script>
  <script src="../header/js/bootstrap.min.js"></script>
  <script src="../header/js/main.js"></script>
</body>
</html>

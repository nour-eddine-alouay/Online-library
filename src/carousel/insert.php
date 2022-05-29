<!-- Cette page est dédié pour la creation du base de donnée sauvegardant les livres disponibles dans la bibliothèque et l'ajout de nouveau libre à la base de donnée -->
<?php
// Include db_connexiom
require_once "connexion.php";
 
// Define variables 
$titre = $nom_auteur = $type_livre = $description_du_livre =$num_edition =$src_image=$prix = "";
$titreerr = $nom_auteurerr= $type_livreerr = $description_du_livreerr =$num_editionerr =$src_imageerr=$prixerr = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Valide titre
    $input_titre = trim($_POST["titre"]);
    if(empty($input_titre)){
        $titreerr = "Entrez le titre ";
    } elseif(!filter_var($input_titre, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $titreerr = "Entrez un titre valide";
    } else{
        $titre = $input_titre;
    }
    
    // Valide nom
    $input_nom_auteur = trim($_POST["nom_auteur"]);
    if(empty($input_nom_auteur)){
        $nom_auteurerr = "Entrez le nom de l'auteur";     
    } else{
        $nom_auteur = $input_nom_auteur;
    }
     // Valide type
     $input_type_livre = trim($_POST["type_livre"]);
    if(empty($input_type_livre)){
       $type_livreerr = "Entrez le type de livre: roman ou nouvelle...";     
    } else{
        $type_livre = $input_type_livre;
    }
    
    // Valide description
    $input_description_du_livre = trim($_POST["description_du_livre"]);
    if(empty($input_description_du_livre)){
        $description_du_livreerr = "Merci d'entrer la description du livre";     
    }else{
        $description_du_livre = $input_description_du_livre;
    }

    // Valide description
    $input_description_du_livre = trim($_POST["description_du_livre"]);
    if(empty($input_description_du_livre)){
        $description_du_livreerr = "Merci d'entrer la description du livre";     
    }else{
        $description_du_livre = $input_description_du_livre;
    }

    // Valide num_edition
    $input_num_edition = trim($_POST["num_edition"]);
    if(empty($input_num_edition)){
        $num_editionerr = "Merci d'entrer le numéro de l'edition";     
    }else{
        $num_edition = $input_num_edition;
    }

    // Valide src_image
    $input_src_image = trim($_POST["src_image"]);
    if(empty($input_src_image)){
        $src_imageerr = "Merci d'entrer le chemin ou le lien de l'image";     
    }else{
        $src_image = $input_src_image;
    }
    // Valide prix
    $input_prix = trim($_POST["prix"]);
    if(empty($input_prix)){
        $prixerr = "Merci d'entrer le prix";     
    }else{
        $prix = $input_prix;
    }
    
    // Check errors before inserting in database
    if(empty($titreerr) && empty($nom_auteurerr) && empty($description_du_livreerr) && empty($num_editionerr) && empty($src_imageerr) && empty($prixerr)){
        // insert
        $sql = "INSERT INTO livres (titre, nom_auteur,type_livre, description_du_livre, num_edition, src_image, prix) VALUES (?, ?, ?,?, ?, ?, ?)";
        /*if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_titre,$param_nom_auteur,$param_type_livre,$param_description_du_livre,$param_num_edition,$param_src_image,$param_prix);
            
            // Set parameters
            $param_titre=$titre;
            $param_nom_auteur=$nom_auteur;
            $param_type_livre=$type_livre;
            $param_description_du_livre=$description_du_livre;
            $param_num_edition=$num_edition;
            $param_src_image=$src_image;
            $param_prix=$prix;
            
            
            if($stmt->execute()){
                
                header("location: insert.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }*/
    
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un livre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Ajouter un livre</h2>
                    <p>Merci de remplir ce formulaire et de l'envoyer</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" name="titre" class="form-control <?php echo (!empty($titreerr)) ? 'is-invalid' : ''; ?>" value="<?php echo $titre; ?>">
                            <span class="invalid-feedback"><?php echo $titreerr;?></span>
                        </div>
                        <div class="form-group">
                            <label>Nom de l'auteur</label>
                            <input type="text" name="nom_auteur" class="form-control <?php echo (!empty($nom_auteurerr)) ? 'is-invalid' : ''; ?>" value="<?php echo $nom_auteur; ?>">
                            <span class="invalid-feedback"><?php echo $nom_auteurerr;?></span>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type_livre" class="form-control <?php echo (!empty($type_livreerr)) ? 'is-invalid' : ''; ?>" value="<?php echo $type_livre; ?>">
                            <span class="invalid-feedback"><?php echo $type_livreerr;?></span>
                        </div>
                        <div class="form-group">
                            <label>Description du livre</label>
                            <input type="text" name="description_du_livre" class="form-control <?php echo (!empty($description_du_livreerr)) ? 'is-invalid' : ''; ?>" value="<?php echo $description_du_livre; ?>">
                            <span class="invalid-feedback"><?php echo $description_du_livreerr;?></span>
                        </div>
                        <div class="form-group">
                            <label>Numéro de l'édition</label>
                            <input type="text" name="num_edition" class="form-control <?php echo (!empty($num_editionerr)) ? 'is-invalid' : ''; ?>" value="<?php echo $num_edition; ?>">
                            <span class="invalid-feedback"><?php echo $num_editionerr;?></span>
                        </div>
                        <div class="form-group">
                            <label>Chemin ou lien de l'image</label>
                            <input type="text" name="src_image" class="form-control <?php echo (!empty($src_imageerr)) ? 'is-invalid' : ''; ?>" value="<?php echo $src_image; ?>">
                            <span class="invalid-feedback"><?php echo $src_imageerr;?></span>
                        </div>
                        <div class="form-group">
                            <label>Prix</label>
                            <input type="text" name="prix" class="form-control <?php echo (!empty($prixerr)) ? 'is-invalid' : ''; ?>" value="<?php echo $prix; ?>">
                            <span class="invalid-feedback"><?php echo $prixerr;?></span>
                        </div>



                        <input type="submit" class="btn btn-outline-primary" value="Submit">
                        <a href="insert.php" class="btn btn-outline-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
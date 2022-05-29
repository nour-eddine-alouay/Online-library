<?php
$servername="localhost";
$username="root";
$password="";
//create connection
$mysqli=new mysqli($servername,$username,$password);
//check connection
if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}else{
    
echo "Connected successfully<br>";
}
//create data base
$sql="CREATE DATABASE IF NOT EXISTS biblio";
if($mysqli->query($sql)===TRUE){
    echo "Data base created successfully<br>";
}else{
    echo "Error creating database: " . $mysqli->error . "<br>";
}
$dbname = "biblio";
$mysqli=new mysqli($servername,$username,$password,$dbname);
//après la creation de la base de données on met les commande concernant la creation de la base de données comme commentaire et on cree la table
$sql="CREATE TABLE IF NOT EXISTS livres(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,titre VARCHAR(30) NOT NULL,nom_auteur VARCHAR(30) NOT NULL,type_livre VARCHAR(30),description_de_livre VARCHAR(500),num_edition INT NOT NULL,src_image VARCHAR(300),prix FLOAT)";
if($mysqli->query($sql)===TRUE){
    echo "Table livres created succesfully<br>";
}else{
    echo "Error creating livres: " . $mysqli->error . "<br>";
}
$mysqli->close();
?>
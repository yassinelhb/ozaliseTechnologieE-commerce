<?php

 
    $json = "";
    
        $id =isset($_GET['id']) ? $_GET['id'] : false;
        // requête qui récupère les départements selon la région
        if(false !== $idr)
{
        $requete = "SELECT referance FROM produit WHERE famille = '$id'";
    
      
    // connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=hanout', 'root', '');
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
      
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
        $json.= $donnees['referance'];
       
    }
      echo $json;
        }

    // envoi du résultat au success
      echo $json === "" ? "x" : $json;
  

?>
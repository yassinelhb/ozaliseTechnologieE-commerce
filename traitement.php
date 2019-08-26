<?php
if(isset($_GET['go']) || isset($_GET['id_region'])) {
  
    $json = array();
      
    if(isset($_GET['go'])) {
        // requête qui récupère les régions
        $requete = "SELECT commune FROM commune ORDER BY commune";
    } else if(isset($_GET['id_region'])) {
        $id = htmlentities(intval($_GET['id_region']));
        // requête qui récupère les départements selon la région
        $requete = "SELECT denomination_etab FROM etab_sco WHERE commune = ". $id ." ORDER BY commune";
    }
      
    // connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=gaela', 'root', 'XX');
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
      
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
        $json[$donnees['id']][] = utf8_encode($donnees['nom']);
    }
      
    // envoi du résultat au success
    echo json_encode($json);
}
?>
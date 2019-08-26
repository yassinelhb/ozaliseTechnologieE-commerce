<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=hanout;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}

?>
<?php

$x1=$_GET['q'];
$x2=$_GET['y'];








 $reponse = $bdd->query("SELECT distinct(referance) from produit where famille='$x1' and model='$x2'");
                echo '<option value="">--</option>';
               while ($donnees = $reponse->fetch() ){
                echo '<option value="'.$donnees['referance'].'">'.$donnees['referance'].'</option>';
    
    
}
;

?>
</body>
</html>
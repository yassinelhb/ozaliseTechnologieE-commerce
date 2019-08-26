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
$x=$_GET['q'];




 $reponse = $bdd->query("SELECT * from produit where famille='$x' group by(model)" );
               echo '<option value="">--</option>';
               while ($donnees = $reponse->fetch() ){
                echo '<option value="'.$donnees['model'].'"  >'.$donnees['model'].'</option>';
    
    
}
;

?>
</body>
</html>
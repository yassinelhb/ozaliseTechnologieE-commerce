<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=shoubikloubik;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}
?>

<html>
<head>
	<title></title>
</head>
<body>

	<?php
	 $reponse = $bdd->query('SELECT img FROM produit');
while ($donnees = $reponse->fetch())
{
 echo '<img src="'.$donnees['img'].'">' ;
}
?>

</body>
</html>
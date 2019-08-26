<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=hanout;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Recu livraison</title>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">
<style type="text/css">
.col-md-3{
	border: 1px solid #000;
	height: 440px
}
h2{
	text-align: center;
	font-size: 15px;
	font-weight: 400;
}
h1{
	text-align: center;
	font-size: 22px;
	font-weight: 700;
	text-decoration: 
}
h3{
	text-align: center;
	font-size: 16px;
	font-weight: 600;


}
h4{
	margin-left: 56px;
	font-style: italic;
	font-size: 13px;
	bottom: 0;
	font-size: 700;
	display: block;
	position: absolute;
}
.date-pp{
	text-align: center;
	padding-bottom: 13px;
	font-weight: 400
}
p{
	line-height: 12px;
	font-size: 14px;

	
	font-weight: 600

}
p span{
	font-weight: 300;
	width: 130px;
	display: inline-block;
}
.sim{
	width: 100px;
	margin-left: -27px;
	position: absolute;

}
.baterie{
	width: 100px;
	margin-left: -27px;
	margin-top: 20px;
	
	position: absolute;

}
strong{
	width: 70px;
	font-weight: 400;
	display:inline-block;
}
button{
	
	display: block;
	position: absolute;
	top: 76%

}
a{
  
  padding: 7px;
  width: 90px;
  border-radius: 4px;
  box-shadow: 0 0 5px #555;
  margin-top: 8px;
  margin-bottom: 50px;
  display: inline-block;
 
}
.block-lien{
	position: absolute;
	bottom: 10%
}


</style>
<body>
	
<div class="container">
	<div class="row">
		<form method="post">
		<div class="col-md-3">

			<h3> Docteur GSM </h3>
			<h2> AV Lahbib Bourguiba </h2>
			<h1> Recu Livraison </h1>
			<p class="date-pp">
				<?php  
				  echo date("Y-m-d"). "&nbsp;&nbsp;&nbsp;". date("H:i:sa");
			     ?>
			</p>
<?php
	
	$ref=$_POST['ref'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$num=$_POST['num'];
	$mat=$_POST['matrel'];
	$maq=$_POST['maq'];
	$mod=$_POST['mod'];
    $col=$_POST['col'];
	$pan=$_POST['pan'];
	$sim=$_POST['sim'];
	$bat=$_POST['bat'];
	$date_entre=date("Y-m-d")." ".date("H:i:s");
	$res="encours";
	$bdd->exec("INSERT INTO client(referance,nom,prenom,tel,marque,model,color,panne,batterie,sim,resultat,date_entre)
	 VALUES ('$ref','$nom','$prenom','$num','$maq','$mod','$col','$pan','$bat','$sim','$res','$date_entre')");


	?>
<div class="col-sm-12">
  <p><span>Référence:</span><?php echo $ref ; ?></p>
</div>	
<div class="col-sm-12">
  <p><span>Nom: </span><?php echo $nom ; ?></p>
</div>
<div class="col-sm-12">
  <p><span>Prénom: </span><?php echo $prenom ; ?></p>
</div>
<div class="col-sm-12">
  <p><span>N° de tel: </span><?php echo $num ; ?></p>
</div>
<div class="col-sm-12">
  <p><span>Matrél: </span><?php echo $mat ; ?></p>
</div>
<div class="col-sm-12">
  <p><span>Marque: </span><?php echo $maq ; ?></p>
</div>
<div class="col-sm-12">
  <p><span>Model: </span><?php echo $mod ; ?></p>
</div>
<div class="col-sm-12">
  <p><span>Couleur: </span><?php echo $col ; ?></p>
</div>
<div class="col-sm-12">
  <p><span>Panne: </span><?php echo $pan ; ?></p>
</div>
<div class="col-sm-12">
  <p><span>Remarque:</span>
  	 <span class="sim"><strong>Sim:</strong> <?php echo $sim ?></span>
  	 <span class="baterie"><strong>Baterie:</strong> <?php echo $bat ?></span> 

  	 

  </p>
</div>

   <h4>MERCI DE VOTRE VISITE</h4>

     </div>
   <div class="block-lien">
	   <a href="ajoutclient.php" class="btn btn-primary"><img src="add.png" width="30" height="25"></a> 
	   <a href="listeclient.php" class="btn btn-info"><img src="eye_icon.png" width="30" height="25"></a>  
   </div>  	   
     <button onclick="myFunction()" >Imprimer</button>

  </form>   
  </div>
</div>
<script>
function myFunction() {
    window.print();
}
</script>

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
<title>Shoubikloubik</title>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('.sel-choix').change(function(){
    var select = $(this).val();
    document.getElementById("myText").placeholder = select;
   });
   
});
</script>
<style>
.col-md-4{
	margin-left: 10%
}
.title h1{
	margin-left: 15px;
	text-decoration: underline;
	margin-top: 10px;
	font-size: 27px;
	margin-bottom: 10px;
	font-style: italic;

}
label{
	padding-top: 7px;
	font-size: 12px
}
input[type="radio"]{
margin-left: 5px
}
button{
	background: #111;
	color: #fff;
	border: none;
	padding: 7px;
	width: 90px;
	border-radius: 4px;
	box-shadow: 0 0 5px #555;
	margin-top: 8px

}
.form-control{
	margin-top: -7px;
	height: 32px
}
.erreur{
	color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;

    width: 353px;
    font-size: 13px;
    font-style: italic;
    padding: 10px;
   text-align: center;
  
    margin-left: 15px;
    border-radius: 5px
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
.res-rech{
margin-top: 30px;
padding: 20px 10px;
box-shadow: 0 0 5px
}
.res-rech .btn-pro{
	position: absolute;
	right:0;
	margin-top: -36px;
	width: 130px

}
 .btn-pro button{
	background: transparent;
	width: 40px;
	position: relative;
	box-shadow: none;

		
}
.res-rech button img{
	
	width: 30px
}
.sel-choix{
	position: absolute;
	width: 111px;
	right: 17px;
	outline: none;
	border: none;
	background-color: transparent;

	}
.sel-choix:focus{
	box-shadow: 0 0 5px #fff;



}


</style>

</head>
<body> 
	<div class="container">
		<div class="row">
			<form action="reculivraison.php" method="post">
			<div class="col-md-4">
				<div class="title">
					<h1> Ajouter Client </h1>

				</div>
				<div class="col-sm-12">
					<label for="ref">Référence:</label>
					<input type="text" name="ref" id="ref" class="form-control">
			    </div>		
			    <div class="col-sm-12">
					<label for="nom">Nom:</label>
					<input type="text" name="nom" id="nom" class="form-control">
			    </div>		
			    <div class="col-sm-12">
					<label for="prenom">Prénom:</label>
					<input type="text" name="prenom"  id="prenom" class="form-control">
			    </div>	
			     <div class="col-sm-12">
					<label for="num">N° de tel:</label>
					<input type="text" name="num"  id="num" class="form-control">
			    </div>		
			    <div class="col-sm-12">
					<label for="matrel">Matrel:</label>
					<input type="text" name="matrel"  id="matrel" class="form-control" value="GSM">
			    </div>	
			    <div class="col-sm-12">
					<label for="maq">Marque:</label>
					<input type="text" name="maq"  id="maq" class="form-control" >
			    </div>
			    <div class="col-sm-12">
					<label for="mod">model:</label>
					<input type="text" name="mod"  id="mod" class="form-control" >
			    </div>		
			    <div class="col-sm-12">
					<label for="col">Couleur:</label>
					<input type="text" name="col"  id="col" class="form-control" >
			    </div>
			    <div class="col-sm-12">
					<label for="pan">Panne:</label>
					<input type="text" name="pan"  id="pan" class="form-control" >
			    </div>	
			    <div class="col-sm-12">
					<label >Remarque:</label><br/>
					
					<label for="sim">sim</label>
					 <select name="sim" id="sim">
					 	<option value="non">non</option>
					 	<option value="oui">oui</option>
					 	
					 </select>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<label for="bat">batterie</label>	
					<select name="bat" id="bat">
						<option value="non">non</option>
					 	<option value="oui">oui</option>
					 	
					 </select>				
			    </div>
			    <div class="col-sm-12">
			    	<button type="submit" name="envoye"><img src="add.png" width="30" height="25"></button>
			    </div>		



			</div>
		</form>
		<?php
		$msg="";
	if(isset($_POST['rech'])){
		$cont=$_POST['cont'];
		$res=$_POST['par'];

		if($cont!=""){
	    	if($res=="Référence"){
	    	$req="SELECT referance,nom,prenom,tel,marque,model,matriel,color,panne,resultat,date_sortie,date_entre,batterie,sim FROM client
		  	   where referance='$cont'";
	    	}
	    	if($res=="Nom/Prénom"){
	    	$ch=$cont;	
			$fin= strlen($ch);
			$pos=strpos($ch,"/");
			$nom=substr($ch,0,$pos);	
			$prenom=substr($ch,$pos+1,$fin);
			
	    	$req="SELECT referance,nom,prenom,tel,marque,model,matriel,color,panne,resultat,date_sortie,date_entre,batterie,sim  FROM client
		  	   where prenom='$prenom' and nom='$nom'";
	    	}
	    	if($res=="Numero_Téléphone"){
	    	$req="SELECT referance,nom,prenom,tel,marque,model,matriel,color,panne,resultat,date_sortie,date_entre,batterie,sim  FROM client
		  	   where tel='$cont'";
	    	}
	    }else{
	      	$msg="Il faut indique la referance ou le nom et le prenom ou numero de telephone...!";
	      	$req="";
	      }

           if($req!=""){
		   $reponse = $bdd->query($req);
		   $nb= $reponse->rowCount();
		    if ($nb==0) {
				   $msg="Verifie votre donnees"; 	
				  }
		   }else{
		   	$nb=0;

		   }	
		   }	  

      
	 ?>

      	
        <div class="col-md-4">
        	<div class="col-md-12">
        	<form method="post" action="kk.php">
         <div class="title"> 
		   <h1> Recherche Client </h1>
		 </div>
		 <?php 
         
		 if((isset($_POST['rech']))&&($nb=="0"))
		 	{
		 		echo '<h2 class="erreur"> '.$msg.'</h2>';
		 	}
		 	?>
		 <div class="col-sm-12">
			<label for="sel">Par :</label>
			
			<select class="form-control sel-choix" name="par" id="sel" >
				<option value="Référence" >Référance</option>
				<option value="Nom/Prénom">Nom Prénom</option>
				<option value="Numero_Téléphone">N° de telephone</option>
			</select>
	
			<input type="text" name="cont" class="form-control" id="myText" placeholder="Référence" <?php if (isset($_POST['cont'])) {
				
				echo 'value="'.$_POST['cont'].'"'; }?>>
			
		 </div>
		 
		 <div class="col-sm-12">
		 	
		 	
			 <button type="submit" class="btn btn-success" name="rech"><img src="find.png" width="30" height="25"></button>

		
			 
	    
           

           <?php
           if(isset($_POST['rech'])){
			 if($req!==""){
				  $reponse = $bdd->query($req);
				  $nb= $reponse->rowCount();

      		     while ($donnees = $reponse->fetch()){
      		     	echo '<input type="text" style="display:none" name="inpref" value="'.$donnees['referance'].'">';


      		     	if($donnees['resultat']=="Repaired"){
      		      	   $res="#5cb85c";
      		     	}elseif($donnees['resultat']=="Irreparable"){
      		     	   $res="#d43f3a";
      		     	}else{
      		     		 $res="#f5f5f5";
      		     	}
      		     	 $date=$donnees['date_sortie'];
      		     	if($date=="")
      		     	{
      		     		$date="Pas encore";

      		    	 echo ' <button type="submit" class="btn btn-danger" name="sortie">
      		     			 <img src="application_exit.png" width="25" height="25">
      		     			</button>'	;
      		     	}else{
      		     		echo ' <button type="submit" class="btn btn-warning" name="logout">
      		     		        <img src="object_rotate_left.png" width="30" height="25">
      		     		       </button> '	;

      		     	}


               echo'</div>	
      		       
      		       </div> 	
      		     	
           	   <div class="col-md-12 res-rech" style="background-color:'.$res.'">
           	   	
           	   <div class="col-sm-12">
				  <p><span>Etat:</span>'.$donnees['resultat'].'</p>
				</div>	
				
				<div class="col-sm-12">
				  <p><span>Date sortie:</span>'.$date.'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>Date entre:</span>'.$donnees['date_entre'].'</p>
				</div>
           	   <div class="col-sm-12">
				  <p><span>Référence:</span>'.$donnees['referance'].'</p>
				</div>	
				<div class="col-sm-12">
				  <p><span>Nom: </span>'.$donnees['nom'].'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>Prénom: </span>'.$donnees['prenom'].'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>N° de tel: </span>'.$donnees['tel'].'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>Matrél: </span>'.$donnees['matriel'].'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>Marque: </span>'.$donnees['marque'].'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>Model: </span>'.$donnees['model'].'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>Couleur: </span>'.$donnees['color'].'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>Panne: </span>'.$donnees['panne'].'</p>
				</div>
				<div class="col-sm-12">
				  <p><span>Remarque:</span>
				  	 <span class="sim"><strong>Sim:</strong>'.$donnees['sim'].'</span>
				  	 <span class="baterie"><strong>Baterie:</strong>'.$donnees['batterie'].'</span> 
				  </p>';
				  echo'<div class="btn-pro">
					   
				       <button  name="encours" value="Standby" ><img src="loading_throbber.png"></button>
                       <button  name="true" value="Repaired"><img src="check.png"></button>
                       <button name="false" value="Irreparable"><img src="deletered.png"></button>
                       </form>
					   </div>
					   </div>';
		}


             }


      	
         }
          

	       
           if(isset($_POST['true'])){
            $resa=$_POST['true'];
            $ref=$_POST['inpref'];
		    $bdd->exec("UPDATE client SET resultat='$resa' where referance='$ref'");
			} 
			elseif(isset($_POST['false'])){
            $resa=$_POST['false'];
            $ref=$_POST['inpref'];
		    $bdd->exec("UPDATE client SET resultat='$resa' where referance='$ref'");
			} 
			elseif(isset($_POST['encours'])){
            $resa=$_POST['encours'];
            $ref=$_POST['inpref'];
		    $bdd->exec("UPDATE client SET resultat='$resa' where referance='$ref'");
			} 
           if(isset($_POST['sortie'])){
           	$ref=$_POST['inpref'];
           	$dat=date("Y-m-d")." ".date("H:i:s");
           	$bdd->exec("UPDATE client SET date_sortie='$dat' where referance='$ref'");
           	echo "<h3>confirmez</h3>";

           }
            if(isset($_POST['logout'])){
           	$ref=$_POST['inpref'];
           	$bdd->exec("UPDATE client SET date_sortie='' where referance='$ref'");
           	echo "<h3>a ete revenu...</h3>";

           }
           

         ?>
        
        </div>
       
		</div>

	</div>

	

</body>
</html>
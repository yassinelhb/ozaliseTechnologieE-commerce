<link rel="icon" href="images/lo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				
				<div class="col-md-6 top-header-left">
					<p><img src="images/tag.png">Wants to explore Upcoming Deals on Weekends?</p>
				</div>
				<div class="col-md-6 top-header-right">
				<ul class="header-opt">
					<?php 
                        
						if ($umail) {    
						echo '<li class="listheader"><a href="deconnexion.php">Déconnexion</a></li>';
						echo '<li class="listheader"><a href="moncompte.php">' .$umail.'</a></li>';
						}else
						echo '<li class="listheader"><a href="register.php">Connexion</a></li>';
						?>
					<li class="listheader language" ><a href="">Language <i class="fa fa-angle-down"></i></a>
						<ul class="select-opt" >
					      <li><a href="#">English</a></li>
					      <li><a href="#">اللغة العربية</a></li>
					      <li><a href="#">Francais</a></li>  
					    </ul>
					</li>
					<li class="listheader devisie"><a >Devise <i class="fa fa-angle-down"></i></a>
					    <ul class="select-opt">
					      <li><a href="index.php?d=EUR">Euro (EUR)</a></li>
					      <li><a href="index.php?d=TND">Dinar (TND)</a></li>
					      <li><a href="index.php?d=USD">Dollar (USD)</a></li> 
					      
					    </ul>
					</li>
					<li class="listheader"><a href="products.php">Contact</a></li>
				</ul>
            	</div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<?php
	if(isset($_POST['delete_pro'])){
		$valb=$_POST['delete_pro'];
		 $DB_con->exec("DELETE FROM commande WHERE numcom=$valb");
	}
	$reponse = $DB_con->query("SELECT * FROM commande,produit where commande.confirme='' and commande.pro_id=produit.id and  user_id='$user' ");
  	$nbr_com= $reponse->rowCount();
  	if($nbr_com==0){
  		$nbr_com=0;
  	}
	?>
	

	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="270">
		  <div class="container">
		  	 <div class="row">
		  	 	<div class="col-sm-3 form-logo" >
		  	 		<a href="index.php">
		  	 		<i class="fa fa-eercast" style="color:white;font-size:27px;padding-top:12px"></i>
		  	 		<span>Technologie</span>
		  	 	    </a>

		  	 	</div>
		  	 <form method="post" action="search.php">	
		  	 	<div class="col-sm-6 form-search">
		  	 		<input type="text"  name="txt-search" onkeyup="showHint(this.value)" placeholder="Enter Your Keyword...">
		  	 		<select style="-moz-appearance:none" name="select-cat">
		  	 			<option value="allcat">All Categories</option>
		  	 			<option value="Electronics">Electronics</option>
		  	 			<option value="Mobile">&nbsp;&nbsp;Mobile</option>
		  	 			<option value="Samsung">&nbsp;&nbsp;&nbsp;&nbsp;Samsung</option>
		  	 			<option value="Nokia">&nbsp;&nbsp;&nbsp;&nbsp;Nokia</option>
		  	 			<option value="Iphone">&nbsp;&nbsp;&nbsp;&nbsp;Iphone</option>
		  	 			<option value="Htc">&nbsp;&nbsp;&nbsp;&nbsp;Htc</option>
		  	 			<option value="Laptop">&nbsp;&nbsp;Laptop</option>
		  	 			<option value="Dell">&nbsp;&nbsp;&nbsp;&nbsp;Dell</option>
		  	 			<option value="Acer">&nbsp;&nbsp;&nbsp;&nbsp;Acer</option>
		  	 			<option value="Hp">&nbsp;&nbsp;&nbsp;&nbsp;Hp</option>
		  	 			<option value="all_ac">All Accesoires</option>
		  	 			<option value="watch">Watch</option>
		  	 		</select>
		  	 		<input type="submit" value="Recherche">
		  	 		<div id="block-search">
   					</div>
		  	 	</div>
		  	 </form>
		  	 	<div class="col-sm-3 ttcmsheader">
		  	 		<div class="header-tel col-sm-7">
		  	 		<div class="col-sm-2">
		  	 			<img src="images/teleh.jpg">
		  	 		</div>	
		  	 		<div class="col-sm-10">
		  	 			<p>Call Center</p>
		  	 			<p>088-888-8888</p>
		  	 		</div>	
		  	 		</div>	
		  	 		<div class="panier-header col-sm-5">
		  	 		 <ul>
		  	 		 	<li>
		  	 		 		<a href="panier.php">
		  	 		 			<p class="ttpanier"><strong>Panier</strong><i class="fa fa-opencart"></i><span><?php echo $nbr_com;?></span></p>
		  	 		 		</a>
		  	 		 		<ul class="panier-com " >
		  	 		 			<form method="post">
		  	 		 			<?php
									
								    $prixx=0;
								  	while ($donnees = $reponse->fetch()) {
								  		 $prix=$donnees['qtee']*$donnees['prix'];
								  			echo '<li>
								  			       <button type="sumbit" name="delete_pro" value="'.$donnees['numcom'].'"class="btn-delete"><i class="fa fa-close"></i></button>
								  			       <div class="col-sm-12 block-panier">
								  			      	 <div class="col-sm-5">
								  			      		 <a href=""><img src="produit/'.$donnees['img'].'" ></a>
								  			      	 </div>
								  			       <div class="col-sm-7 dx-panier">
								  			       	  <h2>'.$donnees['qtee'].' x '.$donnees['marque'].'</h2>
								  			       	  <h3>'.$prix.' TD</h3>
								  			       </div>
								  			       </div>
								  			      </li>';
								  			 $prixx=$prixx+$prix;
								  			  
								  			}
								  			echo ' <li>
								  			       <div class="col-sm-12 block-panier">
								  			      	 <div class="col-sm-6">
								  			      		 <h4> Livraison </h4>
								  			      		 <h4> Total </h4>
								  			      	 </div>
								  			       <div class="col-sm-6">
								  			       	  <p>7.00 TD</p>
								  			       	  <p >'.$prixx.' TD</p>
								  			       </div>
								  			       </div>
								  			      </li> 
								  			      <a class="btn-com" href="panier.php">Commander</a>
								  			      ';
								  			 
								  			        
								  		?>
								  		

									
   								
								 </form>
		  	 		 		</ul> 
		  	 		    </li>
		  	 		</ul>
		  	 		</div>	



		  	 	</div>

		  	 </div>
		  </div>
	</nav>
	<script>

function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("block-search").innerHTML = "";
        return  ;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("block-search").innerHTML = this.responseText;
       
                
            }
        };
        xmlhttp.open("GET", "rech.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
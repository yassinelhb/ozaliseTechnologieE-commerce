<?php
require_once 'db_conf.php';
if($umail==""){ 
  header('Location: register.php'); 
	 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Shoubikloubik</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>	
 <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
/* Global */
@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
  }
.carousel-control.left,
.carousel-control.right {
	opacity: 0;
	filter: alpha(opacity=100);
	background-image: none;
	background-repeat: no-repeat;
	text-shadow: none;
}
#carousel-example-generic:hover .left,
#carousel-example-generic:hover .right{
	opacity: 1
}
.carousel-control .fa{
	top: 45%;
	opacity: 0.7;
	position: absolute;
	color: #000;
	border: 2px solid #000;
	padding: 8px 15px;
	border-radius: 50%;
	left:32%;
}

.carousel-control .fa:hover{
	color: #fff;
	background: #000
	
}





/* Carousel Header Styles */
 




.thumbnails li> .fff .caption { 
    background:#fff !important; 
    padding:10px
}

/* Page Header */
.page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
}
    
.page-header h3 {
    line-height: 0.88rem;
    color: #000;
}

ul.thumbnails { 
    margin-bottom: 0px;
}



/* Thumbnail Box */
.caption h4 {
    color: #444;
}

.caption p {  
    color: #999;
}



/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
    margin-top: -50px
}
.pager img{
	width: 14px;
	opacity: 0.8;
	margin-top:-2px;

}

.thumbnails .col-sm-3{padding-left: 2px;padding-right: 2px}



/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
        text-align: center;
    } 
}
@media (max-width: 479px) {
    .caption {
        word-break: break-all;
    }
}


li { list-style-type:none;}


  
  .about-left{
  	background-color: #fff
  }
  .about-right{
  	background-color: #fff
  }
  .section-categorie{
  	background-color: #fff;
  	position: relative;
  	height: auto;
  }
 
.col-md-2{
	padding: 0
}
.col-md-2 >.col-sm-8,.col-sm-4,.col-sm-7,.col-sm-5{
	padding: 0
}

.col-md-2 .col-sm-10{
	
	border-bottom: 1px solid  rgba(0,0,0,0.05);
	padding:10px 0;
	margin-left: 17px;
	letter-spacing: 0.3px

}
.about-right .award{
	border-bottom: 1px solid #fff; 
	
}

.about-right .public-right{
	padding: 5px ;
	border-top: 1px solid rgba(0,0,0,0.08);
	border-bottom: 1px solid rgba(0,0,0,0.08);


}
.about-left .public-left{
	padding: 5px ;
	border-top: 1px solid rgba(0,0,0,0.08);
	border-bottom: 1px solid rgba(0,0,0,0.08);


}

#extras{
	border-top: 0px solid rgba(0,0,0,0.07)

}
.ttarticl{
	border-bottom: 1px solid rgba(0,0,0,0.07);
	border-top: 1px solid rgba(0,0,0,0.07)
}
.ttarticl a h3{
	font-size: 12.3px;
	float: right;
	color: #222;
	padding: 0 9px 0 0;
	margin-top: 2px
}
.ttarticl a:hover h3{
	
	color: #222;
	text-decoration: underline;
	
}
.ttarticl a{

}
.ttarticl h4{margin-left: -10px}
.ttarticl img{

	width: 100%;
	height: 100%;
	padding: 8px 5px
}
#marq img{opacity: 0.7}
#marq img:hover{opacity: 1}

/*    index.html     */
.about {
    margin-top: -30px;
}


.title-form{
    
    font:400 14px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin-bottom: 12px;
    padding: 8px 0;
}
.form-logo span{
  	color: #fff;
  	padding-top: 15px;
    letter-spacing: 0;
    font: 300 21px/23px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
  	 
  }
.form-insc{
	background-color: #fff;
	border: 1px solid rgba(0,0,0,0.09);
	
}
.form-insc .pg-modifl{
	color: #777;
	opacity: 0.8
}
.form-insc .champ_req{
	color: #f13340;
    margin:-2px 0 16px 0;
   
    
    font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}

.form-insc label{
	width:25%;
    font: 400 11px/20px "Poppins", Helvetica, sans-serif;
    letter-spacing: 0.7px;
  
    margin-bottom: 0px

}

.form-insc .form_info{
	color: #666


}
.form-insc input[type="text"],.form-insc input[type="email"],.form-insc input[type="date"],.form-insc input[type="password"]{
	width: 200px;
	height: 27px;
	border: 1px solid rgba(0,0,0,0.2);
	margin-bottom: -5px;
	padding: 2px 5px;
    font-size: 11px;
    line-height: 1.42857;
    color: #9c9b9b;
}


.form-insc input[type="text"]:focus,.form-insc input[type="email"]:focus,
.form-insc input[type="date"]:focus,.form-insc input[type="password"]:focus{
	outline: none;
	border: 1px solid rgba(0,0,0,0.3);


}
.form-insc button{
	margin-bottom: 20px;
    font: 400 12px/18px "Poppins", Helvetica, sans-serif;
    letter-spacing: 0.7px;
    color: white;
    border: none;
    background: #f12a43;
    padding:6px 12px;
    border-radius: 4px;
}
.form-insc button:hover{
	outline: none;
	background: #222
}




  </style>	

</head>
<body> 
	<?php 
	   include 'header.php' ;
	?>   
	<!--banner-public-->
	
	<div class="container tthead">
	<div class="col-sm-12">
		<div class="col-md-6 heade-left">
					<h4> Mes Adresses</h4>	
		</div>
		<div class="col-md-6 heade-right">					
			<a href="index.php"><i class="fa fa-home"></i></a>
			<p><span><i class="fa fa-angle-right"></i></span><a href="moncompte.php">Mon Compte </a><span><i class="fa fa-angle-right"></i></span> Mes Adresses</p>
		</div>
	</div>
	</div>


			



	<!--banner-public-->
	
	<div class="about" > 
		<div class="container">
			<?php 
	        include 'navleft.php';
	       ?>
			<?php 
                  if(isset($_POST['btn_checked'])){
                  	 $msg="";
                  	 $societe=$_POST['societe'];
                  	 $adresse=$_POST['adresse'];
                  	 $ville=$_POST['ville'];
                  	 $etat=$_POST['etat'];
                  	 $cod_postal=$_POST['codepostal'];
                  	 $pays=$_POST['pays'];
                  	 $num_tel=$_POST['num_tel'];
                  	  if($adresse=="") {
						 $error= "Vous devez saisir votre adresse!";
						 } else if($ville=="") {
						 $error= "Vous devez saisir votre ville!";
						 } else if($etat=="") {
						$error= "Vous devez saisir etat";
						} else if($cod_postal=="")  {
						$error= "Vous devez saisir la code postal";
						}
						  else if(strlen($cod_postal) < 4) {

						      	$error= "Vous devez saisir la code postal correctement";
						  }	
						
						else if($pays=="") {
						$error= "Vous devez saisir votre pays";
						}else if($num_tel=="") {
						$error= "Vous devez saisir numero de telephone";	
						}
						 else if(strlen($num_tel) < 8) {
						      	$error= "Vous devez saisir numero de telephone de 8 chiffre";
						      }
						else{
                  	 $re=$DB_con->exec("UPDATE users SET  societe='$societe',adresse='$adresse',
                  	 	ville='$ville',etat='$etat',cod_postal='$cod_postal',pays='$pays',num_tel='$num_tel' where user_email='$umail'");

                  	 	if($re>0){
					            $msg='<i class="fa fa-check" ></i>';
					        }}        
					}


                 ?>

			<div class="col-md-8 about-center">
			
				<div class="col-md-12 form-insc">
					<h3 class="title-form">Mes Adresses</h3>
					<p class="champ_req">Champ requis</p>
					<div class="col-sm-12">
                  	<div id="error">
                                 <?php

                                if(isset($error)) {
                                 ?>
                                 <div class="alert alert-danger">


                                 <img src="images/close.png" class="fa-close" data-dismiss="alert" aria-hidden="true">
                                  <?php
                                	echo " &nbsp;1. " .$error;
                                  ?> 
                                 </div>
                                 <?php
                                }
                                 ?>
                	 </div>
                  </div>
					<form method="post" >
					    
						
						<div class="form-group">	
							<label>Société </label> 
							<input type="text" name="societe"<?php echo 'value="'.$donnes['societe'].'"'; ?>>
						</div>
						<div class="form-group">	
							<label>Adresse *</label> 
							<input type="text" name="adresse"<?php echo 'value="'.$donnes['adresse'].'"'; ?>>
						</div>
						<div class="form-group">	
							<label>Ville *</label> 
							<input type="text" name="ville"<?php echo 'value="'.$donnes['ville'].'"'; ?>>
						</div>
						<div class="form-group">	
							<label>Etat *</label> 
							<input type="text" name="etat" <?php echo 'value="'.$donnes['etat'].'"'; ?>>
						</div>
						<div class="form-group">	
							<label>Code postal *</label> 
							<input type="text" name="codepostal" <?php echo 'value="'.$donnes['cod_postal'].'"'; ?>>
						</div>
						<div class="form-group">	
							<label>Pays *</label> 
							<input type="text" name="pays" <?php echo 'value="'.$donnes['pays'].'"'; ?>>
						</div>
						<div class="form-group">	
							<label>Téléphone *</label> 
							<input type="text" name="num_tel"<?php echo 'value="'.$donnes['num_tel'].'"'; ?>>
						</div>  

						<button name="btn_checked" type="submit">Enregistrer</button><span style="font-size:12px;padding-left:10px"><?php  if(isset($_POST['btn_checked'])){ echo " ".$msg;} ?>
					
					</form>

                 
					

				</div>
			</div>	
			<?php 
		        include 'navright.php';
		     ?> 
       </div>
     </div>  			
     <?php
    include 'footer.php' ;
  ?>
</body>
</html>
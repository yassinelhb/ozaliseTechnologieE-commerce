<?php

require_once 'db_conf.php';

if(isset($_POST['btn-signup'])) {

$sexe = $_POST['sexe'];
$uname =$_POST['txt_name'];
$upre = $_POST['txt_pre'];
$umail =$_POST['uname_email'];
$upass =$_POST['txt_pass'];
$datee =$_POST['datee'];
$reponse = $DB_con->query("SELECT user_email FROM users where user_email='$umail'");
$nb= $reponse->rowCount();



if($upre=="") {
 $error= "Vous devez saisir un prenom d'utilisateur!";
 } else if($uname=="") {
 $error= "Vous devez saisir un nom d'utilisateur!";
 } else if($umail=="") {
$error= "Vous devez saisir un email";
} else if($nb!=0) {
 $error= "Désolé, l'email existe déjà";
 } else if($upass=="") {
 $error= "Vous devez saisir un mot de passe";
 } else if(strlen($upass) < 6) {
 $error= "Le mot de passe doit avoir au moins 6 caractères";
 }
 else if($sexe=="") {
 $error= "Vous devez choisir sexe";
 }

 else if($datee=="") {
 $error= "Vous devez saisir un date";
 }
 else if($datee>"2005-12-12") {
 $error= "Vous devez saisir un date inferieur de l'annee 2005";
 }
 else {
   $pres="user";	
   $x=$DB_con->exec("INSERT INTO users(user_name,user_email,user_pass,user_date,user_sexe,user_prenom,personnalite)
   VALUES('$uname','$umail','$upass','$datee','$sexe','$upre','$pres')");
   $_SESSION['user_session'] = $umail;
   
   header('Location: index.php');

 }
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
 
 @font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
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

::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
::-moz-selection { background: #ff5e99; color: #FFFFFF; }

  
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
  .title_block{
  	color: #333;
font: 400 16px/18px "Poppins", sans-serif;
padding: 10px;
position: relative;

width: 100%;
letter-spacing: 1px;
margin: 0;
border: none;
  }
.section-categorie .tt_sf-menu > li{
	padding: 0 16px;
	width: 100%
} 
 .tt_sf-menu li a{

    color: #777777;
    display: block;
    font: 400 12px/20px "Poppins", Helvetica, sans-serif;
    padding: 5px 0;
    text-decoration: none;

}

 .tt_sf-menu li a:hover{

    color: #333;
    

}

 .tt_sf-menu li a .fa{
    float: right;
    margin-top: -6px;
    margin-right: -16px;
    font-size: 13px;
    text-align: center;
    line-height: 32px;
    height: 32px;
    width: 32px;
    color: #aaa
    
}
.tt_sf-menu li a .fa:hover{
    background: #eeeeee;
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
.nou-produit .title_block{
	padding:10px 0 0 0;
	 }

.nou-produit img{
	width: 70px;
	height: 70px;
	border: 1px solid #f0f0f0;
	padding: 0px;
	margin-left: -10px
}






.tab-content .col-md-3{
	padding-left: 5px;
	padding-right: 5px
}	
.ttcmssubbanners{
	
	margin: 22px 0;
	padding: 0
}

.ttcmssubbanners img{
	background-color: #fff;
	padding: 10px;
	width: 100%
}
.infor-right p{
       color: #888;
    font: 500 11px/20px "Poppins", Helvetica, sans-serif;
    margin: 0px 0 3px;
    padding-top: 10px ;
    width: 200px

}
.infor-right ul li p{
       color: #888;
    font: 500 11px/20px "Poppins", Helvetica, sans-serif;
    margin: 0px 0 3px;
    padding-top: 0px ;
    width: 250px
    

}
.infor-bottom{
	padding: 10px
	

}
.infor-bottom ul{
	margin-left: 18%;

}

.infor-bottom ul li a{
	float: left;
	    color: #888888;
    font: 400 12px/24px "Poppins", Helvetica, sans-serif;
    text-decoration: none;
	
}
.infor-bottom ul li a:hover{
	
	    color:#f12a43;
  
	
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

.about {
    margin-top: -30px;
}

.title-form{
    font: 400 13px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin-bottom: 12px;
    padding: 8px 0;
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
					<h4>Identifiez-Vous</h4>	
		</div>
		<div class="col-md-6 heade-right">					
			<a href="index.php"><i class="fa fa-home"></i></a>
			<p><span><i class="fa fa-angle-right"></i></span>Identifiez-Vous</p>
		</div>
	</div>
	</div>


	<!--banner-public-->
	
	<div class="about" > 
		<div class="container">
			<?php 
		         include 'navleft.php';
		       ?> 

			
			<div class="col-md-8 about-center">
				
				<h1 class="page-heading">Créez votre compte</h1>

				<div class="col-md-12 form-insc">
					
					<h3 class="title-form">Vos informations personnelles</h3>
					<p class="champ_req">Champ requis</p>
					<div class="col-sm-6">
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
					
					<div class="col-sm-12">
					<form method="post" >
					    
						 <div class="form-group">	
							<label>Prénom *</label> 
							<input type="text" name="txt_pre" 
							<?php if(isset($_POST['txt_pre'])){
							 echo 'value="'.$_POST['txt_pre'].'"';
							} ?>>
						</div>
						 <div class="form-group">	
							<label>Nom *</label> 
							<input type="text" name="txt_name"
							<?php if(isset($_POST['txt_name'])){
							 echo 'value="'.$_POST['txt_name'].'"';
							} ?>>
						</div>
						 
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" name="uname_email">
					    </div>	
					    <div class="form-group">	
							<label>Mot de passe<br/>
								<span class="form_info">(6 caractères min.)</span></label> 
							<input type="password" name="txt_pass">
							
						</div>
						<div class="form-group" >
							<label>sexe</label>
							<select name="sexe" style="outline:none">
								<option  value="homme">--</option>
								<option  value="homme"> Mr.</option>
								<option value="femme"> Mrs. </optin>
							</select>
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="date" name="datee" 
							<?php if(isset($_POST['datee'])){
							 echo 'value="'.$_POST['datee'].'"';
							} ?>>
						</div>
						
						<button type="submit" name="btn-signup">S'inscrire</button>
					
					</form>


					
                  </div>
                  
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
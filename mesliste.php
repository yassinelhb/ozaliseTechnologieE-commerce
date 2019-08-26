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



li { list-style-type:none;}

::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
::-moz-selection { background: #ff5e99; color: #FFFFFF; }

  
  
  .ttcmsheader p{
  	font:500 12px/20px "Poppins", sans-serif;
color: white;
letter-spacing: 0.4px;
margin-bottom: -5px;
margin-top: -4px;


  }
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
#marq img{opacity: 0.7}
#marq img:hover{opacity: 1}
.tt_sf-menu > li > ul > li{
	float: left;
	width: 50%;
	padding: 0 10px

}
.tt_sf-menu > li > ul > .category-img{
	width: 100%
}


/*    index.html     */
.about {
    margin-top: -30px;
}


.title-form{
    font: 400 15px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin-bottom: 12px;
    padding: 8px 0;
}

.form-compte{
	background-color: #fff;	
}
.form-compte .list-compte li{
	margin: 15px 5px;
	border: 1px solid #ccc
}
.form-compte .list-compte li a{
	
	display: block;
	color: #888;
	 font:200 12px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
	 text-decoration: none;
}
.form-compte .list-compte li:hover{
	
	border: 1px solid #777;

}

.form-compte .list-compte li a i{
	border-right: 1px solid #ccc;
	display: inline-block;
	height: 100%;
	padding: 15px 17px;
	margin-right: 15px
}
.form-compte .list-compte li:hover  a {
	
	color: #555
}

.form-compte .list-compte li:hover  a i {
	border-right: 1px solid #777;
	
}





.about-center .pg-modifl{
	color: #aaa;	
    font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.table-bordered{
	border: 1px solid #eee
}
.table-bordered > thead > tr > td {
	background: #fff;
	border: 1px solid #e5e5e5;
	font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}

.table-bordered > tbody > tr > td {
	
	font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    color: #999;
	border:  1px solid #e5e5e5;
	line-height: 55px;

}
.table-bordered > tbody > tr > td > span {
    width: 15px;
    height: 15px;
    border-radius: 4px;
    display: block;
    margin-top: 19px;
}
.table-bordered > tbody > tr > td > button {
   background: transparent;
   border: none;
   outline: none;
}
.alertmsg{
	background-color: #FFF1F2;
	border:1px solid #F13340;
	
	height: 45px
}
.alertmsg p{

	font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    color: #F13340;
    line-height: 44px;
   

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
					<h4> Mes Listes</h4>	
		</div>
		<div class="col-md-6 heade-right">					
			<a href="index.php"><i class="fa fa-home"></i></a>
			<p><span><i class="fa fa-angle-right"></i></span><a href="moncompte.php">Mon Compte </a><span><i class="fa fa-angle-right"></i></span> Mes Listes</p>
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
				if(isset($_POST['delete_list'])){
					$numlist= $_POST['delete_list'];
    			    $DB_con->exec("DELETE FROM mesliste WHERE numliste=$numlist");
    			}
				?>
			<div class="col-md-8 about-center">
				<h1 class="page-heading">Mes Listes</h1>
				<?php
					$rep= $DB_con->query("SELECT user_id FROM users where user_email='$umail'");
                    $donnes = $rep->fetch();
                   	$numuser=$donnes['user_id'];
					 $reponse = $DB_con->query("SELECT produit.marque,produit.color,produit.img,mesliste.date_cree,mesliste.numpro,mesliste.numliste 
				 	FROM mesliste,produit,users
				    where mesliste.numuser=users.user_id and mesliste.numpro=produit.id and numuser='$numuser'");
                    $nb= $reponse->rowCount();
                    if($nb>0){
					echo '	
					
					<form method="post">
					<table class="table table-bordered">
	                   <thead>
	                     <tr>
	                     	<td>Nom</td>
	                     	<td>Color</td>
	                     	<td>Image</td>
	                     	<td>Créé le</td>
	                     	<td>Lien Direct</td>
	                     	<td>Par défaut</td>
	                     	<td>Supprimer</td>
	                     </tr>
	                   </thead> 
	                   <tbody>';
                   
                   	while ($donnees = $reponse->fetch())
					  { echo'
						<tr>
                     	<td>'.$donnees['marque'].'</td>
                        <td><span style="background:'.$donnees['color'].'"></span></td>
                     	<td><img src="produit/'.$donnees['img'].'" style="width:50px"></td>
                     	<td>'.$donnees['date_cree'].'</td>
                     	<td><a style="color:#999" href="single.php?id='.$donnees['numpro'].'">Afficher</a></td>
                     	<td><i class="fa fa-check-square"></i></td>
                     	<td><button type="submit" name="delete_list" value="'.$donnees['numliste'].'"><i class="fa fa-close"></i></button></td>
                     </tr>';
                      } 
                  	 echo' </tbody>
				   	 </table>
					</form>';
						}else{
							echo '<div class="col-sm-12 alertmsg"><p>Vous n\'avez pas encore ajoute a la liste d\'envies<p></div>';
						}
							
                    ?> 
                  
				
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
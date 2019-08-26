<?php


 require_once 'db_conf.php';

 if(!$user->is_loggedin()) {
$user->redirect('index.php');
 }

 $user_id = $_SESSION['user_session'];
 $req = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
 $req->execute(array(":user_id"=>$user_id));
 $ligne=$req->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head> <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PICSAVE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/component.css" />

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="main.css" />
    <link href="css/jquery.fancybox.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style3.css" />


<link href="css/style.css" rel="stylesheet" />
    
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-1.11.3-
jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    


<style type="text/css">
@font-face{
    font-family: "KaushanScript-Regular";
    src:url(KaushanScript-Regular.otf) format("truetype");
  }


body{
    background: #eee
}
    /* Some custom styles to beautify this example */
    .jumbotron{
        margin-bottom: 0;
    }
    .header {
      height: "your height here";
      width: 100%;
    }
         #myNav{
        border-radius: 0;
        background: #fff;
              
     border: none;
        
    


    }
   .navbar-default li a{font-family:KaushanScript-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;font-size: 17px} 
   .nav-tabs li a{font-family:KaushanScript-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;} 
   .overlay-img{font-family:KaushanScript-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;font-size: 17px;letter-spacing: 2px}
  .user-profil{
     font-family:KaushanScript-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}

    


    .navbar.affix{
        top: 50px; /* Set the top position of pinned element */
        z-index: 888;
        width: 100%;
            background: #fff;height: 45px
        
                


    }
        
    *[class^="prlx"] {
  position: absolute;
  width: 100%;
  height: 100%;
  top:0;
  left:0;
  z-index: -1;
  border:none;
}


</style>
<script type="text/javascript">
            $(document).ready(function() {
                $(window).scroll(function(){
                    $('*[class^="prlx"]').each(function(r){
                        var pos = $(this).offset().top;
                        var scrolled = $(window).scrollTop();
                        $('*[class^="prlx"]').css('top', -(scrolled * -.7) + 'px');         
                    });
                });
            });
        </script>
<script type="text/javascript">
$(document).ready(function(){
    $("#myNav").affix({
        offset: { 
            top: $(".header").outerHeight(true)  /* Set top offset equal to header outer height including margin */
        }
    });
});
</script>

</head>
<body data-spy="scroll" data-target="#myNav">
        <nav class="navbar navbar-default navbar-fixed-top topnav" style="background:#000" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="discover.php"><img src="images/logo.png"></a>
            </div>
             <ul class="nav navbar-nav navbar-left">
                     <li>
                        <a href="discover.php"> Discover</a>
                    </li>
                   
                    <li class="input-search">
                        <input type="text" name="search" placeholder="Search..">
                        <span class="fa fa-search"></span>
                    </li>
                    
                </ul> 
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a href="myprofil.php" class="profi-user"> <?php if($ligne['user_img']==""){echo' <img src="default.png" style="width:37px;height:37px;border-radius:50%;position:absolute;left:0;top:6px"> ';}
                        if($ligne['user_img']!=""){echo' <img src="images/'.$ligne['user_img'].'" style="width:37px;height:37px;border-radius:50%;position:absolute;left:0;top:6px"> ';} ?> <?php echo $ligne['user_name']; ?></a>
                    </li>
                    
                    <li >
                        <a  class="button-upload"  id="xx" style="cursor:pointer"><i class="fa fa-cloud-upload" style="font-size:27px;position:absolute;top:0px;left:0px"></i>Upload</a>
                    </li>
                    </li>
                    <li>
                        <a id="buttn-caret-down"  href="#contact" data-toggle="dropdown"><i class="fa fa-caret-down" style="padding:0;font-size:13px"></i></a>
                         <ul class="dropdown-menu">
                            <li><a href="setting.php"> <i class="fa fa-cog"></i>&nbsp;Setting</a></li>

                            <li><a href="logout.php"> <i class="fa fa-sign-out" ></i>&nbsp;Déconnexion</a></li>
                         </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="header"  >
        <div class="hh" style="background:rgba(0,0,0,0.2);width:100%;height:100%" >
              <div class="prlx-1">
                 <img src="images/<?php  echo $ligne['user_covert']; ?>" style="width:100%;height:110%">
                
              </div>   
        </div>
          <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                     <div class="col-lg-3" >
                        <div  id="img-profil" style=" border: 3px solid #fff;">
                         <?php if($ligne['user_img']==""){echo' <img src="default.png"> ';}
                        if($ligne['user_img']!=""){echo' <img src="images/'.$ligne['user_img'].'" > ';} ?>
                          
                          
                           
                        </div>

                     </div> 
                     <div class="col-lg-9">
                        <div class="col-lg-9 desc-profil">
                            <h1 class="user-profil"> <?php echo $ligne['user_name']; ?> </h1>
                            <p><img src="images/04_maps.png">Lives in <span><?php echo $ligne['user_city']; ?>,<?php echo $ligne['user_loc']; ?></span> 
                            <img src="images/text_calendar.png">date <span><?php echo $ligne['user_date']; ?></span></p>
                             <p style="padding:5px 0">
                                <?php if($ligne['user_skype']!=""){echo' <img src="images/skype.png"> '.$ligne['user_skype']; }
                                     if($ligne['user_fb']!=""){echo'<img src="images/facebook.png">' .$ligne['user_fb'];}
                                     if($ligne['user_insta']!=""){echo' <img src="images/instagram.png">'.$ligne['user_insta'];}?></p>
                            
                            <p  id="detail-user"> <?php  if($ligne['user_desc']!=""){echo'<img src="images/information.png">'.$ligne['user_desc'];}?></p>
                        

                        </div>
                        <div class="col-lg-3">
                         <a href="setting.php" class="complete-profil">  Complete your profil</a>


                        </div>
                    </div> 
                      
                   
                </div>   

      
   
      
            </div>
          </div>
    </div>


   <nav id="myNav" class="navbar navbar-inverse"  data-spy="affix" >
        <div class="container ">
            
                <div class="col-lg-4 col-lg-offset-4">
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">MY DESIGNS</a> </li>
                            <li><a data-toggle="tab" href="#menu1">MY VOTES</a></li>
                            <li><a data-toggle="tab" href="#menu2">ACTIVITY</a></li>
                        
                          </ul>
                </div>
        </div>
            
       
    </nav>

    <div class="container">
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
    
    
    
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row" style="padding-bottom:40px">
            <div class="col-lg-12">
                
                <div class="row">
                    <section id="projects" >
                    <ul id="thumbs" class="portfolio">
                         

                                <?php  
                                $nom=$ligne['user_name'];
                                      $reponse = $DB_con->query("SELECT cover FROM images where username='$nom' ");
                                                   
                                            
                                
                                        while ($donnees = $reponse->fetch())
                                            {
                                                $imagename = $donnees['cover'];

                                                    
                                                     
                                                    
               
                                                echo '<li class="item-thumbs col-lg-4 photography"  data-type="web">
                                                      <div class="item-thumbs">';
                                                echo '<a class="hover-wrap fancybox" data-fancybox-group="gallery"  href="images/'.$imagename.'">
                                                        <span class="overlay-img"><img src="images/'.$ligne['user_img'].'" style="width:50px;height:50px;border-radius:50%;padding:5px">
                                                        '.$ligne['user_name'].'</span>
                                                        
                                                        </a>';
                                                echo ' <img src="images/'.$imagename.'" > ';       
                                                echo '</div> </li>';
                                                

                                               } 

                                                    
                                                          
                                               
                                    
                                  
                                                    
                            ?>                      
                        
                    </ul>
                    </section>
                </div>
            </div>
        </div>
      </div>
      <div id="menu1" class="tab-pane fade">
       

      </div>  
    </div>

    </div>

   

            <div id="aa">
                <FORM method='Post' >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5   etap-upload">
                                <span id="signup-out" style="position:absolute;color:#000;right:10px;font-size:18px">x</span>
                                <h1>Upload Photo</h1>
                                
                                   <div class="col-lg-12" style="height:150px;text-align:center">
                                     <input type="file" name="cover" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file-5">
                                         <figure>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 
                                                    11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 
                                                    1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                                 </svg>
                                         </figure> 
                                         <span>Choose a file&hellip;</span></label>


                                   </div>
                                   <div class="col-lg-12">
                                   
                                           <label class="title">Your photo tile is...</label>
                                           <input type="text" name="titre" class="form-control" placeholder="Your name" >
                                     </div>
                                      <div class="col-lg-12">
                                   
                                           <label class="title">Discription...</label>
                                       <textarea class="form-control" id="email" name="desc" rows="7" cols="1" placeholder="Tell us something about you"></textarea>
                                     </div>
                                      <div class="col-lg-12">
                                   
                                           <label class="title" >Categorie...</label>
                                       <select class="form-control" name="cat">
                                        <option>nature</option>
                                        <option>animaux</option>
                                       </select>
                                     </div>
                                     <div class="col-lg-12">
                                       <button type="submit" class="btn btn-primary" >Upload</button>
                                     </div>
                                    


                                   </div>
                                 



                            </div>

                        </div>
                    </div>
                


                       

             </FORM>


            </div>

              <?php
                    if (!empty($_POST)) {
                        $titre = $_POST['titre'];
                        $desc = $_POST['desc'];
                       
                        $uuser= $ligne['user_name'];
                        $image = trim($_POST['cover']); 
                        $nom ="C:/wamp/www/photographe/images/";
                        $resultat= move_uploaded_file($image,$nom.$image);
                        $imgprofil= $ligne['user_img'];
                      
                        
                        
                        
                        //Upload de l'image 
                       
                        /*  echo $_FILES['cover']['name'];
                            echo "<br>";
                            echo $_FILES['cover']['type'];
                            echo "<br>";
                            echo $_FILES['cover']['size'];
                            echo "<br>";
                            echo $_FILES['cover']['tmp_name'];
                            echo "<br>";
                        */  
                            //$nom = "avatars/{$id_membre}.{$extension_upload}";
                        
                    
                            
                    
                          
                                $req = "INSERT INTO images (username , titre, description, cover ,userph) VALUES ('$uuser','$titre','$desc','$image','$imgprofil')";
                             
                                $DB_con->exec($req);
                                
                            }
                            
                       
                        
        
                
 ?>

           

 

           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(e) {
            
      $("#xx").click(function(e) {
                $("#aa").show();
            });
       
      
      
      });
    $("#signup-out").click(function(e) {
                $("#aa").hide();
            });

  
  </script>
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="js/custom-file-input.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>


<script src="js/custom.js"></script>



</body>
</html>                     
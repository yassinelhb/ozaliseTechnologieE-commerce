<?php
require_once 'configad.php';

$msg="";
$msgerreur="";
if(isset($_POST['btn-modifie'])){
$pic=$_POST['picture'];
if($pic==""){
  $pic=$donnees['user_img'];  
}
$name=$_POST['lastname'];
$prenom=$_POST['firstname'];
$datee=$_POST['datee'];
$societe=$_POST['societe'];
$pays=$_POST['pays'];
$etat=$_POST['etat'];
$ville=$_POST['ville'];
$adresse=$_POST['adresse'];
$sexe=$_POST['sexe'];
$tel=$_POST['tel'];
$pwd=$_POST['pwd'];
$npwd=$_POST['npwd'];
if($pwd!=""){
    if($pwd!=$donnees['user_pass']){
        $msgerreur='Password';
        $npwd=$donnees['user_pass'];
    }else{
        if($npwd==""){
         $msgerreur='nPassword'; 
         $npwd=$donnees['user_pass'];   
        }else{
         $npwd=$_POST['npwd'];
        }
    }
}else{
    if($npwd!=""){
      $msgerreur='Incorrect Password';
      $npwd=$donnees['user_pass'];
    }else{
     $npwd=$donnees['user_pass'];
    }   
}

$res=$DB_con->exec("UPDATE users SET user_img='$pic',user_name='$name',user_prenom='$prenom',user_date='$datee',societe='$societe',pays='$pays',etat='$etat',
ville='$ville',adresse='$adresse',user_sexe='$sexe',num_tel='$tel',user_pass='$npwd' where user_email='$umail'");
if($res>0){
    $msg='<i class="fa fa-check" style="padding:2px 3px"></i>';
    header('Location: profiladmin.php'); 
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <link href="css/metisMenu.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">

</head>

<style type="text/css">

@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
  }
.panel-body .second_block input {
    border: 0px;
    border-bottom: 1px solid #ddd;
    width: 250px;
    font-size: 13px;
    color: #aaa;
    padding-left: 5px;
    box-shadow: none;
    border-radius: 0px

}

.second_block h3{
    color: #777;
    font-size: 15px
}

</style>
<body>

    <div id="wrapper">
        <?php 
          include 'navadmin.php';
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>Profil</h1>
                    <p>home / Profil</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form method="post">   
                          <div class="col-sm-6 primary_block">
                             <h2>Générale</h2>
                            <div class="col-sm-10">
                                <label class="labpic">Picture :</label>   
                                <img <?php echo 'src="images/'.$donnees['user_img'].'"';?> class="picprofil">
                                <input type="file" class="filpic" name="picture">
                            </div>
                            <div class="col-sm-10">
                                <label>Last name :</label>
                                 <input type="text" name="lastname" class="form-control" <?php echo 'value="'.$donnees['user_name'].'"';?>>
                            </div>
                            <div class="col-sm-10">
                                <label>First name :</label>
                                 <input type="text" name="firstname" class="form-control" <?php echo 'value="'.$donnees['user_prenom'].'"';?>>
                            </div>
                            <div class="col-sm-10">
                                <label>Email :</label>
                                <input type="email" disabled class="form-control" <?php echo 'value="'.$donnees['user_email'].'"';?>>
                            </div>
                            <div class="col-sm-10">
                                <label>Birthday :</label>
                                <input type="date" class="form-control" name="datee" <?php echo 'value="'.$donnees['user_date'].'"';?>>
                            </div>
                            <div class="col-sm-10">
                                <label>Societe :</label>
                                <input type="text" placeholder="Societe" class="form-control" name="societe" <?php echo 'value="'.$donnees['societe'].'"';?>>
                            </div>
                            <div class="col-sm-10">
                                <label>Location :</label>
                                <input type="text"  placeholder="Country" name="pays" class="form-control" <?php echo 'value="'.$donnees['pays'].'"';?>>
                                <input type="text"  placeholder="State" name="etat" class="form-control" <?php echo 'value="'.$donnees['etat'].'"';?>>
                                <input type="text"  placeholder="City" name="ville" class="form-control" <?php echo 'value="'.$donnees['ville'].'"';?>>
                                <input type="text"  placeholder="Address" name="adresse" class="form-control" <?php echo 'value="'.$donnees['adresse'].'"';?>>

                            </div>
                            
                            <div class="col-sm-10">
                                <label>Sexe:</label>

                                <input type="txt"  class="form-control" <?php echo 'value="'.$donnees['user_sexe'].'"';?> name="sexe">
                            </div>
                            
                             <div class="col-sm-10">
                                <label>N° Phone:</label>
                                <input type="number" class="form-control" name="tel" placeholder="00000000" <?php echo 'value="'.$donnees['num_tel'].'"';?>>
                            </div>
                          </div>
                          <div class="col-sm-6 second_block">
                            <h3>Password</h3>
                            
                                <div class="col-sm-10">
                                <label>Current Password :</label>
                                <input type="password"  class="form-control" placeholder="Current Password" name="pwd"
                                <?php if($msgerreur=="Password"){echo 'style="border:1px solid red"';}?>>
                                 </div>
                                 <div class="col-sm-10">
                                <label>New Password: </label>
                                 <input type="password"  class="form-control" placeholder="New Password" name="npwd"
                                 <?php if($msgerreur=="nPassword"){echo 'style="border:1px solid red"';}?>>
                                 </div>

                                  <button type="submit" name="btn-modifie" class="btn-env">Modify</button> <?php echo $msg ;?>
                                  



                                  
                          


                          </div> 
                 </form> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/metisMenu.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>

</html>

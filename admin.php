<?php
require_once 'configad.php';

?>

<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<title>Admin</title>
<link href="bootstrap.css" rel="stylesheet">
<link href="css/sb-admin-2.css" rel="stylesheet">
<link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">
</head>

<style type="text/css">
@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
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
                    <h1>Add produits</h1>
                    <p>home / Add produits</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <form method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="col-sm-6 primary_block">
                             <h2>Générale</h2>
                            <div class="col-sm-10">
                                <label>Categorie :</label>
                                <select class="form-control" name="txtcat">
                                    <option>-----</option>
                                    <option value="mobile">Mobile</option>
                                    <option value="laptop">Pc</option>
                                </select>    
                            </div>
                            <div class="col-sm-10">
                                <label>Marque :</label>
                                <input type="text" placeholder="Marque" class="form-control" name="txtmarq">
                            </div>
                            <div class="col-sm-10">
                                <label>Model :</label>
                                <input type="text"  placeholder="Model" class="form-control" name="txtmod">
                            </div>
                             <div class="col-sm-10">
                                <label>Référence :</label>
                                <input type="text" placeholder="Référance" class="form-control" name="txtref">
                            </div>
                            <div class="col-sm-10">
                                <label>Prix :</label>
                                <input type="numbre"  placeholder="Prix" class="form-control" name="txtprix">
                            </div>
                            
                            
                            <div class="col-sm-10">
                                <label>Images :</label>
                                <input type="file" name="img1">
                            </div>
                            <div class="col-sm-10">
                                <label>Images :</label>
                                <input type="file" name="img2">
                            </div>
                            <div class="col-sm-10">
                                <label>Images :</label>
                                <input type="file" name="img3">
                            </div>
                            <div class="col-sm-10">
                                <label>Etat:</label>

                                <input type="text"  class="form-control" placeholder="Etat" name="txtetat">
                            </div>
                            <div class="col-sm-10">
                                <label>Couleur :</label>

                                <input type="color"  class="form-control" name="color" >
                            </div>
                            
                             <div class="col-sm-10">
                                <label>Description :</label>
                                <textarea class="form-control" style="height:150px" placeholder="Description" name="txtdes"></textarea>
                            </div>
                            <div class="col-sm-10">
                                <label>Quantite :</label>

                                <input type="number"  class="form-control" value="1" min="1" name="qte">
                            </div>
                          </div>
                          <div class="col-sm-6 second_block">
                            <h2>Fiche technique </h2>
                            <div class="col-sm-12">
                                   <table  border="0">
                                          <tr>
                                            <td><label>Design:</label></td>
                                            <td><input type="text" name="design"></td>
                                            
                                          </tr>
            
                                          <tr>
                                            <td><label>Dimensions:</label></td>
                                            <td><input type="text" name="dimensions"></td>
                                          </tr>
                                          <tr>
                                            <td><label>Poids:</label></td>
                                            <td><input type="text" name="poid"></td>
                                          </tr>
                                          <tr>
                                            <td><label>Processeur:</label></td>
                                            <td><input type="text" name="processeur"></td>
                                          </tr>
                                          <tr>
                                            <td><label>Système d'exploitation(OS):</label></td>
                                            <td><input type="text" name="syse"></td>
                                          </tr>
                                          <tr>
                                            <td><label>Résolution (Écran):</label></td>
                                            <td><input type="text" name="resolution"></td>
                                          </tr>
                                          <tr>
                                            <td><label>Appareil photo:</label></td>
                                            <td><input type="text" name="apphoto"></td>
                                          </tr>
                                          <tr>
                                            <td><label>Mémoire interne:</label></td>
                                            <td><input type="text" name="memoire"></td>
                                          </tr>
                                          <tr>
                                            <td><label>4G:</label></td>
                                            <td><input type="text" name="catg"></td>
                                          </tr>
                                          <tr>
                                            <td><label>Date de sortie:</label></td>
                                            <td><input type="text" name="date_sortie"></td>
                                          </tr>


                                     
                                 </table>  
                               
                            </div>


                          </div> 
                           <button type="submit" class="btn-env" name="ajoute">Added</button> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                </div>
                
            </div>
          </form>  
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
     if(isset($_POST['ajoute'])){
        $cat=$_POST['txtcat'];
        $marq=$_POST['txtmarq'];
        $model=$_POST['txtmod'];
        $ref=$_POST['txtref'];
        $prix=$_POST['txtprix'];
        $cat=$_POST['txtcat'];
        $img1=$_POST['img1'];
        $img2=$_POST['img2'];
        $img3=$_POST['img3'];
        
        $color=$_POST['color'];
        $etat=$_POST['txtetat'];
        $description=$_POST['txtdes'];
        $qte=$_POST['qte'];
        $design=$_POST['design'];
        $dimensions=$_POST['dimensions'];
        $poid=$_POST['poid'];
        $processeur=$_POST['processeur'];
        $syse=$_POST['syse'];
        $resolution=$_POST['resolution'];
        $apphoto=$_POST['apphoto'];
        $memoire=$_POST['memoire'];
        $catg=$_POST['catg'];
        $date_sortie=$_POST['date_sortie'];
        $date=date("Y-m-d")." ".date("H:i:s");
        
        

        $res=$DB_con->exec("INSERT INTO produit(categorie,model,marque,referance,prix,img,img_face,img_darrier,etat,color,description,quantite,date_entre) 
        values('$cat','$model','$marq','$ref','$prix','$img1','$img2','$img3','$etat','$color','$description','$qte','$date')");
        $DB_con->exec("INSERT INTO fichet(design,referance,dimensions,poids,processeur,syse,resolusion,apphoto,memoire,catg,date_sortie) 
        values('$design','$ref','$dimensions','$poid','$processeur','$syse','$resolution','$apphoto','$memoire','$catg','$date_sortie')");
        var_dump($res);



     }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/metisMenu.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>

</html>

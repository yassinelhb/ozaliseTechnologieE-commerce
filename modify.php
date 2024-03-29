<?php
require_once 'configad.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modifier</title>

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

.panel-body label{
  margin-bottom: 0;
  color: #555;
  letter-spacing:0.3px;
  font:200 12px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}
.panel-body .primary_block .form-control{
    margin-bottom: 10px;
    height: 36px;
    font-size: 13px;
    color: #aaa;
   }
.panel-body .primary_block .form-control:focus{
 outline: none;
}

.panel-body .primary_block input[type="file"]{
    margin: 5px 0
}
.panel-body h2{
    
    font:200 16px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    text-decoration: underline; 
    margin-bottom: 25px;
    



}
.panel-body .second_block label{

    padding: 9px;
    padding-left: 0;
}
.panel-body .second_block input{
   border: 0px;
   border-bottom: 1px solid #ddd;
   width: 250px;
   font-size: 13px;
   color: #aaa;
   padding-left: 5px
}
.panel-body .second_block input:focus{
   outline: none;
   border-bottom: 2px solid #00acac;
   transition:.7s;
}
.panel-body .btn-env{
    background:#00acac;
    border:none; 
    border-radius: 4px;
    color: #fff;
    width: 100px;
    height: 35px;   
    border: 1px solid #29a;
    margin:32px 0;
}
.panel-body .second_block .btn-delete{
    border: 0px;
    background-color: transparent;
}
.panel-body .second_block .fa-trash-o{
    font-size: 20px
}
.panel-body .btn-env:hover{
    box-shadow: 0 0 2px rgba(0,0,0,0.5);
    }

 .primary_block .input-search .form-control{
  display: inline-block;
  width: 190px;
  padding: 0;
  margin: 0;
  height: 42px;
  border-radius: 0px;
  border: 0px;
  padding-left:7px;
  box-shadow:3px 0px 12px -5px #999
 }
 .tee-bloc{
    
    border: 2px solid #ddd;
    margin-top: 40%;
    padding: 10px;
    height: 260px;

 }
 .tee-bloc label{
    margin: 10px;
    color: #777;
    width: 110px;
    font-size: 16px;
  
 }
 .tee-bloc input{
    margin: 5px;
    padding: 5px;
    border:0px;
    border-bottom: 2px solid #ddd;
    outline: none;
 }
 .tee-bloc input:focus{
    margin: 5px;
    padding: 5px;
    border:0px;
    border-bottom: 2px solid #00acac;
    transition:2s;
    outline: none;
 }
 .img-sold img{
    width: 120px;
    margin-bottom: 20px
 }


</style>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
          include 'navadmin.php';
        ?>
        <?php 
         $id=$_GET['id'];
         $reponse= $DB_con->query("SELECT * from produit where id='$id'");
         $donnees = $reponse->fetch();
         
        ?>
         <?php
         if(isset($_POST['btn-modifie'])){
        
        $prix=$_POST['txtprix'];
         
        $img1=$_POST['img1'];
        if($img1==""){
            $img1=$donnees['img'];
        }
        $img2=$_POST['img2'];
        if($img2==""){
            $img2=$donnees['img_face'];
        }
        $img3=$_POST['img3'];
        if($img3==""){
            $img3=$donnees['img_darrier'];
        }
        $etat=$_POST['txtetat'];
        $color=$_POST['color'];
        
        $qte=$_POST['qte'];
        $date=$_POST['date_entre'];
        $pcg=$_POST['pcg'];
        $dtf=$_POST['dtf'];
           $prixs=$donnees['prixsolde'];
        if($pcg>0 and $donnees['prixsolde']==0){
          $prixs=$prix;
        }
        echo $prix." ".$pcg;
        $re=$DB_con->exec("UPDATE produit SET prix='$prix',img='$img1',img_darrier='$img3',img_face='$img2',color='$color',
            etat='$etat',quantite='$qte',date_entre='$date',datefinsolde='$dtf',pourcentage='$pcg',prix=$prix*(100-$pcg)/100,prixsolde='$prixs' where id='$id'");
        if($re>0){
            $msg="Produit a ete modifie avec succe";
        }else{
            $msg="";
        }
        
    }
    ?>   
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>Modify produits <span><?php echo $donnees['marque']; ?></span> </h1>
                    <p>home / Modify produits</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           <form method="post"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                         
                          <div class="col-sm-7 second_block">
                            <h2>Générale </h2>
                            
                                   <table  border="0">
                                          <tr>
                                            <td><label>Categorie:</label></td>
                                            <td><input type="text" disabled <?php echo 'value="'.$donnees['categorie'].'"'; ?>></td>
                                            
                                          </tr>
            
                                          <tr>
                                            <td><label>Marque:</label></td>
                                            <td><input type="text" disabled <?php echo 'value="'.$donnees['marque'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Model:</label></td>
                                            <td><input type="text" disabled <?php echo 'value="'.$donnees['model'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Référance:</label></td>
                                            <td><input type="text" disabled <?php echo 'value="'.$donnees['referance'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Prix:</label></td>
                                            <td><input type="text" name="txtprix" <?php echo 'value="'.$donnees['prix'].'"'; ?>> </td>
                                          </tr>
                                           <tr>
                                            <td><label>Couleur:</label></td>
                                            <td><input type="color"  name="color"<?php echo 'value="'.$donnees['color'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Images:</label></td>
                                            <td><input type="file" name="img1" ></td>
                                            <td><img style="width:37px;position:absolute;margin-top:-27px"<?php echo 'src="produit/'.$donnees['img'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Images:</label></td>
                                            <td><input type="file" name="img2"></td>
                                            <td><img style="width:37px;position:absolute;margin-top:-24px"<?php echo 'src="produit/'.$donnees['img_face'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Images:</label></td>
                                            <td><input type="file" name="img3"></td>
                                            <td><img style="width:37px;position:absolute;margin-top:-21px"<?php echo 'src="produit/'.$donnees['img_darrier'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Etat:</label></td>
                                            <td><input type="text"  name="txtetat"<?php echo 'value="'.$donnees['etat'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Date:</label></td>
                                            <td><input type="text" name="date_entre"<?php echo 'value="'.$donnees['date_entre'].'"'; ?>></td>
                                          </tr>
                                          
                                          <tr>
                                            <td><label>Quantite:</label></td>
                                            <td><input type="text" name="qte" <?php echo 'value="'.$donnees['quantite'].'"'; ?>></td>
                                          </tr>


                                     
                                 </table>  
                               
                            
                            <button type="submit" class="btn-env" name="btn-modifie">Modify</button><span style="font-size:12px"><?php  if(isset($_POST['btn-modifie'])){ echo " ".$msg;} ?>

                          </div> 
                          <div class="col-sm-5">
                             <div class="col-sm-12 tee-bloc">
                                <div class="img-sold"> 
                                    <img src="images/solde.png">
                                </div>    
                                <div class="col-sm-12">
                                    <label>Pourcentage:</label>
                                    <input type="text" name="pcg" <?php echo 'value="'.$donnees['pourcentage'].'"'; ?>>
                                </div> 
                                <div class="col-sm-12">
                                    <label>Jusqu'a:</label>
                                    <input type="text" name="dtf" <?php echo 'value="'.$donnees['datefinsolde'].'"'; ?>>
                                </div> 
                             </div>    
                          </div>  
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                </div>
                
            </div>
            <!-- /.row -->
         </form>   
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

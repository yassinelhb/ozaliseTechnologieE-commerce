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




</style>


<body>

    <div id="wrapper">

        <?php 
          include 'navadmin.php';
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>Suivie Commande</h1>
                    <p>home / All produits</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php
            $id=$_GET['id'];
            $rep = $DB_con->query("SELECT * FROM commande,produit,users where commande.confirme='oui'and commande.user_id=users.user_id and commande.numcom='$id'");
            $donnees = $rep->fetch();
            $prixt=$donnees['prix']*$donnees['qtee'];

              
            ?>   
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form method="post">
                          <div class="col-sm-12 second_block">
                              <div class="formclient">
                                <h1>Adresse Client</h1>
                                <p><?php echo $donnees['user_email']; ?></p>
                                <p><?php echo $donnees['societe']; ?></p>
                                <p><?php echo $donnees['user_name'].$donnees['user_prenom']; ?></p>
                                <p><?php echo $donnees['adresse']; ?></p>
                                <p><?php echo $donnees['etat'].','.$donnees['ville'].' '.$donnees['cod_postal']; ?></p>
                                <p><?php echo $donnees['pays']; ?></p>
                                <p><?php echo $donnees['num_tel']; ?></p>

                              </div> 
                              <table class="form-table">
                                <thead>
                                    <tr>
                                      <td>N° Commande</td>
                                      <td>Produit</td>
                                      <td>Description</td>
                                      <td>Date</td>
                                      <td>Paiement</td>
                                      <td>Quantite</td>
                                      <td>Prix unitaire</td>
                                      <td>Prix total</td>
                                      
                                    </tr>    
                                </thead>
                                <tbody>
                                <?php
                                echo '  
                                  <tr>              
                                  <td>'.$donnees['numcom'].'</td>
                                  <td><img src="produit/'.$donnees['img'].'" style="width:50px"></td>
                                  <td>'.$donnees['marque'].',Color:'.$donnees['color'].'</td>
                                  <td>'.$donnees['date_com'].'</td>
                                  <td>'.$donnees['paiment'].'</td>
                                  <td>'.$donnees['qtee'].'</td>            
                                  <td>'.$donnees['prix'].'</td>  
                                  <td>'.$prixt.'</td>              
                                 </tr>';
                               ?>   
                              </tbody>         
                              </table>
                              
                           
                        </div>
                        <!-- /.panel-body -->
                    </form>    
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

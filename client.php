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


.form-table > thead > tr > td {
 border: 1px solid #ddd;
 font-size: 12px;
 padding: 5px
 
}

.btndel{
    background-color: transparent;
    border: none;
    outline: none;
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
                    <h1>Liste client</h1>
                    <p>home / All produits</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form method="post">
                          <div class="col-sm-12 second_block">
                              
                              <table class="form-table">
                                <thead>
                                    <tr>
                                      <td>First name</td>
                                      <td>Last name</td>
                                      <td>Email</td>
                                      <td>N° Phone</td>
                                      <td>Sexe</td>
                                      <td>Country</td>
                                      <td>State</td>
                                      <td>Societe</td>
                                      <td>Supprime</td>
                                      
                                    </tr>    
                                </thead>
                                <tbody>
                                <?php
                                   if(isset($_POST['deleteclient']) ){
                                     $id= $_POST['deleteclient'];
                                     $d=$DB_con->exec("DELETE  FROM users WHERE user_id='$id'");
                                     
                                    
                                   }
                                   
                                    $rep = $DB_con->query("SELECT * FROM users where personnalite='user'");
                                    while ($donnees = $rep->fetch()){
                                 echo '  
                                  <tr>              
                                  <td>'.$donnees['user_prenom'].'</td>
                                  <td>'.$donnees['user_name'].'</td>
                                  <td>'.$donnees['user_email'].'</td>
                                  <td>'.$donnees['num_tel'].'</td>
                                  <td>'.$donnees['user_sexe'].'</td>
                                  <td>'.$donnees['pays'].'</td>
                                  <td>'.$donnees['etat'].'</td>
                                  <td>'.$donnees['societe'].'</td>
                                  <td><button type="submit" name="deleteclient" class="btndel" value="'.$donnees['user_id'].'">
                                  <i class="fa fa-trash-o "></i></button></td>
                                              
                                 </tr>';
                                 }
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

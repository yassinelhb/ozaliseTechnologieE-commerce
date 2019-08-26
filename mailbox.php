<?php
require_once 'configad.php';
$DB_con->exec("UPDATE mailbox SET vu='oui'");

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




.table{
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    width: 100%;
    
} 
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 7px;   
    border-top-width: 1px;
    border-top-style: solid;
    text-align: left;
    line-height: 40px;
    font-weight: 400;
    color: #555;
    font-size: 12px
}


tbody > tr > td > .ttob{
  font: 200 12px/18px Poppins-Regular,sans-serif;
  color: #222;
  font-style: normal;
  text-decoration: none;
  display: inline-block;
  margin: 0
}
 tbody > tr > td > .ex{ 
    display: inline-block;
    font: 200 12px/18px Poppins-Regular,sans-serif;
    color: #aaa
}

 tbody > tr > td > span.check{ 
    display: inline-block;
    padding-top: 8px;
    font: 200 12px/18px Poppins-Regular,sans-serif;

}

</style>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->


            <ul class="nav navbar-top-links navbar-right">
                
                <?php
                                $reponse = $DB_con->query("SELECT count(numcom) as nbcom FROM commande where vu=''");
                                $row=$reponse->fetch();
                                $nbrcom="";
                                if($row['nbcom']>0){
                                    $nbrcom='<span class="nb-notification">'.$row['nbcom'].'</span>';
                                }                             
                ?>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
   
                        <i class="fa fa-bell-o"></i> <?php echo $nbrcom; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <?php
                          $reponse = $DB_con->query("SELECT * FROM commande,produit,users 
                            where commande.user_id=users.user_id and produit.id=commande.pro_id Order by(numcom) Desc LIMIT 4");
                          $date_entre=date("Y-m-d")." ".date("H:i:s");
                          while($row=$reponse->fetch()){
                            echo'
                            <li class="divise-no">
                            <a href="#">
                                <div>
                                    <h2 class="drop_title">'.$row['user_prenom'].$row['user_name'].'
                                    <span class="drop_txt">a commande '.$row['qtee'].' x</span>
                                    '.$row['marque'].'
                                    </h2>
                                    <h3 class="drop_date">'.$row['date_com'].'</h3> 
                                </div>
                            </a>
                           </li>';
                          }                        
                         
                        
                        ?>
                        <li>
                            <a class="text-center btn-enx" href="listcommande.php">
                                <strong>See All Commande</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding:10px 7px">
                       <img   <?php echo 'src="images/'.$donnees['user_img'].'"';?> style="width:30px;height:30px;border-radius:50%"> 
                        <span style="padding:0 5px;font-size:12px;letter-spacing: 0.3px">
                            <?php echo $donnees['user_prenom']." ".$donnees['user_name'];?></span><i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profiladmin.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="deconnexion.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                           <div class="user-pro">
                                <span class="lign-user"></span> <img   <?php echo 'src="images/'.$donnees['user_img'].'"';?>>
                                <h1 >  <?php echo $donnees['user_prenom']." ".$donnees['user_name'];?></h1>
                                <span><?php echo $donnees['user_email'] ;?></span>
                                <p>
                                    <a href="profiladmin.php"><i class="fa fa-user"></i></a>
                                    <a href="deconnexion.php"><i class="fa fa-power-off"></i></a>
                                </p>    
                            </div> 
                        </li>
                        <li>
                            <span class="navig-header">Navigation</span>
                        </li>
                        <li>
                            <a href="admin.php"><i class="fa fa-cubes fa-fw"></i> Produit<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="produit.php?x=1">All Produit</a>
                                </li>
                                <li>
                                    <a href="admin.php">Add Produit</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="listcommande.php"><i class="fa fa-list-ol fa-fw"></i> Commande</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-user fa-fw"></i> User<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="client.php">All Client</a>
                                </li>
                                <li>
                                    <a href="ajouteadmine.php">Add Admin</a>
                                </li>
                                
                            </ul>
                        </li>
                       
                        <li>
                           
                            <a href="mailbox.php"><i class="fa fa-envelope"></i> Malbox </a>
                            
                            
                        </li>
                        <li>
                            <a href="form.php"><i class="fa fa-edit fa-fw"></i> Form</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>Mailbox</h1>
                    <p>home / Mailbox</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="col-sm-12 primary_block">
                          <form method="POST">
                            <div class="mail-bar">
                                   <a href="" class="form-btn"><i class="fa fa-refresh"></i></a>
                                   <button class="form-btn" type="submit" name="delete-radio"><i class="fa fa-trash-o"></i></button>
                                   
                                     <div class="mail-left">
                                       
                                      <input type="text" name="txt-search"  onkeyup="showHint(this.value)"><button type="submit" class="serach" name="btn-search"><i class="fa fa-search"></i></button>
                                     
                                    </div>   
                                 </div> 
                                
                            <table class="table table-hover text-center">
                                <tbody>

                                    <?php 
                                     if((isset($_POST['delete-radio']) ) && (isset($_POST['radio_id']) )){
                                         $id= $_POST['radio_id'];
                                         
                                        
                                         $ress=$DB_con->exec("DELETE FROM mailbox WHERE   nummail='$id' ");
                                      
                                       }
               
                                      $reponse=$DB_con->query("SELECT * FROM mailbox,users where mailbox.user_id=users.user_id order by(nummail) desc");
                                      while ($donnees = $reponse->fetch()) {
                                       $objet=$donnees['objet'];
                                       $ref=$donnees['refcom'];
                                       if($objet==""){
                                         $objet="(Aucun objet)";
                                       }
                                       if($ref!=""){
                                         $ref=$ref.",";
                                       }

                                      

                                        echo '

                                        <tr>
                                        <td><span class="check"><input type="radio" name="radio_id" value="'.$donnees['nummail'].'"></span></td>
                                        <td><i class="fa fa-star"></i></td>
                                        <td>'.$donnees['user_email'].'</td>';
                                        echo '<td>
                                             <h2 class="ttob">'.$objet.'</h1>
                                             <p class="ex">-'.$ref.$donnees['message'].'</p></td>

                                        </td>
                                        <td><i class="fa fa-paperclip"></i></td><td>'.$donnees['date_msg'].'</td>
                                         </tr>';
                                      }
                                     
                                      ?>
                                </tbody>
                            </table>
                            
                            </form>
                          </div>
                           
                           
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

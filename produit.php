<?php
require_once 'configad.php';
if((isset($_POST['env-modife']) ) && (isset($_POST['radio_id']) )){
                 $id=$_POST['radio_id'];
                 header('Location: modify.php?id='.$id.'');  
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



.table > thead > tr {
 border-top: 2px solid #00acac;
 background: #00acac;
 font-size: 13px;
 font-weight: 200
}
.table > thead > tr > th{
 border: 1px solid #00acac;
 color: #fff
}
.table > tbody > tr > td{
    line-height: 55px;
}
.table > tbody > tr > td > span{
    width:15px;
    height:15px;
    border-radius:4px;
    display:block;
     margin-top: 19px;
}



</style>
<script type="text/javascript">

  $(document).ready(function(){
    <?php $i=$_GET['x']; $i--;?>
    $('.nbr-page li').removeClass("active");
    $('.nbr-page li:eq(<?php echo $i ?>)').addClass("active");
     
   });
</script>
<script>

function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return  $('#tab1').css("display",""),$('#mail-bar').css("display","")
        ;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                
                if(this.responseText!=""){
                    $('#tab1').css("display","none");
                     $('#mail-bar').css("display","none");

                }
                
                
            }
        };
        xmlhttp.open("GET", "resultat.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<body>

    <div id="wrapper">

        <?php 
          include 'navadmin.php';
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>All produits</h1>
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
                                <div class="mail-bar">
                                   <a href="produit.php?x=1" class="form-btn"><i class="fa fa-refresh"></i></a>
                                   <button class="form-btn" name="env-modife" type="submit"><i class="fa fa-edit"></i></button>
                                     <div class="mail-left">
                                       
                                      <input type="text" name="txt-search"  onkeyup="showHint(this.value)"><button type="submit" class="serach" name="btn-search"><i class="fa fa-search"></i></button>
                                     
                                    </div>   
                                 </div> 
                              <table class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                      <th></th>
                                      <th>id</th>
                                      <th>Categorie</th>
                                      <th>Marque</th>
                                      <th>Model</th>
                                      <th>Référance</th>
                                      <th>Image</th>
                                      <th>Couleur</th>
                                      <th>Quantite</th>
                                      <th>Prix</th>
                                       <th>Date</th>

                                    </tr>
                                </thead> 
                                <tbody id="tab1">
                                    <?php 
                                    $x= $_GET['x'];
                                       
                                       $rep = $DB_con->query("SELECT * from produit ");
                                       $nb= $reponse->rowCount();
                                       $nb3= $reponse->rowCount();
                                       $d=20;
                                       $nb2=$nb % $d;

                                        
                                        if($nb2<$nb){
                                          $nb=$nb+$d;
                                          $nb;
                                        }
                                        $nb1=$nb / $d;
                                        
                                       
                                          
                                          $c=0;
                                          
                                         
                                        for ($i=2; $i < $nb1 ; $i++) { 
                                             if ($x==$i) {
                                              
                                              $c=$i*$d-$d;  
                                               $rep= $DB_con->query("SELECT * from produit LIMIT $d OFFSET $c");
                                             }
                                       } 

                                              $rep= $DB_con->query("SELECT * from produit LIMIT $d OFFSET $c");
                
                                   
                                     while ($donnees = $rep->fetch() ){
                                       echo '  
                                           <tr>
                                                <td><input type="radio" name="radio_id" value="'.$donnees['id'].'" class="id_radio"></td>
                                                <td>'.$donnees['id'].'</td>
                                                <td>'.$donnees['categorie'].'</td>
                                                <td>'.$donnees['marque'].'</td>
                                                <td>'.$donnees['model'].'</td>
                                                <td>'.$donnees['referance'].'</td>
                                                <td><img src="produit/'.$donnees['img'].'" style="width:50px"></td>
                                                <td><span style="background:'.$donnees['color'].'"></span></td>
                                                <td>'.$donnees['quantite'].'</td>
                                                <td>'.$donnees['prix'].'</td>
                                                <td>'.$donnees['date_entre'].'</td>
                                                
                                          </tr>';
                                        }
                                    ?>      
                                  
                                </tbody>
                                <tbody id="txtHint">            
                              </tbody>
                              </table>
                              
                              <div class="mail-bar" id="mail-bar">

          <?php 
          
          
              $d1=$d*$x;
              if($d1>$nb3){
                $d1=$nb3;
              }
           echo '<p class="txt-bottom">Résultats '.$c.' - '.$d1.' sur '.$nb3.' entries <p>'; ?>
             <div class="mail-left" >
              <ul class="nbr-page" >
                <li class="active"><a href="stock.php?id=1" class="form-btn nbr" >1</a></li>
                 <?php 
                      
                     for ($i=2; $i < $nb1 ; $i++) { 
                      echo'<li><a href="stock.php?id='.$i.'" class="form-btn nbr c2">'.$i.'</a></li>';

                       
                     }

                  ?>
             </ul>                   
            </div>   
       </div> 
                           
                          </div> 
                           
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

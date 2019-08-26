<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=hanout;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
button{
  background-color: transparent;
  border: none;
}
button img{
  width: 25px
}

input{
  display: none;
}
.imgent{
  width: 25px;
  padding: 0 3px
}
a{
  
  padding: 7px;
  width: 90px;
  border-radius: 4px;
  box-shadow: 0 0 5px #555;
  margin-top: 8px;
  margin-bottom: 50px;
  display: inline-block;
 
}



</style>
</head>
<body>

<div class="container">
  <h2>Client gsm</h2>
  <a href="ajoutclient.php" class="btn btn-primary"><img src="add.png" width="30" height="25"></a>
  <table class="table">
    <thead>
      <tr>
        <th>Referance</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>N° de Tele</th>
        <th>Date entre</th>
        <th>Marque</th>
        <th>Model</th>
        <th>Couleur</th>
        <th>Panne</th>
        <th>Resultat</th>
        <th>Date sortie</th>


      </tr>
    </thead>
    <tbody>
      <?php 
           $reponse = $bdd->query("SELECT referance,nom,prenom,tel,marque,model,color,panne,id,resultat,date_sortie,date_entre FROM client ");
           while ($donnees = $reponse->fetch()){
            $res=$donnees['resultat'];
            if($res=="Standby"){
              $color="active";
            }elseif($res=="Repaired"){
              $color="success";
            }else{
              $color="danger";
            }

            echo '<tr class="'.$color.'" >';
                        echo '<td>'.$donnees['referance'].'</td><td>'.$donnees['nom'].'</td><td>'.$donnees['prenom'].'</td>
            <td>'.$donnees['tel'].'</td><td><img src="login.png" class="imgent">'.$donnees['date_entre'].'</td><td>'.$donnees['marque'].'</td><td>'.$donnees['model'].'</td>
            <td>'.$donnees['color'].'</td>
            <td>'.$donnees['panne'].'</td>';
            echo ' <form method="post" action="listeclient.php">
                    <td>';
                  
             echo '<input type="text" name="ww" value="'.$donnees['id'].'">';

            echo '    <button  name="encours" value="Standby" ><img src="loading_throbber.png"></button>
                      <button  name="true" value="Repaired"><img src="check.png"></button>
                      <button name="false" value="Irreparable"><img src="deletered.png"></button>
                  </td>
                  <td>';
                     
                     
              if($donnees['date_sortie']=="") {
                 echo '<button name="logout" value="logout"><img src="application_exit.png"></button></td>';
               }else{
                 echo $donnees['date_sortie'];
                }
              echo '<td><button name="login" value="login"><img src="object_rotate_left.png"></button></td>';  
                  echo ' </form> 
                  </tr>';


          }
      ?>
      <?php
          if(isset($_POST['true'])){
            $resa=$_POST['true'];
            $id=$_POST['ww'];

          $bdd->exec("UPDATE client SET resultat='$resa' where id='$id'");
           
            

          }
          else if(isset($_POST['false'])){
            $resa=$_POST['false'];
            $id=$_POST['ww'];

          $bdd->exec("UPDATE client SET resultat='$resa' where id='$id'");
   
          }elseif(isset($_POST['encours'])){
          $resa=$_POST['encours'];
          $id=$_POST['ww'];

          $bdd->exec("UPDATE client SET resultat='$resa' where id='$id'");


           }
           if(isset($_POST['logout'])){
        
            $log=$_POST['logout'];
            $id=$_POST['ww'];
            $dat=date("Y-m-d")." ".date("H:i:s");


            $bdd->exec("UPDATE client SET date_sortie='$dat' where id='$id'");
           }
           if(isset($_POST['login'])){
        
            $log=$_POST['login'];
            $id=$_POST['ww'];
            


            $bdd->exec("UPDATE client SET date_sortie='' where id='$id'");
           }



       
         
       ?>
    </tbody>  
 </table>
</div>
</body>
</html>        
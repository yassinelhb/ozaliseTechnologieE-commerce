<?php
session_start(); 
  if($_SESSION['login']==""){
    header('location:index.php');
  }
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">

<style type="text/css">
body{
background: #eee
}
.tab-content{
  margin-top: 80px;
  background: #fff;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 12px 7px
}
.container{
  width:1340px
   }
.btn-page{
  margin-top: 50px
}

.btn-page > a{
  display: block;
  width: 180px;
  padding: 15px 0;
  text-align: center;
  margin: 10px 0;
  background: #00acac;
  border-radius: 4px;
  border: 1px solid #ccc;
  color: #fff;
  font-size: 17px;
  box-shadow: -10px 5px 10px 0px #999
}
.btn-page > a:hover{
  text-decoration: none;
  box-shadow:  0 0 5px #666
}
.table {
  margin: 10px 0
}
.table > thead > tr {
   background: #ed1b24;
 border-top: 2px solid #ed1b24;
}
.table > thead > tr > th{
  border: 2px solid #ed1b24; 
  color:#fff
}

.primary_block .mail-bar{
    
    height: 50px;
    width: 90%



}

.mail-bar .form-btn{
    padding: 7px 10px;
    width: 35px;
    text-align: center;
    display: inline-block;
    border: 1px solid #ddd;
    border-radius: 3px;
    color: #555a60;
    background-color: transparent;
}
.mail-bar .mail-left{
    float: right;
}
.mail-bar .mail-left p{
    display: inline-block;
    color: #555a60
    
}
.mail-bar .mail-left .serach{
  background: #fff;
  border: 1px solid #ccc;
  padding: 7px 10px;
  width: 35px;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.mail-bar .mail-left input{
  background: #fff;
  border: 1px solid #ccc;
  padding: 7px 10px;
  width: 200px;
  border-right: 0px;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
 
}
.mail-bar .mail-left .left{
    display: inline-block;
    margin-right: -4px;
    border-right: 0px;
    margin-left: 8px;
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px
}
.mail-bar .mail-left .right{
    
    border-bottom-left-radius: 0px;
    border-top-left-radius: 0px;
}
#mail-bar{
  margin-top: 30px
}

.nav-tabs{
  background:  #ed1b24;
  width: 100%;
  position: fixed;
  
  padding-left: 43px;
  box-shadow: 0 0 15px #fff;
  z-index: 1
}

.nav-tabs > li > a {
  border-radius: 0px;
  margin: 0;
  padding: 12px 20px;
  color: #fff;
  font-size: 17px
}
.nav-tabs > img{
  width: 180px;
  float: right;
  
  padding: 0;
  margin:-11px 25px -12px

}
.nav-tabs > li > a:hover {
  background: transparent;
  opacity: 0.5px;
  border: 1px solid transparent

}
.form-bloc{
  height: auto;
  border-radius:5px;
  border: 1px solid #777;
  background-image: url(blur.jpg);
  background-repeat: no-repeat;
  background-position: center;  
  background-size: cover;
  position: fixed;
  top: 25%;
  left: 30%;
  box-shadow: 0 5px 11px 2px #777;
  padding: 37px 8px 8px;

}
.form-bloc p{
  font-size: 15px;
  color: #222;
  text-shadow:0 0 5px #fff;
  padding-left: 3px;
  margin-top: -30px;
  margin-bottom: 9px
}
.form-bloc span{
  position: absolute;
  right: 7px;
  
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  top: 0px;
  color: #fff;
  font-size: 13px;
  padding:0px 19px;
  border: 1px solid #a43f3a;
  border-top: 0px;
  overflow: hidden;
  background-color: #fa2f18;
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.12) 51%,
   rgba(0, 0, 0, 0.04));


}
.form-bloc span:hover{
  box-shadow: 0 0 10px 2px #d9534f

}
.form-bloc span .fa{
  text-shadow:0 0 2px  #000;
  font-weight: 100
}
.form-bloc .sou-bloc{
  height: 100%;
  background: #eee;
  border-radius: 2px;
  border: 1px solid #777;
  padding: 10px;
  padding-bottom: 50px

}
.form-bloc .sou-bloc label{
  font-size: 13px;
  font-weight: 400;
  padding: 10px 20px 0 0
}
.form-bloc .sou-bloc input,.form-bloc .sou-bloc select{
  width: 270px;
  padding: 4px ;
  height: 31px;
  margin: 8px 8px 5px;
  border-radius: 2px;
  border: 1px solid #aaa

}
.form-bloc .sou-bloc button{
  margin-top: 5px;
  margin-left: 20px
}
.form-bloc .sou-bloc  a button{
  color: #222;
  text-decoration: none;
  width: 102px;
  height: 32px;
  line-height: 27px;
  display: inline-block;
  cursor: default;
  
}
.btn-ok{
  width: 102px;
  height: 32px;

}
#ajout{
  display:none;
}
#sorti{
  display: none;
}
#nouvelle{
  display: none;
}
.new-jour{
  text-align: center;
  margin: 5px
}
.nbr-page{
  margin-top: -27px
}
.nbr-page li{
  list-style: none;
  float: left;

}
.nbr-page li .nbr{
  margin: -5px 2px;
  padding: 6px;
  border:1px solid #ed1b24; 
  color: #ed1b24
}
.nbr-page li.active a {
  background: #ed1b24;
  color: #fff
}
</style>
</head>
<body>
  <ul class="nav nav-tabs">
     <li><a href="stock.php?id=1">Stock</a></li>
    <li><a href="vendre.php?id=1">Vendre</a></li>
     <li><a href="entre.php?id=1">Entre</a></li>
    <li class="active"><a href="change.php?id=1">Modifie</a></li>
     <img src="Untitled.png">
  
  </ul>
  <div class="container">
    
   
  <div class="tab-content">
     <div class="row">
       <div class="col-sm-12" style="padding:0 40px" >
         <form method="post">
         
        
          <table class="table table-bordered table-striped" style="box-shadow:0 0 5px #eee">
          <thead>
            <tr>
              <th></th>
              <th>id</th>
              <th>Famille</th>
              <th>Model</th>
              <th>Référance</th>
              <th>Quantite</th>
              
              <th>Date_modifie</th>

            </tr>
          </thead>  
          <tbody id="tab1">
           
             
             <?php
               

                  $reponse = $bdd->query("SELECT * from modifie ");
                
 
               
               
               
               
              while($donnees = $reponse->fetch()){
                echo '  
                       <tr>
                         <td></td>
                        <td>'.$donnees['id'].'</td>
                        <td>'.$donnees['famille'].'</td>
                        <td>'.$donnees['model'].'</td>
                        <td>'.$donnees['referance'].'</td>
                        <td>'.$donnees['Quantite'].'</td>
                        <td>'.$donnees['date_modifie'].'</td>
                      </tr>';
                    
                 }   
               ?>     
            
            

            
            
          </tbody>
         
        </table>
        
     </div>
    </div> 
    </form> 
    </div>
    
  </div>
</div>



 





   

</body>
</html>        
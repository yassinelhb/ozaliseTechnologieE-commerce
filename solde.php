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

    <title>Solde</title>

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
  font-weight: 200;
  font-size: 14px;
  margin-bottom: 0;
  color: #555;
  letter-spacing:0.3px

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
    
    font-size: 21px;
    font-weight: 400;
    font-style: italic;
    text-decoration: underline; 
    margin-bottom: 25px
}

.panel-body .second_block label{

    padding: 9px;
    padding-left: 0;
}
.panel-body .second_block input{
   border: 0px;
   border-bottom: 1px solid #ddd;
   
   font-size: 13px;
   color: #aaa;
   margin-left: 10px;
   margin-right: -3px;
  
}
.table-bordered > tbody > tr > td > .form_tt{
    padding: 0;
    height: 20px;
    width: 130px;
    color: #333;
    background-color: transparent;
    border-bottom: 1px solid transparent;
}
.table-bordered > tbody > tr > td > .form_tt:focus{
    
    border-bottom: 1px solid transparent;
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
 .mail-bar{
    
    height: 50px;
    width: 100%
}
 .mail-bar img{
   width: 120px;
   border-radius: 20px;
   margin: -20px -10px;
   
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
.txt-bottom{
  display: inline-block;
    color: #555a60;
    width: 200px;
    float: left;
}
.mail-bar .mail-left .serach{
  background: #fff;
  border: 1px solid #ccc;
  
  width: 35px;
  height: 35px;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.mail-bar .mail-left input{
  background: #fff;
  border: 1px solid #ccc;
   padding: 01px 10px;
  width: 200px;
  border-right: 0px;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
  height: 35px
 
}
.mail-bar .mail-left input:hover ,.mail-bar .mail-left input:focus{

  border-bottom: 1px solid #ccc;
  
 
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

.nbr-page{
    list-style: none
}
.nbr-page li .nbr{
  margin: -5px 2px;
  padding: 6px;
  border:1px solid #00acac; 
  color: #00acac
}
.nbr-page li.active a {
  background: #00acac;
  color: #fff
}
.btn-delete{
    background-color: transparent;
    border: 0px;
    outline: none;
    width: 10px;
}
.form-mod{
    background-color: transparent;
    border: 0px;
    outline: none;
    color: #00acac
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
                    <h1>Soldes</h1>
                    <p>home / Soldes</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
              <?php if(isset($_POST['delete-radio'])){
                 $id= $_POST['delete-radio'];
                 $datenew=date("Y-m-d")." ".date("H:i:s");
                 $s=$DB_con->exec("UPDATE produit SET datefinsolde='$datenew',pourcentage=0 where id='$id'");
               }
               if(isset($_POST['env-modife'])){
                 $id= $_POST['env-modife'];
                 $pcg=$_POST['ppcg'.$id];
                 $dfin=$_POST['ddfin'.$id];
                 $DB_con->exec("UPDATE produit SET datefinsolde='$dfin',pourcentage='$pcg',prix=prixsolde*(100-$pcg)/100 where id='$id'");
                    
               }
               
               ?>
               
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form method="post">
                          <div class="col-sm-12 second_block">
                                <div class="mail-bar">
                                   <img src="images/logo_soldes_1_.png">
                                     <div class="mail-left">
                                       
                                      <input type="text" name="txt-search"  onkeyup="showHint(this.value)"><button type="submit" class="serach" name="btn-search"><i class="fa fa-search"></i></button>
                                     
                                    </div>   
                                 </div> 
                              <table class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                      
                                      <th>id</th>
                                      
                                      <th>Marque</th>
                                      <th>Référance</th>
                                      <th>Image</th>
                                      <th>Prix</th>
                                      <th>Pourcentage</th>
                                      <th></th>

                                       <th>Jusaqu'a</th>

                                    </tr>
                                </thead> 
                                <tbody id="tab1">
                                    <?php 
                                    $x= $_GET['x'];
                                       
                                       $rep = $DB_con->query("SELECT * from produit where pourcentage>0 ");
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
                                               $rep= $DB_con->query("SELECT * from produit where pourcentage>0 LIMIT $d OFFSET $c");
                                             }
                                       } 

                                              $rep= $DB_con->query("SELECT * from produit where pourcentage>0 LIMIT $d OFFSET $c");
                
                                   
                                     while ($donnees = $rep->fetch() ){
                                       echo '  
                                           <tr>
                                                
                                                <td>'.$donnees['id'].'</td>
                                                
                                                <td>'.$donnees['marque'].'</td>
                                              
                                                <td>'.$donnees['referance'].'</td>
                                                <td><img src="produit/'.$donnees['img'].'" style="width:50px"></td>
                                                <td>'.$donnees['prixsolde'].'</td>
                                                <td><input type="text" name="ppcg'.$donnees['id'].'" class="form_tt" style="width:20px" value="'.$donnees['pourcentage'].'">%
                                                <button class="form-mod" name="env-modife" value="'.$donnees['id'].'" type="submit"><i class="fa fa-edit"></i>
                                                 </button> 
                                                </td>
                                                 <td><button class="btn-delete" type="submit" name="delete-radio" value="'.$donnees['id'].'"><i class="fa fa-trash-o"></i></button></td>
                                                <td><input type="text" class="form_tt" name="ddfin'.$donnees['id'].'" value="'.$donnees['datefinsolde'].'">
                                                 <button class="form-mod" name="env-modife" value="'.$donnees['id'].'" type="submit"><i class="fa fa-edit"></i>
                                                 </button>
                                                 </td>
                                                
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

<?php

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





.eurre{
    color: red;
    font-size: 11px;
    display: block;
    margin-top: -10px;
    margin-bottom: 10px
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
                    <h1>Add Admin</h1>
                    <p>home / Add Admin</p>
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
                                <label>Last name : *</label>
                                 <input type="text" name="lastname" class="form-control" placeholder="Last name" >
                                  
                                  <span class="eurre">fg </span>
                            </div>
                            <div class="col-sm-10">
                                <label>First name : *</label>
                                 <input type="text" name="firstname" class="form-control" placeholder="First name"
                                 >
                            </div>
                            <div class="col-sm-10">
                                <label>Email : *</label>
                                <input type="email" name="email" class="form-control" placeholder="Email"
                              >
                            </div>

                            <div class="col-sm-10">
                                <label>Password : *</label>
                                <input type="password" name="pwd" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-sm-10">
                                <label>Birthday : </label>
                                <input type="date" class="form-control" name="datee" 
>                            </div>
                             <div class="col-sm-10">
                                <label>Sexe: </label><br/>
                                 <select name="sexe" class="form-control">
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                 </select>   
                            </div>
                            
                             
                             <button type="submit" name="btn-add" class="btn-env">Added</button> <?php echo $msg ;?>
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

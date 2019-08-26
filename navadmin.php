<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">O.Technologie</a>
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
                                <li>
                                    <a href="solde.php?x=1">Soldes</a>
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
                            <?php
                                $reponse = $DB_con->query("SELECT count(nummail) as nbmail FROM mailbox where vu=''");
                                $row=$reponse->fetch();
                                $nbrmail="";
                                if($row['nbmail']>0){
                                    $nbrmail='<span class="numbremal">'.$row['nbmail'].'</span>';
                                }                             
                            ?>
                            <a href="mailbox.php"><i class="fa fa-envelope"></i> Malbox <?php echo $nbrmail; ?></a>
                            
                            
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
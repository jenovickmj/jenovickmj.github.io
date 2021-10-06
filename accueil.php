<?php 
session_start();
    Include("../model/connexion.php");
    if(isset($_SESSION['username']))
    {
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bras-SIMBA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top" >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:black">
            <div class="container">
                <a class="navbar-brand" href="../index.html"><img src="image/bras-simba.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                 <?php 
                if($_SESSION['fonction']=='client'){
                ?>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                       <li class="nav-item"><a class="nav-link" href="#menu">menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#connexion">Connexion</a></li>
                    </ul>
                </div>
                <?php } ?>

                 <?php 
                if($_SESSION['fonction']=='administrateur'){
                ?>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#menu">menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#connexion">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#boisson">Boisson</a></li>
                        <li class="nav-item"><a class="nav-link" href="#client">Client</a></li>
                        <li class="nav-item"><a class="nav-link" href="#agent">Agent</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Admin">Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="#commande">Bon De Commande</a></li>
                    </ul>
                </div>
                <?php } ?>

                  <?php 
                if($_SESSION['fonction']=='agent'){
                ?>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#connexion">Connexion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#boisson">Boisson</a></li>
                        <li class="nav-item"><a class="nav-link" href="#commande">Bon De Commande</a></li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </nav>
        <br><br>
        <!-- Masthead-->
        <?php 
                if($_SESSION['fonction']=='client'){
                ?>
        <section class="page-section" id="menu" style="background-color:#dee4e7;background-image:url("images/img24.JPG")">
            <div class="container">
                
                  <div class="container">
                   <div class="row">
                     <?php
                     Include("../model/connexion.php");
                       $statement0 = $db->prepare("SELECT * from boisson");
                       $statement0->execute();
                       $result0 = $statement0->fetchAll(PDO::FETCH_ASSOC);             
                       foreach ($result0 as $row0)

                       {
                 
                     ?>
                   <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                     <div id="voir1<?php echo $row0['ref_boisson']?>" class="mfp-hide book-form" style="background:#3f5f5f; color:white" >
                       <a href="#" class="mfp-hide book-form" data-toggle="modal" data-target="#voir<?php echo $row0['ref_boisson']?>"> 
                       <td style="color:black">
                         <img src="image/img_boisson/<?php echo $row0['photo'];?>" style="width: 150px; height: 220px " class="img-thumb" >
                        </td>
                      </a>
                     </div>
                     
                    </div>
                    
                      <?php
                      include ("../controls/msg_cmd/cmd_msg.php");
                     }
                   ?>
                   </div>

                 </div>

          </div>
          

        </section>
        <!-- Services-->
         
        <section class="page-section" id="connexion" style="background:radial-gradient(circle,white,#0856b6 )">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-heading text-uppercase">BOISSONS</h1>
                </div>
                <div class="row">
                    <form method="POST" action="../controls/connexion/authentification.php">
                        <div class="container">
                           <div class="row">
                            <div class="col-md-3">
                            </div>
                               <div class="col-md-6" style="background:linear-gradient(#95989a, #babdbe 60% ,#95989a)">
                                   <div class="panel panel-default">
                                      <div class="panel-heading" style="background:linear-gradient(#95989a, #babdbe 60% ,#95989a); color:white; font-size:20px"><center><B><h1> AUTHENTIFICATION</h1></B></center></div>
                                        <div class="panel-body" style="background-color:#e7ebee">
                                           <label><B> Nom Utilisateur:</B> </label>
                                           <input type="text" class="form-control" name="txtnom">
                                           <p class="help-block"></p>
                                           <label><B> Mot de passe: </B></label>
                                           <input type="password" class="form-control" name="txtmdp">
                                           <p class="help-block"></p>
                                        </div>
                                        <div class="panel-footer" style="background-color:#e7ebee; font-size:14px">
                                           <div class="form-group text-center">
                                            <div class="row">
                                              <div class="col-sm-7">
                                                 <button name="valider" class="btn btn-primary account-btn btn-block" style="background-color:blue">Connecter<i class="fa fa-sign-in"></i></button>
                                             </div>
                                              <div class="col-sm-5">
                                                  <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#creer_compte" style="background-color:blue"><i class="fa fa-plus"></i> Ajouter Compte</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
        <?php } ?>









            <?php 
                if($_SESSION['fonction']=='agent'){
                ?>
        <section class="page-section" id="menu" style="background-color:#dee4e7;background-image:url("images/img24.JPG")">
            <div class="container">
                
                  <div class="container">
                   <div class="row">
                     <?php
                     Include("../model/connexion.php");
                       $statement0 = $db->prepare("SELECT * from boisson");
                       $statement0->execute();
                       $result0 = $statement0->fetchAll(PDO::FETCH_ASSOC);             
                       foreach ($result0 as $row0)

                       {
                 
                     ?>
                   <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                     <div id="voir1<?php echo $row0['ref_boisson']?>" class="mfp-hide book-form" style="background:#3f5f5f; color:white" >
                       <a href="#" class="mfp-hide book-form" data-toggle="modal" data-target="#voir<?php echo $row0['ref_boisson']?>"> 
                       <td style="color:black">
                         <img src="image/img_boisson/<?php echo $row0['photo'];?>" style="width: 150px; height: 220px " class="img-thumb" >
                        </td>
                      </a>
                     </div>
                     
                    </div>
                    
                      <?php
                      include ("../controls/msg_cmd/cmd_msg.php");
                     }
                   ?>
                   </div>

                 </div>

          </div>
          

        </section>
        <!-- Services-->
         
        <section class="page-section" id="connexion" style="background:radial-gradient(circle,white,#0856b6 )">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-heading text-uppercase">BOISSONS</h1>
                </div>
                <div class="row">
                    <form method="POST" action="../controls/connexion/authentification.php">
                        <div class="container">
                           <div class="row">
                            <div class="col-md-3">
                            </div>
                               <div class="col-md-6" style="background:linear-gradient(#95989a, #babdbe 60% ,#95989a)">
                                   <div class="panel panel-default">
                                      <div class="panel-heading" style="background:linear-gradient(#95989a, #babdbe 60% ,#95989a); color:white; font-size:20px"><center><B><h1> AUTHENTIFICATION</h1></B></center></div>
                                        <div class="panel-body" style="background-color:#e7ebee">
                                           <label><B> Nom Utilisateur:</B> </label>
                                           <input type="text" class="form-control" name="txtnom">
                                           <p class="help-block"></p>
                                           <label><B> Mot de passe: </B></label>
                                           <input type="password" class="form-control" name="txtmdp">
                                           <p class="help-block"></p>
                                        </div>
                                        <div class="panel-footer" style="background-color:#e7ebee; font-size:14px">
                                           <div class="form-group text-center">
                                            <div class="row">
                                              <div class="col-sm-7">
                                                 <button name="valider" class="btn btn-primary account-btn btn-block" style="background-color:blue">Connecter<i class="fa fa-sign-in"></i></button>
                                             </div>
                                              <div class="col-sm-5">
                                                  <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#creer_compte" style="background-color:blue"><i class="fa fa-plus"></i> Ajouter Compte</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
        

        <!-- Services-->
        <section class="page-section" id="boisson" style="background:radial-gradient(circle,white,#1de8bf)">
            <div class="container">
                
                <?php
                   require_once("../model/config.php");
                   require_once("../model/Connexion.class.php");
                   $req=Connexion::getConnexion()->query("select * from boisson");
                   $donne=$req->fetchall();
                  ?>
                  <div class="container">
                    
                       <div class="row">
                            <!-- Creation d'une etiquette nommer fm eleve offset permet de sauter une ou pliusieurs lignes-->
                        <div class="col-lg-12"> 
                       <div class="panel panel-default">
                            <div class="panel-heading" style="bgcolor=#1235a">
                                <div class="row">
                                     </div>
                                        <div class="col-lg-8"><h1>LISTE DES BOISSONS</h1> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#ajouter_boisson" style="background-color:green"><i class="fa fa-plus"></i> Ajouter Boisson</a>
                                        </div>
                                        <br>
                                    <div class="col-md-8">
                                     <input name="num_compt" type="text" class="form-control" placeholder="Rechercher ici A partir de votre numero" value="" id="recherche" onkeyup="searchFun()">
                                     </div><br>
                                    <div class="col-md-12">
                                           <table class="table table-stripped m-b-0"  align="center" id="tab">
                                              <tr>
                                                 <th>IMAGE PRODUIT</th><th>NUMERO PRODUIT</th><th>DESIGNATION</th><th>QUANTITE</th><th>PRIX UNITAIRE</th><th>ACTIONS</th>    <!-- <th>MODIFIER</th>-->
                                              </tr>
                                            </div>
                                               <?php foreach($donne as $ligne){?>
                                               <tr>
                                               <td style="color:black"><img src="image/img_boisson/<?php echo $ligne['photo'];?>" style="width: 50px; height: 50px;border-radius:300px 300px 300px 300px; " class="img-circle" ></td>
                                                 <td><?php echo($ligne['ref_boisson'])?></td>
                                                 <td><?php echo($ligne['design'])?></td>
                                                 <td><?php echo($ligne['qte'])?></td>
                                                 <td><?php echo($ligne['pu'])?></td>
                                                           
                                                 <td>
                                                  <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu dropdown-primary" style="color:black">

                                                         <a class="dropdown-item"data-toggle="modal" data-target="#modifier_boisson<?php echo $ligne['ref_boisson']; ?>" href="#" style="color:black"> <i class="fa fa-edit"></i> Modifier</a><br>
                                                         <a class="dropdown-item"data-toggle="modal" data-target="" href="#" style="color:black"> <i class="fa fa-eye"></i> Consulter</a><br>
                                                         <a class="dropdown-item " data-toggle="modal" style="color:black" data-target="#supprimer_boisson<?php echo $ligne['ref_boisson']; ?>"  href="#"><i class="fa fa-remove"></i> Supprimer</a><br>
                                                    </div>
                                                  </div>
                                                 </td>
                                                </tr>
                                               <?php
                                                    include ("../controls/msg_supp/boisson_supp.php");
                                                 include ("../controls/msg_mod/boisson_mod.php");
                                                }?>
                                            </table>
                                     </div>
                                  </div>
                               </div>
                       </div>
                    
                </div>
            </div>
        </section>

         <section class="page-section" id="commande" style="background:radial-gradient(circle,white,#1de8bf)">
            <div class="container">
                
                <?php
                   require_once("../model/config.php");
                   require_once("../model/Connexion.class.php");
                   $req=Connexion::getConnexion()->query("select * from cmd ");
                   $donne=$req->fetchall();
                  ?>
                  <div class="container">
                     <form method="POST" action="control/reg_redevable.php">
                       <div class="row">
                            <!-- Creation d'une etiquette nommer fm eleve offset permet de sauter une ou pliusieurs lignes-->
                        <div class="col-lg-12"> 
                       <div class="panel panel-default">
                            <div class="panel-heading" style="bgcolor=#1235a">
                                <div class="row">
                                     </div>
                                        <div class="col-lg-8"><h1>LISTE DES COMMANDES</h1> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#ajouter_cmd"><i class="fa fa-plus"></i> Passer Commande</a>
                                        </div>
                                        <br>
                                    <div class="col-md-8">
                                     <input name="num_compt" type="text" class="form-control" placeholder="Rechercher ici A partir de votre numero" value="" id="recherche" onkeyup="searchFun()">
                                     </div><br>
                                    <div class="col-md-12">
                                           <table class="table table-stripped m-b-0"  align="center" id="tab4">
                                              <tr>
                                                 <th>NUMERO COMMANDE</th><th>DESIGNATION</th><th>QUANTITE</th><th>ACTIONS</th>    <!-- <th>MODIFIER</th>-->
                                              </tr>
                                            </div>
                                               <?php foreach($donne as $ligne){?>
                                               <tr>
                                                 <td><?php echo($ligne['num_cmd'])?></td>
                                                 <td><?php echo($ligne['contenu'])?></td>
                                                 <td><?php echo($ligne['date_cmd'])?></td>         
                                                 <td>
                                                  <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu dropdown-primary" style="color:black">

                                                         <a class="dropdown-item"data-toggle="modal" data-target="#modifier_charoi<?php echo $ligne['num_cmd']; ?>" href="#" style="color:black"> <i class="fa fa-edit"></i> Modifier</a><br>
                                                         <a class="dropdown-item"data-toggle="modal" data-target="" href="#" style="color:black"> <i class="fa fa-eye"></i> Consulter</a><br>
                                                         <a class="dropdown-item " data-toggle="modal" style="color:black" data-target="#supprimer_charoi<?php echo $ligne['num_cmd']; ?>"  href="#"><i class="fa fa-remove"></i> Supprimer</a><br>
                                                    </div>
                                                  </div>
                                                 </td>
                                                </tr>
                                               <?php
                                                 
                                                }?>
                                            </table>
                                     </div>
                                  </div>
                               </div>
                       </div>
                    </form> 
                </div>
            </div>
        </section>
        <?php } ?>











           <?php 
                if($_SESSION['fonction']=='administrateur'){
                ?>
        <section class="page-section" id="menu" style="background-color:#dee4e7;background-image:url("images/img24.JPG")">
            <div class="container">
                
                  <div class="container">
                   <div class="row">
                     <?php
                     Include("../model/connexion.php");
                       $statement0 = $db->prepare("SELECT * from boisson");
                       $statement0->execute();
                       $result0 = $statement0->fetchAll(PDO::FETCH_ASSOC);             
                       foreach ($result0 as $row0)

                       {
                 
                     ?>
                   <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                     <div id="voir1<?php echo $row0['ref_boisson']?>" class="mfp-hide book-form" style="background:#3f5f5f; color:white" >
                       <a href="#" class="mfp-hide book-form" data-toggle="modal" data-target="#voir<?php echo $row0['ref_boisson']?>"> 
                       <td style="color:black">
                         <img src="image/img_boisson/<?php echo $row0['photo'];?>" style="width: 150px; height: 220px " class="img-thumb" >
                        </td>
                      </a>
                     </div>
                     
                    </div>
                    
                      <?php
                      include ("../controls/msg_cmd/cmd_msg.php");
                     }
                   ?>
                   </div>

                 </div>

          </div>
          

        </section>
        <!-- Services-->
         
        <section class="page-section" id="connexion" style="background:radial-gradient(circle,white,#0856b6 )">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-heading text-uppercase">BOISSONS</h1>
                </div>
                <div class="row">
                    <form method="POST" action="../controls/connexion/authentification.php">
                        <div class="container">
                           <div class="row">
                            <div class="col-md-3">
                            </div>
                               <div class="col-md-6" style="background:linear-gradient(#95989a, #babdbe 60% ,#95989a)">
                                   <div class="panel panel-default">
                                      <div class="panel-heading" style="background:linear-gradient(#95989a, #babdbe 60% ,#95989a); color:white; font-size:20px"><center><B><h1> AUTHENTIFICATION</h1></B></center></div>
                                        <div class="panel-body" style="background-color:#e7ebee">
                                           <label><B> Nom Utilisateur:</B> </label>
                                           <input type="text" class="form-control" name="txtnom">
                                           <p class="help-block"></p>
                                           <label><B> Mot de passe: </B></label>
                                           <input type="password" class="form-control" name="txtmdp">
                                           <p class="help-block"></p>
                                        </div>
                                        <div class="panel-footer" style="background-color:#e7ebee; font-size:14px">
                                           <div class="form-group text-center">
                                            <div class="row">
                                              <div class="col-sm-7">
                                                 <button name="valider" class="btn btn-primary account-btn btn-block" style="background-color:blue">Connecter<i class="fa fa-sign-in"></i></button>
                                             </div>
                                              <div class="col-sm-5">
                                                  <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#creer_compte" style="background-color:blue"><i class="fa fa-plus"></i> Ajouter Compte</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
        

        <!-- Services-->
        <section class="page-section" id="boisson" style="background:radial-gradient(circle,white,#1de8bf)">
            <div class="container">
                
                <?php
                   require_once("../model/config.php");
                   require_once("../model/Connexion.class.php");
                   $req=Connexion::getConnexion()->query("select * from boisson");
                   $donne=$req->fetchall();
                  ?>
                  <div class="container">
                    
                       <div class="row">
                            <!-- Creation d'une etiquette nommer fm eleve offset permet de sauter une ou pliusieurs lignes-->
                        <div class="col-lg-12"> 
                       <div class="panel panel-default">
                            <div class="panel-heading" style="bgcolor=#1235a">
                                <div class="row">
                                     </div>
                                        <div class="col-lg-8"><h1>LISTE DES BOISSONS</h1> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#ajouter_boisson" style="background-color:green"><i class="fa fa-plus"></i> Ajouter Boisson</a>
                                        </div>
                                        <br>
                                    <div class="col-md-8">
                                     <input name="num_compt" type="text" class="form-control" placeholder="Rechercher ici A partir de votre numero" value="" id="recherche" onkeyup="searchFun()">
                                     </div><br>
                                    <div class="col-md-12">
                                           <table class="table table-stripped m-b-0"  align="center" id="tab">
                                              <tr>
                                                 <th>IMAGE PRODUIT</th><th>NUMERO PRODUIT</th><th>DESIGNATION</th><th>QUANTITE</th><th>PRIX UNITAIRE</th><th>ACTIONS</th>    <!-- <th>MODIFIER</th>-->
                                              </tr>
                                            </div>
                                               <?php foreach($donne as $ligne){?>
                                               <tr>
                                               <td style="color:black"><img src="image/img_boisson/<?php echo $ligne['photo'];?>" style="width: 50px; height: 50px;border-radius:300px 300px 300px 300px; " class="img-circle" ></td>
                                                 <td><?php echo($ligne['ref_boisson'])?></td>
                                                 <td><?php echo($ligne['design'])?></td>
                                                 <td><?php echo($ligne['qte'])?></td>
                                                 <td><?php echo($ligne['pu'])?></td>
                                                           
                                                 <td>
                                                  <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu dropdown-primary" style="color:black">

                                                         <a class="dropdown-item"data-toggle="modal" data-target="#modifier_boisson<?php echo $ligne['ref_boisson']; ?>" href="#" style="color:black"> <i class="fa fa-edit"></i> Modifier</a><br>
                                                         <a class="dropdown-item"data-toggle="modal" data-target="" href="#" style="color:black"> <i class="fa fa-eye"></i> Consulter</a><br>
                                                         <a class="dropdown-item " data-toggle="modal" style="color:black" data-target="#supprimer_boisson<?php echo $ligne['ref_boisson']; ?>"  href="#"><i class="fa fa-remove"></i> Supprimer</a><br>
                                                    </div>
                                                  </div>
                                                 </td>
                                                </tr>
                                               <?php
                                                    include ("../controls/msg_supp/boisson_supp.php");
                                                 include ("../controls/msg_mod/boisson_mod.php");
                                                }?>
                                            </table>
                                     </div>
                                  </div>
                               </div>
                       </div>
                    
                </div>
            </div>
        </section>

         <section class="page-section" id="commande" style="background:radial-gradient(circle,white,#1de8bf)">
            <div class="container">
                
                <?php
                   require_once("../model/config.php");
                   require_once("../model/Connexion.class.php");
                   $req=Connexion::getConnexion()->query("select * from cmd ");
                   $donne=$req->fetchall();
                  ?>
                  <div class="container">
                     <form method="POST" action="control/reg_redevable.php">
                       <div class="row">
                            <!-- Creation d'une etiquette nommer fm eleve offset permet de sauter une ou pliusieurs lignes-->
                        <div class="col-lg-12"> 
                       <div class="panel panel-default">
                            <div class="panel-heading" style="bgcolor=#1235a">
                                <div class="row">
                                     </div>
                                        <div class="col-lg-8"><h1>LISTE DES COMMANDES</h1> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#ajouter_cmd"><i class="fa fa-plus"></i> Passer Commande</a>
                                        </div>
                                        <br>
                                    <div class="col-md-8">
                                     <input name="num_compt" type="text" class="form-control" placeholder="Rechercher ici A partir de votre numero" value="" id="recherche" onkeyup="searchFun()">
                                     </div><br>
                                    <div class="col-md-12">
                                           <table class="table table-stripped m-b-0"  align="center" id="tab4">
                                              <tr>
                                                 <th>NUMERO COMMANDE</th><th>DESIGNATION</th><th>QUANTITE</th><th>ACTIONS</th>    <!-- <th>MODIFIER</th>-->
                                              </tr>
                                            </div>
                                               <?php foreach($donne as $ligne){?>
                                               <tr>
                                                 <td><?php echo($ligne['num_cmd'])?></td>
                                                 <td><?php echo($ligne['contenu'])?></td>
                                                 <td><?php echo($ligne['date_cmd'])?></td>         
                                                 <td>
                                                  <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu dropdown-primary" style="color:black">

                                                         <a class="dropdown-item"data-toggle="modal" data-target="#modifier_charoi<?php echo $ligne['num_cmd']; ?>" href="#" style="color:black"> <i class="fa fa-edit"></i> Modifier</a><br>
                                                         <a class="dropdown-item"data-toggle="modal" data-target="" href="#" style="color:black"> <i class="fa fa-eye"></i> Consulter</a><br>
                                                         <a class="dropdown-item " data-toggle="modal" style="color:black" data-target="#supprimer_charoi<?php echo $ligne['num_cmd']; ?>"  href="#"><i class="fa fa-remove"></i> Supprimer</a><br>
                                                    </div>
                                                  </div>
                                                 </td>
                                                </tr>
                                               <?php
                                                 
                                                }?>
                                            </table>
                                     </div>
                                  </div>
                               </div>
                       </div>
                    </form> 
                </div>
            </div>
        </section>

        <section class="page-section" id="client" style="background:radial-gradient(circle,white,#1de8bf)">
            <div class="container">
                
                <?php
                   require_once("../model/config.php");
                   require_once("../model/Connexion.class.php");
                   $req=Connexion::getConnexion()->query("select * from utilisateur where fonction='client' ");
                   $donne=$req->fetchall();
                  ?>
                  <div class="container">
                     
                       <div class="row">
                            <!-- Creation d'une etiquette nommer fm eleve offset permet de sauter une ou pliusieurs lignes-->
                        <div class="col-lg-12"> 
                       <div class="panel panel-default">
                            <div class="panel-heading" style="bgcolor=#1235a">
                                <div class="row">
                                     </div>
                                        <div class="col-lg-8"><h1>LISTE DES CLIENTS</h1> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#creer_compte"><i class="fa fa-plus"></i> Enregistrer Client</a>
                                        </div>
                                        <br>
                                    <div class="col-md-8">
                                     <input name="num_compt" type="text" class="form-control" placeholder="Rechercher ici A partir de votre numero" value="" id="recherche" onkeyup="searchFun()">
                                     </div><br>
                                    <div class="col-md-12">
                                           <table class="table table-stripped m-b-0"  align="center" id="tab1">
                                              <tr>
                                                 <th>IDENTIFIANT</th><th>NOM CLIENT</th><th>EMAIL</th><th>ADRESSE</th><th>ACTIONS</th>    <!-- <th>MODIFIER</th>-->
                                              </tr>
                                            </div>
                                               <?php foreach($donne as $ligne){?>
                                               <tr>
                                                 <td><?php echo($ligne['id_utilisateur'])?></td>
                                                 <td><?php echo($ligne['nom'])?></td>
                                                 <td><?php echo($ligne['email'])?></td>
                                                 <td><?php echo($ligne['adresse'])?></td>
                                                           
                                                 <td>
                                                  <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu dropdown-primary" style="color:black">

                                                         <a class="dropdown-item"data-toggle="modal" data-target="#modifier_utilisateur<?php echo $ligne['id_utilisateur']; ?>" href="#" style="color:black"> <i class="fa fa-edit"></i> Modifier</a><br>
                                                         <a class="dropdown-item"data-toggle="modal" data-target="" href="#" style="color:black"> <i class="fa fa-eye"></i> Consulter</a><br>
                                                         <a class="dropdown-item " data-toggle="modal" style="color:black" data-target="#supprimer_utilsateur<?php echo $ligne['id_utilisateur']; ?>"  href="#"><i class="fa fa-remove"></i> Supprimer</a><br>
                                                    </div>
                                                  </div>
                                                 </td>
                                                </tr>
                                               <?php
                                                 include ("../controls/msg_supp/utilisateur_supp.php");
                                                 include ("../controls/msg_mod/utilisateur_mod.php");
                                                }?>
                                            </table>
                                     </div>
                                  </div>
                               </div>
                       </div>
                    </form> 
                </div>
            </div>
        </section>

        <section class="page-section" id="agent" style="background:radial-gradient(circle,white,#5ab4e2)">
            <div class="container">
                
                <?php
                   require_once("../model/config.php");
                   require_once("../model/Connexion.class.php");
                   $req=Connexion::getConnexion()->query("select * from utilisateur where fonction='agent' ");
                   $donne=$req->fetchall();
                  ?>
                  <div class="container">
                     
                       <div class="row">
                            <!-- Creation d'une etiquette nommer fm eleve offset permet de sauter une ou pliusieurs lignes-->
                        <div class="col-lg-12"> 
                       <div class="panel panel-default">
                            <div class="panel-heading" style="bgcolor=#1235a">
                                <div class="row">
                                     </div>
                                        <div class="col-lg-8"><h1>LISTE DES AGENTS</h1> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#creer_compte"><i class="fa fa-plus"></i> Ajouter Agent</a>
                                        </div>
                                        <br>
                                    <div class="col-md-8">
                                     <input name="num_compt" type="text" class="form-control" placeholder="Rechercher ici A partir de votre numero" value="" id="recherche" onkeyup="searchFun()">
                                     </div><br>
                                    <div class="col-md-12">
                                           <table class="table table-stripped m-b-0"  align="center" id="tab2">
                                              <tr>
                                                 <th>MATRICULE AGENT</th><th>NOM CLIENT</th><th>EMAIL</th><th>ADRESSE</th><th>ACTIONS</th>    <!-- <th>MODIFIER</th>-->
                                              </tr>
                                            </div>
                                               <?php foreach($donne as $ligne){?>
                                               <tr>
                                                 <td><?php echo($ligne['id_utilisateur'])?></td>
                                                 <td><?php echo($ligne['nom'])?></td>
                                                 <td><?php echo($ligne['email'])?></td>
                                                 <td><?php echo($ligne['adresse'])?></td>
                                                           
                                                 <td>
                                                  <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu dropdown-primary" style="color:black">

                                                         <a class="dropdown-item"data-toggle="modal" data-target="#modifier_utilisateur<?php echo $ligne['id_utilisateur']; ?>" href="#" style="color:black"> <i class="fa fa-edit"></i> Modifier</a><br>
                                                         <a class="dropdown-item"data-toggle="modal" data-target="" href="#" style="color:black"> <i class="fa fa-eye"></i> Consulter</a><br>
                                                         <a class="dropdown-item " data-toggle="modal" style="color:black" data-target="#supprimer_utilsateur<?php echo $ligne['id_utilisateur']; ?>"  href="#"><i class="fa fa-remove"></i> Supprimer</a><br>
                                                    </div>
                                                  </div>
                                                 </td>
                                                </tr>
                                               <?php
                                                 include ("../controls/msg_supp/utilisateur_supp.php");
                                                 include ("../controls/msg_mod/utilisateur_mod.php");
                                                }?>
                                            </table>
                                     </div>
                                  </div>
                               </div>
                       </div>
                    </form> 
                </div>
            </div>
        </section>

        <section class="page-section" id="Admin">
            <div class="container">
                
                <?php
                   require_once("../model/config.php");
                   require_once("../model/Connexion.class.php");
                   $req=Connexion::getConnexion()->query("select * from utilisateur where fonction='administrateur' ");
                   $donne=$req->fetchall();
                  ?>
                  <div class="container">
                     
                       <div class="row">
                            <!-- Creation d'une etiquette nommer fm eleve offset permet de sauter une ou pliusieurs lignes-->
                        <div class="col-lg-12"> 
                       <div class="panel panel-default">
                            <div class="panel-heading" style="bgcolor=#1235a">
                                <div class="row">
                                     </div>
                                        <div class="col-lg-8"><h1>LISTE DES ADMINISTRATEURS</h1> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#creer_compte"><i class="fa fa-plus"></i> Ajouter Administrateur</a>
                                        </div>
                                        <br>
                                    <div class="col-md-8">
                                     <input name="num_compt" type="text" class="form-control" placeholder="Rechercher ici A partir de votre numero" value="" id="recherche" onkeyup="searchFun()">
                                     </div><br>
                                    <div class="col-md-12">
                                           <table class="table table-stripped m-b-0"  align="center" id="tab">
                                              <tr>
                                                 <th>MATRICULE ADMINISTRATEUR</th><th>NOM CLIENT</th><th>EMAIL</th><th>ADRESSE</th><th>ACTIONS</th>    <!-- <th>MODIFIER</th>-->
                                              </tr>
                                            </div>
                                               <?php foreach($donne as $ligne){?>
                                               <tr>
                                                 <td><?php echo($ligne['id_utilisateur'])?></td>
                                                 <td><?php echo($ligne['nom'])?></td>
                                                 <td><?php echo($ligne['email'])?></td>
                                                 <td><?php echo($ligne['adresse'])?></td>
                                                           
                                                 <td>
                                                  <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu dropdown-primary" style="color:black">

                                                         <a class="dropdown-item"data-toggle="modal" data-target="#modifier_utilisateur<?php echo $ligne['id_utilisateur']; ?>" href="#" style="color:black"> <i class="fa fa-edit"></i> Modifier</a><br>
                                                         <a class="dropdown-item"data-toggle="modal" data-target="" href="#" style="color:black"> <i class="fa fa-eye"></i> Consulter</a><br>
                                                         <a class="dropdown-item " data-toggle="modal" style="color:black" data-target="#supprimer_utilsateur<?php echo $ligne['id_utilisateur']; ?>"  href="#"><i class="fa fa-remove"></i> Supprimer</a><br>
                                                   </div>
                                                  </div>
                                                 </td>
                                                </tr>
                                               <?php
                                                 include ("../controls/msg_supp/utilisateur_supp.php");
                                                 include ("../controls/msg_mod/utilisateur_mod.php");
                                                }?>
                                            </table>
                                     </div>
                                  </div>
                               </div>
                       </div>
                    </form> 
                </div>
            </div>
        </section>

        <?php } ?>






        
        
        <div id="ajouter_boisson" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content modal-md">
                    <div class="modal-header" style="background:#0728f2;color:white">
                        <h2 class="modal-title" style="text-align:center;color:white">Ajouter un Produit</h2>
                        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    </div>
                    <div class="modal-body" style="background-color:#dcdee8">
                            <h4 class="card-title"></h4>
                               <div class="tecno"></div>
                            <form action="../controls/ajouter/ajouter_boisson.php" method="POST" enctype="multipart/form-data">
                            
                                    <div class="form-group">
                                        <label>PHOTO: </label>
                                        <input type="file" value="" class="form-control" name="photo">
                                        <p class="help-block"></p>
                                        <label>DESIGNATION: </label>
                                        <input type="text" value="" class="form-control" name="design">
                                        <p class="help-block"></p>
                                        <label>QUANTITE: </label>
                                        <input type="text" value="" class="form-control" name="qte">
                                        <p class="help-block"></p>
                                        <label>PRIX UNITAIRE : </label>
                                        <input type="text" class="form-control" name="pu">
                                        <p class="help-block"></p>
                                        
                                    </div>    
                                <div class="text-right">
                                    <button name="valider" type="submit" class="btn btn-primary btn-rounded"><strong>Ajouter </strong><i class="fa fa-check"></i></button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>

        <div id="creer_compte" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content modal-md">
                    <div class="modal-header" style="background:#0728f2;color:white">
                        <h2 class="modal-title" style="text-align:center;color:white">CREATION DU COMPTE UTILISATEUR</h2>
                        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    </div>
                    <div class="modal-body" style="background-color:#dcdee8">
                            <h4 class="card-title"></h4>
                               <div class="tecno"></div>
                            <form action="../controls/ajouter/ajouter_utilisateur.php" method="POST" enctype="multipart/form-data">
                            
                                        <div class="form-group">
                                        <label>NOM: </label>
                                        <input type="text" value="" class="form-control" name="nom">
                                        <p class="help-block"></p>
                                        <label>MOT DE PASSE: </label>
                                        <input type="text" value="" class="form-control" name="pwd">
                                        <p class="help-block"></p>
                                        <label>EMAIL : </label>
                                        <input type="text" class="form-control" name="email">
                                        <p class="help-block"></p>
                                        <label>ADRESSE </label>
                                        <input  name="adresse" class="form-control "  type="text" value="">
                                        <p class="help-block"></p>
                                        <label>FONCTION </label>
                                        <select name="fonction" class="form-control">
                                            <option></option>
                                            <option>client</option>
                                            <option>agent</option>
                                            <option>administrateur</option>
                                        </select>
                                        <p class="help-block"></p>
                                       </div>    
                                <div class="text-right">
                                    <button name="valider" type="submit" class="btn btn-primary btn-rounded"><strong>Créer </strong><i class="fa fa-check"></i></button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>

        <div id="ajouter_client" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content modal-md">
                    <div class="modal-header" style="background:#0728f2;color:white">
                        <h2 class="modal-title" style="text-align:center;color:white">Ajouter un Client</h2>
                        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    </div>
                    <div class="modal-body" style="background-color:#dcdee8">
                            <h4 class="card-title"></h4>
                               <div class="tecno"></div>
                            <form action="control/ajouter/ajouter_client.php" method="POST" enctype="multipart/form-data">
                            
                                    <div class="form-group">
                                        <label>NOM: </label>
                                        <input type="text" value="" class="form-control" name="nom">
                                        <p class="help-block"></p>
                                        <label>TELEPHONE: </label>
                                        <input type="text" value="" class="form-control" name="telephone">
                                        <p class="help-block"></p>
                                        <label>ADRESSE : </label>
                                        <input type="text" class="form-control" name="adresse">
                                        <p class="help-block"></p>
                                        
                                    </div>    
                                <div class="text-right">
                                    <button name="valider" type="submit" class="btn btn-primary btn-rounded"><strong>Ajouter </strong><i class="fa fa-check"></i></button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>

        <div id="ajouter_cmd" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content modal-md">
                    <div class="modal-header" style="background:#0728f2;color:white">
                        <h2 class="modal-title" style="text-align:center;color:white">Ajouter Une Commande</h2>
                        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    </div>
                    <div class="modal-body" style="background-color:#dcdee8">
                            <h4 class="card-title"></h4>
                               <div class="tecno"></div>
                            <form action="../controls/ajouter/ajouter_commande.php" method="POST" enctype="multipart/form-data">
                            
                                    <div class="form-group">
                                        <label>CONTENU: </label>
                                        <input type="text" value="" class="form-control" name="contenu">
                                        <p class="help-block"></p>
                                        <label>DATE DE LA COMMANDE: </label>
                                        <input type="text" value="<?php echo date("d-m-Y"); ?>" class="form-control" name="date_cmd">
                                        <p class="help-block"></p>
                                        
                                    </div>    
                                <div class="text-right">
                                    <button name="valider" type="submit" class="btn btn-primary btn-rounded"><strong>Ajouter </strong><i class="fa fa-check"></i></button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Grid-->
        <!-- About-->
        <!-- Team-->
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="image/img5.jpg" style="width: 600px;height:200px" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="image/img6.jpg" style="width: 600px;height:200px" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="image/img7.jpg" style="width: 600px;height:200px" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="image/img8.jpg" style="width: 600px;height:200px" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
  
        <!-- Footer-->
        
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script type="text/javascript">

      const searchFun= () =>{
      var filter =document.getElementById('recherche').value.toUpperCase();
      var mytable=document.getElementById('tab');
      var tr=mytable.getElementsByTagName('tr');
      for (var i = 0; i < tr.length; i++) {
      var td=tr[i].getElementsByTagName('td')[2];
      if(td)
          {
            var txtval=td.textContent || td.innerHTML || td.value;
            if(txtval.toUpperCase().indexOf(filter) > -1)
         {
            tr[i].style.display="";
         }else
             {
              tr[i].style.display="none";
             }

         }
   }
   </script>
   <script>
    
    var tablign=document.getElementById("tab").rows;
    var longueur=tablign.length;
    var i=0;

    while(i<longueur)
    {
      if(i%2==0)
      {
        tablign[i].style.background="#bdcbf5";
        tablign[i].style.color="white";
      }
      else
      {
        tablign[i].style.background="#829eeb";
        tablign[i].style.color="white";
      }
      i++;
    }
  </script>
    <script>
   $(document).ready(function(){
 
setInterval(function(){
  $('#tb2').load("../../control/epargne/voir_compte.php").fadeIn("slow");
 }, 1500);
 
});
</script>
<script type="text/javascript">

      const searchFun= () =>{
      var filter =document.getElementById('recherche').value.toUpperCase();
      var mytable=document.getElementById('tab2');
      var tr=mytable.getElementsByTagName('tr');
      for (var i = 0; i < tr.length; i++) {
      var td=tr[i].getElementsByTagName('td')[2];
      if(td)
          {
            var txtval=td.textContent || td.innerHTML || td.value;
            if(txtval.toUpperCase().indexOf(filter) > -1)
         {
            tr[i].style.display="";
         }else
             {
              tr[i].style.display="none";
             }

         }
   }
   </script>
   <script>
    
    var tablign=document.getElementById("tab2").rows;
    var longueur=tablign.length;
    var i=0;

    while(i<longueur)
    {
      if(i%2==0)
      {
        tablign[i].style.background="#bdcbf5";
        tablign[i].style.color="white";
      }
      else
      {
        tablign[i].style.background="#829eeb";
        tablign[i].style.color="white";
      }
      i++;
    }
  </script>
    <script>
   $(document).ready(function(){
 
setInterval(function(){
  $('#tb2').load("../../control/epargne/voir_compte.php").fadeIn("slow");
 }, 1500);
 
});
</script>
    </body>
</html>
<?php 
    }else
        { 
            header('location: ../index.html?error= vous dévez vous authentifier');
        } 
?>
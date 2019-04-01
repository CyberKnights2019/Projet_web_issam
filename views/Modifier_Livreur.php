<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/libs/css/style.css">
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
  <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
  <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
  <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
  <script src="ScriptLivreur.js"></script>
  <title>DASHBOARD</title>
</head>

<body>

          <?PHP
          include "../entities/livreur.php";
          include "../cores/livreurC.php";

          	$livreurC=new livreurC();
              $result=$livreurC->recupererLivreur($_GET['cin']);
          	foreach($result as $row){
          		$cin=$row['CIN'];
          		$nom=$row['Nom'];
          		$prenom=$row['Prenom'];
          		$tel=$row['Tel'];
          		$mail=$row['Mail'];
              $adresse=$row['Adresse'];
            }
          ?>



  <!-- ============================================================== -->
  <!-- main wrapper -->
  <!-- ============================================================== -->
  <div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
      <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="index.html">Moussa Optic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-right-top">
            <li class="nav-item">
              <div id="custom-search" class="top-search-bar">
                <input class="form-control" type="text" placeholder="Search..">
              </div>
            </li>
            <li class="nav-item dropdown notification">
              <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
              <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                <li>
                  <div class="notification-title"> Notification</div>
                  <div class="notification-list">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                            <div class="notification-date">2 days ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="list-footer"> <a href="#">View all notifications</a></div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown connection">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
              <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                <li class="connection-list">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                      <a href="#" class="connection-item"><img src="assets/images/github.png" alt=""> <span>Github</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                      <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt=""> <span>Dribbble</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                      <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt=""> <span>Dropbox</span></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                      <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                      <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt=""><span>Mail chimp</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                      <a href="#" class="connection-item"><img src="assets/images/slack.png" alt=""> <span>Slack</span></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="conntection-footer"><a href="#">More</a></div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown nav-user">
              <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
              <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <div class="nav-user-info">
                  <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                  <span class="status"></span><span class="ml-2">Available</span>
                </div>
                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
      <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">


              <li class="nav-divider">
                Barre de Navigation
              </li>
              <li class="nav-item">

              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Mes Livreurs</a>
                <div id="submenu-10" class="collapse submenu" style="">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Statistiques</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Gestion des Livreurs</a>
                      <div id="submenu-11" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="Ajouter_Livreur.html">Ajout</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Afficher_Livreur.php">Gestion des livreurs</a>
                          </li>
                        </ul>
                      </div>
                    </li>

                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->



    <div class="dashboard-wrapper">
      <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- ============================================================== -->
          <!-- valifation types -->
          <!-- ============================================================== -->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Modifier un fournisseur</h5>
              <div class="card-body">
                <form id="validationform" method="POST" name="formL"  onsubmit="return validateForm()" >

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">CIN</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input data-parsley-type="number"  value="<?PHP echo $cin; ?>"  type="text" name="cinL" required="" placeholder="Entrez des numéros"  class="form-control" onkeypress="return isNumberKey(event)" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Nom</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input data-parsley-type="number" value="<?PHP echo $nom; ?>" type="text" name="nomL" required="" placeholder="Entrez des lettres" class="form-control" onkeypress="return lettersOnly(event)">

                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Prénom</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input data-parsley-type="number" type="text" value="<?PHP echo $prenom; ?>" name="prenomL" required="" placeholder="Entrez des lettres" class="form-control" onkeypress="return lettersOnly(event)">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Téléphone</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input data-parsley-type="number" type="text" name="telL" required="" value="<?PHP echo $tel; ?>" placeholder="Entrez des numéros" class="form-control" onkeypress="return isNumberKey(event)">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">E-Mail</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="email" required="" data-parsley-type="email" name="mailL" value="<?PHP echo $mail; ?>" placeholder="Entrez une adresse valide" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Adresse</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <textarea required="" class="form-control" name="adresseL" ><?PHP echo $adresse ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                      <button type="submit" name="modifier" class="btn btn-space btn-primary">Modifier</button>

                      <input type="button" class="btn btn-space btn-secondary" onclick="window.location.href='Afficher_Livreur.php'" value="Retour"></button>
                      <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>">
                    </div>
                  </div>
                </form>
                <?PHP

                if (isset($_POST['modifier'])){
                  if (($_POST['cinL']!="") and ($_POST['nomL']!="") and ($_POST['prenomL']!="") and ($_POST['telL']!="") and ($_POST['adresseL']!="") and ($_POST['mailL']!="") )
                  {
                    if (strlen($_POST['cinL'])!=8)
                    echo "CIN invalide";
                    else {


                  $livreur=new livreur($_POST['cinL'],$_POST['nomL'],$_POST['prenomL'],$_POST['telL'],$_POST['mailL'],$_POST['adresseL']);

                	$livreurC->modifierLivreur($livreur,$_POST['cin_ini']);
                echo "Modification avec succés !";

              }}
                else
                echo "Attributs manquants ! Echec de modification"; }




                ?>

              </div>
            </div>
          </div>


        </div>

      </div>
    </div> <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- end main wrapper  -->
  <!-- ============================================================== -->
  <!-- Optional JavaScript -->
  <!-- jquery 3.3.1 -->
  <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
  <!-- bootstap bundle js -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- slimscroll js -->
  <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
  <!-- main js -->
  <script src="assets/libs/js/main-js.js"></script>
  <!-- chart chartist js -->
  <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
  <!-- sparkline js -->
  <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
  <!-- morris js -->
  <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
  <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
  <!-- chart c3 js -->
  <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
  <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
  <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
  <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>

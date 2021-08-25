<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OptiEvent | Administration</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container-scroller">
 <!-- partial:partials/_navbar.html -->
 @include('Admin/Dashboard.headUser')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('Admin/Dashboard.sideBarUser')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Tabeau de bord</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#evenements" aria-expanded="false" aria-controls="evenements">
                <span class="menu-title">Évènements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-calendar menu-icon"></i>
              </a>
              <div class="collapse" id="evenements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">  Lister</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Ajouter</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#actives" aria-expanded="false" aria-controls="actives">
                <span class="menu-title">Activités</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-ballot-recount menu-icon"></i>
              </a>
              <div class="collapse" id="actives">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">  Lister</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Ajouter</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#secteurs-activites" aria-expanded="false" aria-controls="secteurs-activites">
                <span class="menu-title">Secteurs d'activités</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-google-circles-group menu-icon"></i>
              </a>
              <div class="collapse" id="secteurs-activites">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">  Lister</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Ajouter</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#profils" aria-expanded="false" aria-controls="profils">
                <span class="menu-title">Profils</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-box menu-icon"></i>
              </a>
              <div class="collapse" id="profils">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#"> </i> </i></i></i></i></i></i></i></i></i></i>Lister</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Ajouter</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#entreprises" aria-expanded="false" aria-controls="entreprises">
                <span class="menu-title">Entreprises</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-home-account menu-icon"></i>
              </a>
              <div class="collapse" id="entreprises">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">  Lister</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Ajouter</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#participants" aria-expanded="false" aria-controls="participants">
                <span class="menu-title">Participants</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
              <div class="collapse" id="participants">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">  Lister</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Ajouter</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#organisateurs" aria-expanded="false" aria-controls="organisateurs">
                <span class="menu-title">Organisateurs</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-circle menu-icon"></i>
              </a>
              <div class="collapse" id="organisateurs">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">  Lister</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Ajouter</a></li>
                </ul>
              </div>
            </li>
       
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ajouter un profil </h4>
                    <p class="card-description">Remplissez ce formulaire pour créer un profil d'entreprise</p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Libellé du profil : (<span class="red">*</span>)</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Libellé du secteur d'activité">
                      </div>
                    
                      <button type="submit" class="btn btn-gradient-primary mr-2">Valider</button>
                      <button class="btn btn-danger">Quitter</button>
                    </form>
                  </div>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">OptiEvent © Concu avec passion et enthousiasme par <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">ILLIMITIS</a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
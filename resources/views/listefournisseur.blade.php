<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Constrack</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('/dashboard')}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">ConsTrack</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 3 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Omar Toumi</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Omar Toumi</h6>
              <span>enterpreneur</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="">
        <i class="bi bi-buildings"></i></i><span>Projets</span>
        </a>
      </li>
<!-- End Projets Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/client')}}">
        <i class="bi bi-person-vcard"></i><span>Client</span>
        </a>
      </li><!-- End Client Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ url('/listefournisseur')}}">
        <i class="bi bi-person-lines-fill"></i></i><span>Fournisseur</span>
        </a>
      </li><!-- End Fournisseur Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ url('/achat')}}">
        <i class="bi bi-bag-fill"></i></i></i><span>Achat</span>
        </a>
      </li><!-- End achat Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ url('/vente')}}">
        <i class="bi bi-receipt-cutoff"></i></i></i><span>Vente</span>
        </a>
      </li><!-- End achat Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#catalogue-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-sidebar-reverse"></i></i><span>Catalogue</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="catalogue-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="catalogue-chartjs.html">
              <i class="bi bi-circle"></i><span>Matiere premiere </span>
            </a>
          </li>
          <li>
            <a href="catalogue-apexcatalogue.html">
              <i class="bi bi-circle"></i><span>Service & Depence</span>
            </a>
          </li>
          <li>
            <a href="catalogue-apexcatalogue.html">
              <i class="bi bi-circle"></i><span>Produit fini</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  


  <div class="pagetitle">
    <h1>Fournisseur</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Fournisseur</li>
      </ol>
    </nav>
    
  </div><!-- End Page Title -->
        <div class="container">
        <div class="row">
        <div class="col s12"  >
        <h1>Liste Fournisseurs</h1>
        <hr>
       <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mx-auto">

          <!-- Le bouton d'ouverture de la modal -->
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouterFournisseurModal">Ajouter un Fournisseur</a>
            <div class="modal fade" id="ajouterFournisseurModal" tabindex="-1" aria-labelledby="ajouterFournisseurModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="text-liste" id="ajouterFournisseurModalLabel">Ajouter un Fournisseur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  
                  
                  <!-- Le formulaire -->
                    <form>
                      <div class="mb-3">
                        <label for="raisonSocial" class="text-liste">Raison Social</label>
                        <input type="text" class="form-control" id="raisonSocial" name="raisonSocial">
                      </div>
                      <div class="mb-3">
                        <label for="nomResponsable" class="text-liste">Nom Responsable</label>
                        <input type="text" class="form-control" id="nomResponsable" name="nomResponsable">
                      </div>
                      <div class="mb-3">
                        <label for="prenomResponsable" class="text-liste">Prénom Responsable</label>
                        <input type="text" class="form-control" id="prenomResponsable" name="prenomResponsable">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="text-liste">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="telephone" class="text-liste">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                  </div>
                </div>
                </div>
                </div>
                
                <hr>
                <table class="table table-striped" style="font-size: 1em;">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Raison Social</th>
                  <th>Nom Responsable</th>
                  <th>Prénom Responsable</th>
                  <th>Email</th>
                  <th>Télephone</th> 
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>5eme</td>
                  <td>Salim</td>
                  <td>benaddoun</td>
                  <td>5eme</td>
                  <td>5eme</td>
                  <td>
                    <a href="#" class="btn btn-modifier ">Modifier</a>
                    <a></a>
                    <button type="button" class="btn btn-supprimer"><i class="bi bi-trash-fill"></i></button>

                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>5eme</td>
                  <td>Omar</td>
                  <td>Toumi</td>
                  <td>5eme</td>
                  <td>5eme</td>
                 
                  <td>
                    <a href="#" class="btn btn-modifier ">Modifier</a>
                    <a></a>
                    <button type="button" class="btn btn-supprimer"><i class="bi bi-trash-fill"></i></button>

                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>5eme</td>
                  <td>moh</td>
                  <td>addoun</td>
                  <td>omartoumi@gmail.com</td>
                  <td>0673995911</td>
                  <td>
                    <a href="#" class="btn btn-modifier">Modifier</a>
                    <button type="button" class="btn btn-supprimer"><i class="bi bi-trash-fill"></i></button>

                  </td>
                </tr>
              </tbody>

            </table>
        </div>
      </div> 
        
   

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ConsTrack</title>
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
      <a href="{{ url('/dashboard') }}" class="logo d-flex align-items-center">
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
      <h1>Achat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Achat
          </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
      <div class="row">
        <div class="col s12"  >
          <h1>Ajouter une facture d'achat</h1>

    <form method="POST" action="ajouter_achat.php">
    <div class="form-group">
        <label for="date_achat">Date Achat:</label>
        <input type="date" class="form-control" id="date_achat" name="date_achat" style="width: 200px;">
    </div>
    <label for="TypeClient" class="form-label">Fournisseur :</label>
                    <select class="form-select" style="width: 400px;" aria-label="Default select example">
                     <option selected></option>
                     <option value="1">Salim</option>
                     <option value="2">Omar</option>
                    
                    </select>
   
    <div class="form-group">
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><select class="form-select" style="width: 400px;" aria-label="Default select example">
                     <option selected></option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                    </select>
                    </td>
                    <td><input type="text" class="form-control"style="width: 150px;" name="prix[]" /></td>
                    <td><input type="number" min="1" value = "1" class="form-control" style="width: 150px;" name="quantite[]" /></td>
                    <td><input type="text"  class="form-control" style="width: 200px;" name="total[]" /></td>
                    
                    
                </tr>
            </tbody>
            
        </table>
    </div>
    <table class="table table-striped" style="font-size: 1.2em;">
        <thead class="thead-light">
          
        </thead>
        <tbody>
          <tr>
            <td>Cima</td>
            <td>500,00 DA</td>
            <td>10</td>
            <td>5 000,00 DA</td>
            
          </tr>
          <tr>
            <td>2</td>
            <td>01/04/2023</td>
            <td>27 000,00 DA</td>
            <td>27 000,00 DA</td>
           
          </tr>
          <tr>
            <td>3</td>
            <td>01/04/2023</td>
            <td>27 000,00 DA</td>
            <td>27 000,00 DA</td>
            
          </tr>
          
        </tbody>
      </table>
    <div class="form-group">
        <label for="montant">Montant:</label>
        <input type="text" class="form-control" id="montant" name="montant" style="width: 200px;">
    </div>
    <div class="form-group">
        <label for="etat">Etat:</label>
        <input type="text" class="form-control" id="etat" name="etat"style="width: 200px;">
    </div>


    
    <br>
            <button type="submit" class="btn btn-primary">Confirmer</button>
            <br>  </br>
</form>


          
     
  
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
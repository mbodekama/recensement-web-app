<?php
session_start(); // démarrer la session pour stocker les informations d'authentification
if(isset($_SESSION['connected']))
{


require('connexion_bd.php');


$sql = "SELECT * FROM user";
$stmt = $conn->query($sql);
// var_dump(expression)

// function getAgent($id,$conn)
// {

// $sql = "SELECT * FROM user WHERE id = ?";
// $stmt = $conn->prepare($sql);
// $stmt->execute([$id]);

// if ($stmt->rowCount() > 0) {
//   return $stmt->fetch(PDO::FETCH_ASSOC);
//   }

// }
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>INNOVING | Dashboard &amp; WebApp</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="assets/js/config.navbar-vertical.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/lib/prismjs/prism-okaidia.css" rel="stylesheet">
    <link href="assets/lib/datatables-bs4/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css" rel="stylesheet">
    <link href="assets/lib/leaflet/leaflet.css" rel="stylesheet">
    <link href="assets/lib/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="assets/lib/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/lib/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="assets/lib/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link href="assets/lib/plyr/plyr.css" rel="stylesheet">
    <link href="assets/lib/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/lib/toastr/toastr.min.css" rel="stylesheet">


  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


      <div class="container-fluid" data-layout="container">
        <nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div><a class="navbar-brand" href="index.html">
              <div class="d-flex align-items-center py-3"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif text-warning">N'ZASSA</span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content perfect-scrollbar scrollbar">
              <ul class="navbar-nav flex-column">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Acceuil</span>
                    </div>
                  </a>
                  <ul class="nav collapse show " id="home" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="dash.php">Tableau de bord</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="liste_agents.php">Liste des agents</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dash.php">Liste commerçant</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Extraire données</a>
                    </li>
                  </ul>
                </li>
            
               
              </ul>

            
            </div>
          </div>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">N'ZASSA</span>
              </div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box">
                  <form class="position-relative" data-toggle="search" data-display="static">

                    <input class="form-control search-input" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>

                  </form>

                  <button class="close" type="button" data-dismiss="search"><span class="fas fa-times"></span></button>
                  <div class="dropdown-menu">
                    <div class="scrollbar perfect-scrollbar py-3" style="height: 24rem;">
                      <h6 class="dropdown-header px-card pt-0 pb-2">Recently Browsed</h6>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="pages/events.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle mr-2 text-300 fs--2"></span>

                          <div class="font-weight-normal">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle mr-2 text-300 fs--2"></span>

                          <div class="font-weight-normal">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>

                      <hr class="border-200" />
                      <h6 class="dropdown-header px-card pt-0 pb-2">Suggested Filter</h6>
                      <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="pages/events.html">
                        <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1">Most popular products</div>
                        </div>
                      </a>

                      <hr class="border-200" />
                      <h6 class="dropdown-header px-card pt-0 pb-2">Files</h6>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail mr-2"><img class="border h-100 w-100 fit-cover rounded-lg" src="assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0">iPhone</h6>
                            <p class="fs--2 mb-0"><span class="font-weight-semi-bold">Antony</span><span class="font-weight-medium text-600 ml-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail mr-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0">Falcon v1.8.2</h6>
                            <p class="fs--2 mb-0"><span class="font-weight-semi-bold">John</span><span class="font-weight-medium text-600 ml-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>

                      <hr class="border-200" />
                      <h6 class="dropdown-header px-card pt-0 pb-2">Members</h6>
                      <a class="dropdown-item px-card py-2" href="pages/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online mr-2">
                            <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0">Anna Karinina</h6>
                            <p class="fs--2 mb-0">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l mr-2">
                            <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0">Antony Hopkins</h6>
                            <p class="fs--2 mb-0">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l mr-2">
                            <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0">Emma Watson</h6>
                            <p class="fs--2 mb-0">Google</p>
                          </div>
                        </div>
                      </a>

                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
              <!-- <li class="nav-item d-none d-md-block">
                <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-beta6/" target="_blank"><img src="assets/img/logos/bootstrap-5.png" alt="" height="35" /></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                      </svg></span></span></a>

              </li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>

              </li>
              <li class="nav-item dropdown dropdown-on-hover">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none" style="max-width: 20rem">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="list-group list-group-flush font-weight-normal fs--1">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush bg-200" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />

                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>

                          </div>
                        </a>

                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush bg-200" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>

                          </div>
                        </a>

                      </div>
                      <div class="list-group-title">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />

                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>

                          </div>
                        </a>

                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                  </div>
                </div>

              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />

                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/settings.html">Settings</a>
                    <a class="dropdown-item" href="authentication/basic/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>

       
        
      

          <!-- -------------------------------------------->
          <!--    Tables, Files, and Lists-->
          <!-- -------------------------------------------->
          <div class="media mb-4 mt-2"><span class="fa-stack mr-2 ml-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-list" data-fa-transform="shrink-2"></i></span>
            <div class="media-body">
              <h5 class="mb-0 text-primary position-relative"><span class="bg-200 pr-3">Les des agents INNOVING</span><span class="border position-absolute absolute-vertical-center w-100 z-index--1 l-0"></span></h5>
              <p class="mb-0">Listes </p>
            </div>
          </div>

          <?php
          if ($stmt->rowCount() > 0) {
            ?>
          <div class="card mb-3">
            <div class="card-header">
              <div class="row align-items-center justify-content-between">
                <!-- <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                  <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Customers</h5>
                </div> -->
               
              </div>
            </div>
            <div class="card-body p-0">
              <div class="falcon-data-table">
                <table class="table table-sm mb-0 table-striped table-dashboard fs--1 data-table border-bottom border-200" data-options='{"searching":true,"responsive":false,"pageLength":12,"info":false,"lengthChange":false,"sWrapper":"falcon-data-table-wrapper","dom":"<&#39;row mx-1&#39;<&#39;col-sm-12 col-md-6&#39;l><&#39;col-sm-12 col-md-6&#39;f>><&#39;table-responsive&#39;tr><&#39;row no-gutters px-1 py-3 align-items-center justify-content-center&#39;<&#39;col-auto&#39;p>>","language":{"paginate":{"next":"<span class=\"fas fa-chevron-right\"></span>","previous":"<span class=\"fas fa-chevron-left\"></span>"}}}'>
                  <thead class="bg-200 text-900">
                    <tr>
                      <th class="align-middle no-sort pr-3">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-customers-select" type="checkbox" data-checkbox-body="#customers" data-checkbox-actions="#customers-actions" data-checkbox-replaced-element="#customer-table-actions" />
                          <label class="custom-control-label" for="checkbox-bulk-customers-select"></label>
                        </div>
                      </th>
                      <th class="align-middle sort">Nom agent</th>
                      <th class="align-middle sort">Mail</th>
                      <th class="align-middle sort">Password</th>
                      <th class="align-middle sort">Equipe</th>
                      <th class="align-middle sort">Date enregistrement</th>
                      <th class="align-middle sort">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody id="customers">
                    <?php 
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                     
                      ?>
                    <tr class="btn-reveal-trigger">
                      <td class="py-2 align-middle white-space-nowrap">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="customer-checkbox-0" />
                          <label class="custom-control-label" for="customer-checkbox-0"></label>
                        </div>
                      </td>
                     

                      <td class="py-2 align-middle white-space-nowrap customer-name-column"><a href="pages/customer-details.html">
                          <div class="media d-flex align-items-center">
                            <div class="avatar avatar-xl mr-2">
                              <img class="rounded-circle" src="assets/img/illustrations/falcon.png" alt="" />

                            </div>
                            <div class="media-body">
                              <h5 class="mb-0 fs--1"><?=$row['name']?></h5>
                            </div>
                          </div>
                        </a></td>

                      <td class="py-2 align-middle">
                        <a href="tel:<?=$row['telephone']?>" ><?=$row['email']?></a>
                      </td>
                      <td class="py-2 align-middle white-space-nowrap"> <a ><?=$row['password']?></a></td>
                      <td class="py-2 align-middle">
                        
                        <span class="badge badge-pill badge-soft-info fs-0" style="text-transform: uppercase;">
                          INNOVING
                            
                          </span>
                          
                        </td>
                      <td class="py-2 align-middle">
                        <?=$row['date_inscription']?>
                          
                        </td>
                      <td class="align-middle text-center d-flex " style="cursor: pointer;" >
                          <input type="hidden" id="key" value="">
                         
                            <div class="activeEdit" telVendeur="<?=$row['telephone']?>"  idVnt ="<?=$row['id']?>"
                                  VntPrdLine="<?=$row['id']?>"  >
                              <span class="mr-2 fas fa-2x far fa-eye text-warning "  ></span>
                            </div>
                            
                          <div class="deleteBtn" telVendeur="<?=$row['telephone']?>"  idVnt ="<?=$row['id']?>">
                            <span class="mr-2  fas fa-2x fa-trash text-danger "  ></span>
                          </div>   
                        </td>
                     
                    </tr>
                  <?php } ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
         <?php
       }
       else
       {
        echo "<div class='alert alert-warning'> Aucun élement enregistré </div>";
       }
       ?>
      



          <!-- -------------------------------------------->
          <!--    Users & Feed-->
          <!-- -------------------------------------------->


          <footer>
            <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v2.8.2</p>
              </div>
            </div>
          </footer>
        </div>
     
     
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/lib/@fortawesome/all.min.js"></script>
    <script src="assets/lib/stickyfilljs/stickyfill.min.js"></script>
    <script src="assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="assets/lib/is_js/is.min.js"></script>
    <script src="assets/lib/lodash/lodash.min.js"></script>
    <script src="assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="assets/lib/prismjs/prism.js"></script>
    <script src="assets/lib/chart.js/Chart.min.js"></script>
    <script src="assets/lib/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/lib/datatables-bs4/dataTables.bootstrap4.min.js"></script>
    <script src="assets/lib/datatables.net-responsive/dataTables.responsive.js"></script>
    <script src="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
    <script src="assets/lib/leaflet/leaflet.js"></script>
    <script src="assets/lib/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="assets/lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="assets/lib/echarts/echarts.min.js"></script>
    <script src="assets/lib/progressbar.js/progressbar.min.js"></script>
    <script src="assets/lib/owl.carousel/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.8.7/polyfill.min.js"></script>
    <script src="assets/lib/dropzone/dropzone.min.js"></script>
    <script src="assets/lib/tinymce/tinymce.min.js"></script>
    <script src="assets/lib/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/lib/flatpickr/flatpickr.min.js"></script>
    <script src="assets/lib/plyr/plyr.polyfilled.min.js"></script>
    <script src="assets/lib/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/lib/toastr/toastr.min.js"></script>



<script type="text/javascript">

 //Clic sur editer un prd
          $('.activeEdit').click(function()
          {
            
            $(this).next().show();
            $(this).hide();
            
            let VntPrdLine = $(this).attr('VntPrdLine');
            let idV = $(this).attr('idVnt');
            let telVendeur =$(this).attr('telVendeur');
            telVendeur = "https://api.whatsapp.com/send/?phone=%2B225"+telVendeur+"&text='*HELLO%20INNOVING*'"

             // Création d'un élément temporaire "textarea"
              var tempTextArea = document.createElement("textarea");

              // Copie de l'information dans l'élément temporaire
              tempTextArea.value = telVendeur;

              // Ajout de l'élément temporaire au corps de la page
              document.body.appendChild(tempTextArea);

              // Sélection de l'information dans l'élément temporaire
              tempTextArea.select();

              // Copie de l'information dans le presse-papier
              document.execCommand("copy");

              // Suppression de l'élément temporaire
              document.body.removeChild(tempTextArea);
    
    toastr.info('Lien whatsapp copié avec succès')
      
          })

    //Clic sur valider edition un prd
          $('.validEdit').hide() //cacher par défaut

          $('.validEdit').click(function()
          {
            $(this).prev().show();
            $(this).hide();

            let VntPrdLine = $(this).attr('VntPrdLine');
            var idV = $(this).attr('idVnt');
            var telVendeur =$(this).attr('telVendeur');
          })
    
    //clic sur suppression achat 
        $('#deleteAchat').click(function()
        {

          var idVnt = $(this).attr('idV');
          delAchat(idVnt);
        })
</script>
  </body>

</html>

<?php

}
else
{
  header("location:index.html");
}
?>
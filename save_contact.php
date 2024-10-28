<?php
session_start();

if(isset($_SESSION['connected']))
{

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
    <title>INNOVING | COLLECTE &amp; WebApp</title>


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
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/lib/toastr/toastr.min.css" rel="stylesheet">

  </head>



  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


      <div class="container" data-layout="container">
        <div class="row flex-center min-vh-100 py-6">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4"><a class="d-flex flex-center mb-4" href="#"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="58" /><span class="text-sans-serif font-weight-extra-bold fs-5 d-inline-block text-warning">N'ZASSA</span></a>
            <div class="card">
              <div class="card-body p-4 p-sm-5">
                <div class="row text-left justify-content-between align-items-center mb-2">
                  <div class="col-auto">
                    <h5>Nouveau Commerçant</h5>
                  </div>
                 
                </div>
                <form method="POST" action="add_vendeur.php">
                  <div class="form-group">
                    <input class="form-control" type="text" name="nom" placeholder="Nom vendeur" required />
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="telephone" placeholder="Téléphone (whatsapp)" required />
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="activite" placeholder="Nom entreprise" required />
                  </div>

                    <div class="form-group">
                    <label for="exampleFormControlSelect1" >Secteur d'activicté</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="secteur">
                      <option value="Agriculture"> Agriculture </option>
                      <option value="Commerce"> Commerce </option>
                      <option value="Industrie manufacturière"> Industrie manufacturière </option>
                      <option value="Services"> Services </option>
                      <option value="Tourisme et hôtellerie">Tourisme et hôtellerie </option>
                      <option value="Énergie"> Énergie </option>
                      <option value="BTP"> BTP </option>
                      <option value="Mines et carrières">   Mines et carrières </option>
                      <option value="Santé service sociaux">   Santé service sociaux</option>
                      <option value="Transport logisitic">   Transport logisitic</option>
                      <option value="Artisanat et design ">Artisanat et design </option>
                      <option value="Éducation et formation ">Éducation et formation </option>
                      <option value="Services domestiques ">Services domestiques </option>
                      <option value="Médias et communication ">Médias et communication </option>
                      <option value="Santé animale ">Santé animale </option>
                      <option value="Finance ">Finance </option>
                      <option value="Banque ">Banque </option>
                      <option value="Autre ">Autre </option>
                    </select>
                  </div>


                  
                  
                  <div class="form-group">
                    <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Enregistrer</button>
                  </div>
                </form>
                <div class="w-100 position-relative mt-4">
                  <hr class="text-300" />
                  
                </div>
                <div class="form-group mb-0">
           
              </div>
            </div>
          </div>
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
    <script src="assets/js/theme.js"></script>
    <script src="assets/lib/toastr/toastr.min.js"></script>
<?php
if(isset($_SESSION['notif_add_vendeur']) )
  {
    if($_SESSION['notif_add_vendeur']==1)
    {
    ?>
      <script type="text/javascript">
        toastr.success('Vendeur enregistré')
      </script>
      <?php
      unset($_SESSION['notif_add_vendeur']);
    }
    else
    {
      ?>
      <script type="text/javascript">
        toastr.error('Problême de connexion')
      </script>
      <?php
    }
  }

?>

  </body>

</html>

<?php
}
else
{
  header('Location:index.html');
}
?>

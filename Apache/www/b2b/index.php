<!DOCTYPE html>
<html lang="en">
  <head>
    <title>B2B</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Woodytoys</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="http://www.wt2.ephec-ti.be" class="nav-link">Home</a></li>
                <li><a href="http://b2b.wt2.ephec-ti.be" class="nav-link">B2B</a></li>
                <li><a href="https://intranet.wt2.ephec-ti.be" class="nav-link">Intranet</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">B2B</h1>
            <p class="breadcrumb-custom"><a href="index.html">home</a> <span class="mx-2">&gt;</span> <span>B2B</span></p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">

        <div class="row mb-5">

          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">
            <div class="text-left pb-1 border-primary mb-4">
              <h2 class="text-primary">Our History</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti reprehenderit animi est eaque corporis! Nisi, asperiores nam amet doloribus, soluta ut reiciendis. Consequatur modi rem, vero eos ipsam voluptas.</p>
            <p class="mb-5">Error minus sint nobis dolor laborum architecto, quaerat. Voluptatum porro expedita labore esse velit veniam laborum quo obcaecati similique iusto delectus quasi!</p>

            <div class="row">
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mb-3 mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
                  <div>
                    <h3>Ground Shipping</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mb-3 mr-4"><span class="text-primary flaticon-travel"></span></div>
                  <div>
                    <h3>Air Freight</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_4.jpg');">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade">

                <form method="POST" action"" >
                    <label for="inputNom">Nouveau Jouet : </label>
                    <input class="" type="text" name="jouetNom" id="inputNom" placeholder="Ex: LEGO ...">
                    <input class="btn btn-primary text-white" type="submit" name="sub" id="button-addon2" value="Ajouter">
                </form>

            </h2>
          </div>
        </div>

      </div>
    </div>

  <?php

    if ($_POST['sub']){
      try{
          $dbh = new PDO('mysql:host=172.18.0.2;dbname=woody','root','');
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo  ('Connecté !');

          /* $sql = 'INSERT INTO Jouets(NOM) VALUES('.$_POST['jouetNom'].')';
          $dbh->exec($sql); */

          $sql = "INSERT INTO Jouets (NOM) VALUES (?)";
          $stmt= $dbh->prepare($sql);
          $stmt->execute([$_POST['jouetNom']]);

          echo  ('Jouet ajouté !');
      }
      catch(exception $e) {
          echo('Erreur '.$e->getMessage());
      }


    }
  ?>








    <footer class="site-footer">

    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>


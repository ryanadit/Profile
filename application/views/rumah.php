<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AK.COM</title><link rel="shortcut icon" href="<?php echo base_url('assets/img/kumpulan_web.jpg');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('assets/css/mdb.min.css'); ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('assets/css/style.min.css'); ?>" rel="stylesheet">
  <style type="text/css">
    /* Necessary for full page carousel*/
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    /* Carousel*/
    .carousel,
    .carousel-item,
    .carousel-item.active {
      height: 100%;
    }
    .carousel-inner {
      height: 100%;
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
          background: #1C2331!important;
      }
  }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="rumah.php ">
        <strong>AK.com</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/profil/project'); ?>" target="_blank">Preject Kami</a>
          </li>
        </ul>
		<ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/login/index'); ?>" class="nav-link border border-light rounded waves-effect waves-light"
              target="_blank">
              <i class="fa fa-sign-in mr-2"></i>Login
            </a>
          </li>
        </ul>

        

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  <!-- data-ride="carousel" -->
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

	<?php 
	foreach($gambar->result() as $g){
	
	
	?>
    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
	<div class="view" style="background-image: url('<?php echo base_url() . "assets/images/home/".$g->foto ; ?>') ; background-repeat: no-repeat; background-size: cover;">

          <!--Video source-->
           

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Selamat Datang Di Profil Kami</strong>
              </h1>

              <p>
                <strong><?php echo $g->ket ?></strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Silahkan Lihat lihat project yang kami buat, klik dibawah ini
                  </strong>
              </p>

              <a target="_blank" href="<?php echo base_url('index.php/profil/project'); ?>" class="btn btn-outline-white btn-lg">Cek Project Kami
                <i class="fa fa-building-o" aria-hidden="true"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('<?php echo base_url() . "assets/images/home/".$g->foto1 ; ?>') ; background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Selamat Datang Di Profil Kami</strong>
              </h1>

              <p>
                <strong><?php echo $g->ket ?></strong>
              </p>

              <p class="mb-4 d-none d-md-block">
               <strong>Silahkan Lihat lihat project yang kami buat, klik dibawah ini
			   </strong>
              </p>

               <a target="_blank" href="<?php echo base_url('index.php/profil/project'); ?>" class="btn btn-outline-white btn-lg">Cek Project Kami
                <i class="fa fa-building-o" aria-hidden="true"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
      <div class="view" style="background-image: url('<?php echo base_url() . "assets/images/home/".$g->foto2 ; ?>') ; background-repeat: no-repeat; background-size: cover;">


          <!--Video source-->
          
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
	<?php } ?>
            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Selamat Datang Di Profil Kami</strong>
              </h1>

              <p>
                <strong><?php echo $g->ket ?></strong>
              </p>

              <p class="mb-4 d-none d-md-block">
               <strong>Silahkan Lihat lihat project yang kami buat, klik dibawah ini</strong>
              </p>

              <a target="_blank" href="<?php echo base_url('index.php/profil/project'); ?>" class="btn btn-outline-white btn-lg">Cek Project Kami
                <i class="fa fa-building-o" aria-hidden="true"></i>
              </a>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->
	
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="<?php echo base_url('assets/img/AK.com.jpeg'); ?>" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">
<?php 

   
	foreach($kontak as $k){
?>
            <!-- Main heading -->
            <h3 class="h3 mb-3">Apa itu AK.com?</h3>
	<p><?php echo $k->apaitu1 ?></p>
            <!-- Main heading -->

            <hr>
	
            <p>
              <?php echo $k->apaitu2 ?>
            </p>

           

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section>

        <h3 class="h3 text-center mb-5">Tentang AK.com</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-12 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fa fa-code fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Bahasa Pemrograman yang kami gunakan</h5>
                <p class="grey-text"><?php echo $k->tentang1 ?></p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fa fa-book fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Dokumentasi project</h5>
                <p class="grey-text"><?php echo $k->tentang2 ?>
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fa fa-graduation-cap fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Pendidikan programer kami</h5>
                <p class="grey-text"><?php echo $k->tentang3 ?></p>
              </div>
            </div>
            <!--/Third row-->

          </div>
         

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->


      <!--Section: Not enough-->
      
      <!--Section: Not enough-->

      <hr class="mb-5">

      <!--Section: More-->
      <section>

        <h2 class="my-5 h3 text-center">Kontak Kami</h2>

        <!--First row-->
        <div class="row features-small mt-5 wow fadeIn">

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fa fa-whatsapp fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2 pl-3">
                <h5 class="feature-title font-bold mb-1">Nomor Telepon</h5>
                <p class="grey-text mt-2"><?php echo $k->nowa ?>
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fa fa-address-card fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Alamat Kami</h5>
                <p class="grey-text mt-2"><?php echo $k->alamat ?>
                </p>
              </div>
			  <?php }?>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <!--/Grid column-->

          <!--Grid column-->
          
          <!--/Grid column-->

        </div>
        <!--/First row-->

        <!--Second row-->
        <div class="row features-small mt-4 wow fadeIn">

        </div>
        <!--/Second row-->

      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fa fa-twitter mr-3"></i>
      </a>
	  
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="#" target="_blank">AK.com</a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/mdb.min.js'); ?>"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
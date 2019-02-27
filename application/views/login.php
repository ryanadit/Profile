<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login</title><link rel="shortcut icon" href="<?php echo base_url('assets/img/kumpulan_web.jpg');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('assets/css/mdb.min.css'); ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('assets/css/style.min.css'); ?>" rel="stylesheet">
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
  </script>
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
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color-dark">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="<?php echo base_url('index.php/profil/index') ?>" target="_blank">
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
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/profile/index'); ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Preject Kami</a>
          </li>
        </ul>

        

      </div>

    </div>
  </nav>
  <!-- Navbar -->
   
			  
  
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">
	<section>
	
	</section>
	<hr class="mb-5">
	<section>

        <h3 class="h3 text-center mb-5">LOGIN</h3>
        <!--Grid row-->
        <div class="row wow fadeIn">
		
          <!--Grid column-->
		   <div class="col-md-6 mb-4">
		  <div class="card card-cascade narrower mt-6">

    <!--Card image-->
    <div class="view view-cascade gradient-card-header purple-gradient narrower py-4 mx-4 mb-3 d-flex justify-content-center align-items-center">

		  
   
   <?=form_open_multipart('login/aksi_login/')?>
   <p><h4>Silahkan login</h4> </p>
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationCustomUsername">Pengguna</label>
      <div class="input-group">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Username harap diisi.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationCustom03">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
      <div class="invalid-feedback">
        Password harap diisi.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Masuk</button>

			  </div>
			  </div>
			  </div>
			  <div class="col-md-6 mb-4">
			  <div class="card card-cascade narrower mt-6">

    <!--Card image-->
    <div class="view view-cascade gradient-card-header purple-gradient narrower py-4 mx-4 mb-3 d-flex justify-content-center align-items-center">
			  

            <img width="100%" height="257" src="<?php echo base_url('assets/img/AK.com.jpeg'); ?>" >

          </div>
			  </div>
			  </div>
			  </div>
			  
			 
			  </section>

      <!--Section: Main info-->
      
      <!--Section: Main info-->

     

     

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
			  <?php foreach($kontak as $k) { ?>
                <h5 class="feature-title font-bold mb-1">Nomor Telepon</h5>
                <p class="grey-text mt-2"> <?php echo $k->nowa ?>
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
			  <?php } ?>
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hasil Pencarian</title><link rel="shortcut icon" href="<?php echo base_url('assets/img/kumpulan_web.jpg');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
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
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color-dark">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="<?php echo base_url('index.php/profil/index'); ?>">
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

        <form class="form-inline ml-auto" method="post" action="<?php echo base_url('index.php/profil/search'); ?>">
      <div class="md-form my-0">
        <input class="form-control" type="text" name="keyword" placeholder="Search" aria-label="Search">
      </div>
      <button class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit">Search</button>
    </form>


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

        <h3 class="h3 text-center mb-5">Hasil Pencarian</h3>
        <!--Grid row-->
		<?php 
		if( ! empty($upload)){ 
		$no = 1;
		foreach($upload as $data){ ?>
        <div class='card'>
  <div class='card-header'>
    Hasil ke-<?php echo $no++; ?>
  </div>
  <div class='card-body'>
    <h5 class='card-title'><?php echo $data->nama ?></h5>
	

  <!-- Card group -->
<div class="card-group">

  <!-- Card -->
  <div class="card mb-4">

    <!-- Card image -->
    <div class="view overlay">
      <img height="350px" class="card-img-top" src="<?php echo base_url() . 'assets/images/'.$data->foto  ?>" alt="Card image cap">
      
    </div>

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title">Gambar 1</h4>
      <!-- Text -->
      <p class="card-text">Preview project gambar pertama</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      

    </div>
    <!-- Card content -->

  </div>

  <!-- Card -->
  <div class="card mb-4">

    <!-- Card image -->
    <div class="view overlay">
      <img height="350px" class="card-img-top" src="<?php echo base_url() . 'assets/images/'.$data->foto1  ?>" alt="Card image cap">
      
    </div>

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title">Gambar 2</h4>
      <!-- Text -->
      <p class="card-text">Preview project gambar kedua</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      

    </div>
    <!-- Card content -->

  </div>
  <!-- Card -->

</div>
<!-- Card group --> 


<!--/.Carousel Wrapper--> </br>
    <p class='black-text mt-2'><?php echo $data->keterangan ?></p>
    
  </div>
		
		
</div>
<hr class="mb-5">
<?php	
			}
		}else{ // Jika data tidak ada
			echo "<p class='card-text'>Data tidak ada.</p>";
		} ?>
			  
			 
			  </section>


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
			  <?php foreach($kontak->result() as $k) { ?>
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
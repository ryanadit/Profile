<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ubah Data</title><link rel="shortcut icon" href="<?php echo base_url('assets/img/kumpulan_web.jpg');?>">
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
      <a class="navbar-brand" href="<?php echo base_url('index.php/profile/data'); ?>">
        <strong>AK.com(Admin)</strong>
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
            <a class="nav-link" href="<?php echo base_url('index.php/profile/data'); ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/upload/datadaftar'); ?>" >Daftar Project</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/profile/daftar'); ?>" >Update Alamat</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/profile/viewgambar'); ?>" >Update Gambar</a>
          </li>
        </ul>
		<ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/login/logout'); ?>" class="nav-link border border-light rounded waves-effect waves-light">
              <i class="fa fa-sign-out mr-2"></i>Logout
            </a>
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
	<?php foreach($kontak as $r) {?>

        <form class="text-center border border-light p-5" method="post" action="<?php echo base_url('index.php/profile/proses_ubah/'.$r->id_kontak); ?>">
	
     
    <p class="h3 mb-4">Ubah Contact</p>

    
    <input type="text" id="nowa" name="nowa" class="form-control mb-4" value="<?php echo $r->nowa ?>" required>

    
    <input type="text" id="alamat" name="alamat" class="form-control mb-4" value="<?php echo $r->alamat ?>" required>

    
    <label><b>Apa itu AK.com</b></label>

    
    <div class="form-group">
        <textarea class="form-control rounded-0" id="apaitu1" name="apaitu1" rows="3" ><?php echo $r->apaitu1 ?></textarea></br>
        <textarea class="form-control rounded-0" id="apaitu2" name="apaitu2" rows="3" ><?php echo $r->apaitu2 ?></textarea>
    </div>
	
	<label><b>Tentang AK.com</b></label>
	
	<div class="form-group">
        <textarea class="form-control rounded-0" id="tentang1" name="tentang1" rows="3" ><?php echo $r->tentang1 ?></textarea></br>
        <textarea class="form-control rounded-0" id="tentang2" name="tentang2" rows="3" ><?php echo $r->tentang2 ?></textarea></br>
        <textarea class="form-control rounded-0" id="tentang3" name="tentang3" rows="3" ><?php echo $r->tentang3 ?></textarea>
    </div>
	
	

<?php }?>
    <!-- Send button -->
    <button class="btn btn-primary" type="submit">Simpan</button>

</form>
			 
			  
			  
			 
			  </section>

      <!--Section: Main info-->
      
      <!--Section: Main info-->

     <hr class="mb-5">

      <!--Section: More-->
      

     

      

      <!--Section: More-->
      
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
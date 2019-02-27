<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Daftar Content</title><link rel="shortcut icon" href="<?php echo base_url('assets/img/kumpulan_web.jpg');?>">
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
	

        
			 
			  
			  
			 
			 

      <!--Section: Main info-->
      
      <!--Section: Main info-->

     <hr class="mb-5">

      <!--Section: More-->
      <section>
	  <h2 class="my-5 h3 text-center">Daftar Content</h2>

        <!--First row-->
         <div class="row wow fadeIn">
		 <div class="table-responsive">
		 <table class="table">
		 <thead>
		 <tr>
					<th>No</th>
                    <th width="70">Nomor </th>
                    <th>Alamat</th>
                    <th>Apaitu1</th>
                    <th>Apaitu2</th>
                    <th>Tentang1</th>
                    <th>Tentang2</th>
                    <th>Tentang3</th>
                    <th>Operasi</th>
                </tr>
				<thead>
		
		
	   <?php
				$no = $this->uri->segment('3') + 1;
				foreach($kontak as $k){
					
				?>
                <tbody>
						<tr bgcolor="#fff">
						<td><?php echo $no++; ?></td>
                        <td><?php echo $k->nowa ?> </td>
                        <td><?php echo $k->alamat ?></td>
                        <td><?php echo $k->apaitu1 ?></td>
                        <td><?php echo $k->apaitu2 ?></td>
                        <td><?php echo $k->tentang1 ?></td>
                        <td><?php echo $k->tentang2 ?></td>
                        <td><?php echo $k->tentang3 ?></td>
                        <td><a href="<?php echo base_url();?>index.php/profile/ubah/<?php echo $k->id_kontak ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Ubah</a><br> </br>
							<a href="<?php echo base_url();?>index.php/profile/hapus/<?php echo $k->id_kontak ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                </td>
                        </tr>


				</tbody>
				<?php } ?>
				</table>
				</br>
				<?php 
				echo $this->pagination->create_links();
	?>
				</div>
	  </section>

				

      <hr class="mb-5">

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
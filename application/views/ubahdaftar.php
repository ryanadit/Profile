<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Upload Data</title><link rel="shortcut icon" href="<?php echo base_url('assets/img/kumpulan_web.jpg');?>">
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
	<section>

        <h3 class="h3 text-center mb-5">Upload Project</h3>
		
		<?php
			/*include('koneksicom.php');
			if(isset($_POST['upload'])){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'apk');
				$file_name	= $_FILES['file']['name'];
				$tmp 			= explode('.', $file_name);
				$file_ext		= end($tmp);
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$nama			= $_POST['nama'];
				$tgl				= date("Y-m-d");
				$maxsize 		= 52203500;
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < $maxsize){
						$lokasi = 'files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$sq = "INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')";
						$in = mysqli_query($kon,$sq);
						if($in){
							echo '<div class="alert alert-success" role="alert">
							Success : File berhasil di upload !</div>';
						}else{
							echo '<div class="alert alert-danger" role="alert">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="alert alert-danger" role="alert">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="alert alert-danger" role="alert">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
			} */
			?>
        <!--Grid row-->
        <div class="row wow fadeIn">
		
          <!--Grid column-->
		  
		   <div class="col-md-6 mb-4">
		  <div class="card card-cascade narrower mt-5">

    <!--Card image-->
    <div class="view view-cascade gradient-card-header purple-gradient narrower py-4 mx-4 mb-3 d-flex justify-content-center align-items-center">
	
		<?php foreach($upload as $r) {?>  
   <form method="post" action="<?php echo base_url('index.php/upload/proses_ubah/'.$r->id_upload); ?>" enctype="multipart/form-data" class="needs-validation" novalidate>
   
   <p><h4>Inputkan File</h4> </p>
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationCustomUsername">Nama File</label>
      <div class="input-group">
        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $r->nama ?>" aria-describedby="inputGroupPrepend" required>
		<div class="invalid-feedback">
          Nama File harap diisi.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationCustomUsername">Tanggal</label>
      <div class="input-group">
        <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $r->tanggal ?>" aria-describedby="inputGroupPrepend" required>
		<div class="invalid-feedback">
          Tanggal harap diisi.
        </div>
      </div>
    </div>
  </div>
  </br>
  
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Gambar 1</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="file" name="userfile" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

<div class="md-form">
  <i class="fa fa-pencil prefix"></i>
  <textarea type="text" id="keterangan" name="keterangan" class="md-textarea form-control" rows="3"><?php echo $r->keterangan ?></textarea>
  <label for="form10">Keterangan Project</label>
</div>

  
  
   <?php }?>
  <button class="btn btn-primary" type="submit" name="upload">Edit</button>
</form>
			  </div>
			  </div>
			  </div>
			  <div class="col-md-6 mb-4">
			  <div class="view view-cascade gradient-card-header purple-gradient narrower py-4 mx-4 mb-3 d-flex justify-content-center align-items-center">

            <img width="100%" height="100%" src="<?php echo base_url('assets/img/AK.com.jpeg'); ?>" class="img-fluid z-depth-1-half">

          </div>
          </div>
		  
			  </div>
			  
			 
			  </section>
			  
	<hr class="mb-5">
	

      

     

     

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
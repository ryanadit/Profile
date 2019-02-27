<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Daftar Gambar</title><link rel="shortcut icon" href="<?php echo base_url('assets/img/kumpulan_web.jpg');?>">
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
	  
	
	<?php
				$no = 1;
				foreach($gambar as $data){
					
				?>
	
	<!--- Modal update -->
	
	<div class="modal fade" id="modal_edit<?php echo $data->id_gambar ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Foto 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/profile/edit_gambar_a/'.$data->id_gambar); ?>" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon02">Gambar 1</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="file" name="userfile" aria-describedby="inputGroupFileAddon02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
</div>
                </div>
                <div class="modal-footer">
                    
                    <button class="btn btn-info" type="submit" name="upload">Update</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </form>
            </div>
            </div>
        </div>
		
		<div class="modal fade" id="modal_edit1<?php echo $data->id_gambar ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Foto 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/profile/edit_gambar_b/'.$data->id_gambar); ?>" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon02">Gambar 1</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="file" name="userfile" aria-describedby="inputGroupFileAddon02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
</div>
                </div>
                <div class="modal-footer">
                    
                    <button class="btn btn-info" type="submit" name="upload">Update</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </form>
            </div>
            </div>
        </div>
		
		<div class="modal fade" id="modal_edit2<?php echo $data->id_gambar ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Foto 3 & Keterangan </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/profile/edit_gambar_c/'.$data->id_gambar); ?>" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon02">Gambar 1</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="file" name="userfile" aria-describedby="inputGroupFileAddon02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
  </br>
</div>
<div class="md-form">
  <i class="fa fa-pencil prefix"></i>
  <textarea type="text" id="keterangan" name="ket" class="md-textarea form-control" rows="3"><?php echo $data->ket ?></textarea>
  <label for="form10">Keterangan Sampul Web</label>
</div>
                </div>
                <div class="modal-footer">
                    
                    <button class="btn btn-info" type="submit" name="upload">Update</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </form>
            </div>
            </div>
        </div>
      
      <!--Section: Main info-->

     <hr class="mb-5">

      <!--Section: More-->
      <section>
	  <h2 class="my-5 h3 text-center">Daftar Gambar</h2>

        <!--First row-->
         <div class="row wow fadeIn">
		 <div class="table-responsive">
		 <table class="table">
		 <thead>
		 <tr>
					
                    <th width="60">No</th>
                    <th width="150">Foto 1</th>
                    <th width="150">Foto 2</th>
                    <th width="150">Foto 3</th>
                    <th width="100">Keterangan</th>
                    <th width="90">Operasi</th>
                </tr>
				<thead>
		
		
	   
                
                <tbody>
						<tr bgcolor="#fff">
						<td><?php echo $no++; ?></td>
                        <td><img height='200px' width='100%' src="<?php echo base_url() . "assets/images/home/".$data->foto ?>"></td>
                        <td><img height='200px' width='100%' src="<?php echo base_url() . "assets/images/home/".$data->foto1 ?>"></td>
                        <td><img height='200px' width='100%' src="<?php echo base_url() . "assets/images/home/".$data->foto2 ?>"></td>
                        <td><?php echo $data->ket ?></td>
						<td>
							<a class="btn btn-sm btn-deep-purple" data-toggle="modal" data-target="#modal_edit<?php echo $data->id_gambar;?>"> Edit foto 1</a> <br></br>
							<a class="btn btn-sm btn-unique" data-toggle="modal" data-target="#modal_edit1<?php echo $data->id_gambar;?>"> Edit foto 2</a> <br></br>
							<a class="btn btn-sm btn-mdb-color" data-toggle="modal" data-target="#modal_edit2<?php echo $data->id_gambar;?>"> Edit foto 3 & ket</a> <br></br>
							
                </td>
                        </tr>


				</tbody>
				<?php } ?>
				</table>
				</div>
				
				</br>
				
            
            
				
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

  
  
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
  <!-- SCRIPTS -->
  <script type="text/javascript">
    
 
    //Hapus Data
    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
 
  </script>
  
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
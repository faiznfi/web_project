<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Julio Purnanugraha" content="">
    <link rel="icon" href="<?=base_url()?>assets/img/favicon.png">
    <title>JulioExpress - Ur Logistic Needs!</title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/coming-soon.css" rel="stylesheet">
  </head>

  <body>
  	

    <div class="overlay text-center"></div>
    <div id="modal" class="modal">
	  
	</div>
  <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
  <a href="<?=base_url()?>welcome/logout" class="btn btn-info btn-sm loginbutton" id="loginbutton">Logout</a>
  <?php else:?>
   <a href="<?=base_url()?>welcome/login" class="btn btn-info btn-sm loginbutton" id="loginbutton">Login</a>
  <?php endif; ?>
    <div class="masthead ">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0 ">
              <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
               <h5>Tambah Data</h5>
               <?=form_open('Welcome/tambah_data')?>
                <div class="form-group text-center">
                  <input type="text" class="form-control" id="noresi" name="noresi" placeholder="No Resi" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pengirim" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="produk" name="produk" placeholder="Produk" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="nama_tujuan" name="nama_tujuan" placeholder="Nama Tujuan" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Tujuan" required>
                </div>
                <div class="form-group text-center">
                  <input type="submit" class="btn btn-default" value="Tambah">
                </div>
              </form>
              <h5>Ganti Status</h5>
              <?=form_open('Welcome/ganti_status')?>
              <div class="form-group text-center">
                  <select class="form-control" id="noresi" name="noresi" placeholder="No Resi" required>
                    <option value="">No Resi</option>
                    <?php foreach($data as $item):
                    ?>
                    <option value="<?=$item['no_resi']?>"><?=$item['no_resi']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                 <div class="form-group text-center">
                  <input type="text" class="form-control" id="gantistatus" name="gantistatus" placeholder="Status saat ini" required>
                </div>
                <div class="form-group text-center">
                  <input type="submit" class="btn btn-default" value="Ganti">
                </div>
              </form>
              <?php else:?>
              <h1 class="mb-3">Welcome to Julio Express!</h1>
              <p class="mb-5">Untuk mencari nomor resi pengiriman anda, silahkan masukkan nomor anda disini</p>
              <div class="input-group input-group-newsletter">
                <input type="text" class="form-control noresi" placeholder="Masukkan Resi..." aria-label="Masukkan Resi..." aria-describedby="basic-addon">
                <div class="input-group-append">
                  <input type="submit" class="btn btn-secondary cari" value="cari"/>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>assets/vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>assets/js/coming-soon.min.js"></script>

	<script>
	$('.modal').hide();
	$('.cari').click(function() {
    var noresi = $('.noresi').val();
	        $.ajax({
	        	type:'POST',
	        	url:'<?=base_url()?>welcome/cariresi/',
	        	data:{noresi:noresi},
	            beforeSend: function(){ 
	            	$('.masthead').fadeOut();
	                $(".overlay").html('<img style="position:relative" class="text-center loading-indicator" width="100%" height="100%" src="<?= base_url('assets/img/loading.gif') ?>"/>').fadeIn();
	            },
	            success: function(html){
	            $('.loading-indicator').fadeOut();
	            $('.modal').show();
	            $('.modal').html(html);
	            }
	        });
	});


	</script>
  </body>

</html>

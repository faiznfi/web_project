<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hotelku - Booknow!</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/portfolio-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Hotelku</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('Welcome/index')?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('Welcome/daftarbooking')?>">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <?php 
        foreach($data as $item): 
      ?>
      <!-- Portfolio Item Heading -->
      <h1 class="my-4"><?=$item['nama']?>
        <small>Rp. <?=$item['harga']?>/night</small>
      </h1>
      <h6>Kamar tersedia : <?=$item['jumlah_booking']?> </h5>
     
      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="<?=base_url()?>assets/hotel1.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Dapatkan kenyamanan seakan dirumah!</h3>
          <p>Hotel memiliki kapasitas hingga 8 orang per kamarnya, dilengkapi kolam renang, tempat tidur dan bathup mewah!</p>
          <h3 class="my-3">Fasilitas</h3>
          <ul>
            <li>King Bed</li>
            <li>Breakfast</li>
            <li>Jacuzzi and Hot-tub</li>
            <li>Wifi</li>
          </ul>
          <?php
          if($item['jumlah_booking'] == 0 ){?>
          <a href="<?=base_url('Welcome/booking')?>"><input class="btn btn-danger btn-lg btn-block" value="Penuh!" type="button" disabled></a>
          <?php 
              }
              else
              { 
          ?>
              <a href="<?=base_url('Welcome/booking')?>"><input class="btn btn-danger btn-lg btn-block" value="Book Now!" type="button"></a>
          <?php
              }
          ?>
        </div>
         <?php
      endforeach;?>
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Foto Kamar</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="<?=base_url()?>assets/hotel2.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="<?=base_url()?>assets/hotel2.png" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="<?=base_url()?>assets/hotel3.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="<?=base_url()?>assets/hotel4.jpg" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

  </body>

</html>

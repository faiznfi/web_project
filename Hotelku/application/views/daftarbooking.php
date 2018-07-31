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
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('Welcome/index')?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('Welcome/daftarbooking')?>">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      
      <h1 class="text-center"><small>Daftar Booking</small></h1>
      <table class="table table-hover" id="dev-table">
                  <thead>

                    <tr>
                      <th>No</th>
                      <th>Nama Depan</th>
                      <th>Nama Belakang</th>
                      <th>No HP</th>
                      <th>Jumlah Orang</th>
                      <th>Tipe Kamar</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Keluar</th>
                      <th>Act</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($data as $item): 
                    ?>
                    <tr>
                      <td><?=$no?></td>
                      <td><?=$item['namadepan']?></td>
                      <td><?=$item['namabelakang']?></td>
                      <td><?=$item['nohp']?></td>
                      <td><?=$item['jumlahorang']?></td>
                      <td><?=$item['tipekamar']?></td>
                      <td><?=$item['tanggalmasuk']?></td>
                      <td><?=$item['tanggalkeluar']?></td>
                      <td><a href="<?=base_url()?>Welcome/booking_selesai/<?=$item['id']?>" class="btn btn-info btn-sm">Selesai</a></td>
                    </tr>
                    <?php $no++;
                    endforeach;?>
                  </tbody>
                </table>
          </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Hotelku 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

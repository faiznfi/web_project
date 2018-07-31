 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="" content="">
    <link rel="icon" href="<?=base_url()?>assets/img/favicon.png">
    <title>Cek Kelulusanmu disini!</title>
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/lulus.in.css" rel="stylesheet">
  </head>

  <!-- Bootstrap CDN -->
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?=base_url('welcome')?>">Home</a></li>
          <li><a href="<?=base_url('welcome/about')?>">About</a></li>
          <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
          <li><a href="<?=base_url('welcome/input')?>">Input Data</a></li>
          <li><a href="<?=base_url('welcome/logout')?>">Logout</a></li>
          <?php else:?>
          <li><a href="<?=base_url('welcome/login')?>">Login</a></li>
          <?php endif; ?>
        </ul>
      </div>

    </div>
  </nav>
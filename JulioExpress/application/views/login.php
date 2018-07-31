<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Julio Purnanugraha" content="">
    <link rel="icon" href="<?=base_url()?>assets/img/favicon.png">
    <title>JulioExpress - Login</title>
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
<div class="login">

  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

<?= form_open() ?>
			

				<div class="form-group text-center">
					
					<input type="text" class="form-control" id="username" name="username" placeholder="Your username">
				</div>
				<div class="form-group">
					
					<input type="password" class="form-control" id="password" name="password" placeholder="Your password">
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-default" value="Login">
				</div>

			</form>
</div>
</body>
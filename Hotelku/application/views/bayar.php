<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotelku - Booknow!</title>
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap2.css">
<link href="<?=base_url()?>assets/css/portfolio-item.css" rel="stylesheet">
<script src="<?=base_url()?>assets/css/jquery.js"></script>
<script src="<?=base_url()?>assets/css/jquery2.js"></script>

</head>

<body class="background">

<a href="<?=base_url("Welcome/index")?>" class="btn btn-danger hotelkuback"> Cancel</a>
<div class="signup-form">
    <form action="<?=base_url("Welcome/bayar_act")?>" method="post">
		<h2>Form</h2>
		<p class="hint-text">Berikut adalah tagihan yang harus dibayar</p>
		<div class="form-group">
			<div class="row">
				<label class="col-xs-6">Total Pembayaran</label>
			</div>
			<div class="row">
				<label class="col-xs-6">Harga Kamar</label>
				<label class="col-xs-6">Rp. 8000000</label>
			</div>
            <div class="row">
	            <div class="col-xs-12"><input type="text" class="form-control" name="tanggalmasuk" value="800000" required="required" disabled></div>
			</div>
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> Saya setuju dengan <a href="#">Ketentuan</a> dan <a href="#">Persyaratan</a> yang berlaku</label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Bayar</button>
        </div>
    </form>
</div>
</body>
</html>                            
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
    <form action="<?=base_url("Welcome/booking_act")?>" method="post">
		<h2>Form</h2>
		<p class="hint-text">Berikut adalah form yang harus diisi</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="namadepan" placeholder="Nama Depan" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="namabelakang" placeholder="Nama Belakang" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="nohp" placeholder="No HP" required="required">
        </div>
		<div class="form-group">
			<div class="row">
	            <div class="col-xs-6"><input type="number" min="1" class="form-control" name="jumlahorang" placeholder="Jumlah Orang" required="required"></div>
				<div class="col-xs-6"><select class="form-control" name="tipekamar" required="required">
				<option value="">Pilih Tipe Kamar</option>
				<option value="Deluxe">Deluxe</option>
				<option value="Luxury">Luxury</option>
				<option value="Heaven">Heaven</option>
				</select></div>
			</div>
        </div>
		<div class="form-group">
			<div class="row">
				<label class="col-xs-6">Tanggal Masuk</label>
				<label class="col-xs-6">Tanggal Keluar</label>
			</div>
            <div class="row">
	            <div class="col-xs-6"><input type="date" class="form-control" name="tanggalmasuk" placeholder="tanggalmasuk" required="required"></div>
				<div class="col-xs-6"><input type="date" class="form-control" name="tanggalkeluar" placeholder="tanggalkeluar" required="required"></div>
			</div>
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> Saya setuju dengan <a href="#">Ketentuan</a> dan <a href="#">Persyaratan</a> yang berlaku</label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Book Now</button>
        </div>
    </form>
</div>
</body>
</html>                            
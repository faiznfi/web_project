<body>
<div class="container">
    <div class="row">
      <div class="span4"></div>
      <div class="span4 text-center"><h2 class="center-block" width="270" height="95" alt="Google" id="logo">HASIL</h2></div>
      <div class="span4"></div>
    </div>

<?php 
	foreach($data as $item) 
	{
		if ($item['status']=='diterima')
		{
			echo '<div class="panel panel-success text-center">
		      	  <div class="panel-heading">SELAMAT!!</div>
		      	  <div class="panel-body">Saudara/i <b>'.$item['nama'].'</b> dengan nomor <b>'.$item['no_induk'].'</b>  telah diterima di <b>'.$item['sekolah'].'</b> </div>
				  </div>';
		}
		elseif ($item['status']=='ditolak')
		{
			echo '<div class="panel panel-danger text-center">
			      <div class="panel-heading">Maaf</div>
			      <div class="panel-body">Saudara/i <b>'.$item['nama'].'</b> dengan nomor <b>'.$item['no_induk'].'</b>  belum lolos di sekolah manapun, jangan patah semangat! </div>
				  </div>';
		}
	}
?>
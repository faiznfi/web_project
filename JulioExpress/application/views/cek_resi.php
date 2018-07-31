<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<br>
<!-- Modal Content -->
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
      <?php 
      if($data==NULL)
      { ?>

        <div class="modal-body text-center">
          <h5>Data Tidak Ditemukan</h5>
        </div>
      <?php } 
      else
      {
      foreach($data as $item){ ?>
        <h3 class="header-title ">No Resi : <?=$item['no_resi']?></h3>
      <?php }?>
      </div>
      <!-- Modal Body -->
        <div class="modal-body">
        <br>
        <?php foreach($data as $item){ ?>
        <h6 class="col-sm-12 title"  >Pengirim : <b style="color:red"><?=$item['nama_pengirim']?></b></h6>
        <h6 class="col-sm-12 title"  >Produk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b style="color:red"><?=$item['produk']?></b></h6>
        <h6 class="col-sm-12 title"  >Tujuan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b style="color:red"><?=$item['nama_tujuan']?></b></h6>
        <h6 class="col-sm-12 title"  >Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b style="color:red"><?=$item['alamat_tujuan']?></b></h6>
        <h6 class="col-sm-12 title"  >Status barang :</h6>
        <?php }?>
        <br>
        <table class="table table-bordered" style="width:100%">
          <tr>
            <th>Tanggal</th>
            <th>Status</th>
          </tr>
          <?php foreach($status as $key){ ?>
          <tr>
            <td><?=$key['date']?></td>
            <td><?=$key['status']?></td>
          </tr>
          <?php
          }}
          ?>
        </table>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn tutup" value="Close"/>
      </div>
    </div>
<script>
  $('.close'&&'.tutup').click(function() {
      var noresi = $(this).data('noresi');
          $.ajax({
            type:'POST',
            url:'<?=base_url()?>welcome/',
              success: function(html){
              $('.modal').fadeOut();
              $('.loading-indicator').fadeOut();
              $('.masthead').fadeIn();
              }
          });
  });
</script>
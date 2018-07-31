<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">

 
<body>
  

  <div class="container">
    <div class="row">
      <div class="span4"></div>
      <div class="span4 text-center title"><b><h4 class="center-block text" width="270" height="95">CEK KELULUSANMU DISINI!</h4></b></div>
      <div class="span4"></div>
    </div>

    <div class="row">
      <?= form_open('Welcome/carinomor') ?>
      <div class="col-xs-6">
        <div class="input-group">
          <input type="text" class="form-control" name="nomor" required>
          <span class="input-group-btn">
          <input type="submit" class="btn btn-default" value="Cari">
        </span>
        </div>
      </div>
    </form>
    </div>
  </div>
    </body>
</html>

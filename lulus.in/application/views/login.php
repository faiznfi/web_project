<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header text-center">
				<br>
				<h1>Login</h1>
			</div>
			<?= form_open() ?>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Your username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Your password">
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-default" value="Login">
				</div>
				</div>
				<div class="col-md-4">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->
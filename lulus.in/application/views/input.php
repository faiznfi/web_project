<div class="col-md-12">
			<div class="page-header text-center">
				<br>
				<h1>Input Data Siswa</h1>
			</div>
			<?= form_open('Welcome/input_data') ?>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<div class="form-group">
					<label for="noinduk">No Induk Siswa</label>
					<input type="text" class="form-control" id="noinduk" name="noinduk" placeholder="No Induk" required>
				</div>
				<div class="form-group">
					<label for="nama">Nama Siswa</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Siswa" required>
				</div>
				<div class="form-group">
					<label for="sekolah">Sekolah</label>
					<input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Nama Sekolah" required>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<select class="form-control" name="status" required="required">
					<option value="">Pilih Status</option>
					<option value="diterima">Terima</option>
					<option value="ditolak">Tolak</option>
					</select>
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-default" value="Input">
				</div>
				</div>
				<div class="col-md-4">
				</div>
			</form>
		</div>
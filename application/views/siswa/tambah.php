<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card">
			<div class="card-header">
				Form Tambah Data Siswa
			</div>
			<div class="card-body">
				<?php if( validation_errors() ) : ?>
					<div class="alert alert-danger" role="alert">
					<?= validation_errors(); ?>
					</div>
				<?php endif; ?>
				<form action="" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label for="nis">NIS</label>
						<input type="text" class="form-control" id="nis" name="nis">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
							<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
							<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
							<option value="Multimedia">Multimedia</option>
						</select>
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			</div>
		</div>

		</div>
	</div>

</div>
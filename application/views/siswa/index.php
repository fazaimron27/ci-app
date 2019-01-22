<div class="container">

	<?php if( $this->session->flashdata('flash') ) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data Siswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Siswa</h3>
			<ul class="list-group">
				<?php foreach($siswa as $sw) : ?>
					<li class="list-group-item">
						<?= $sw['nama']; ?>
						<a href="<?= base_url(); ?>siswa/hapus/<?= $sw['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>
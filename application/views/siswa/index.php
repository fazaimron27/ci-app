<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Siswa</h3>
			<ul class="list-group">
				<?php foreach($siswa as $sw) : ?>
					<li class="list-group-item"><?= $sw['nama']; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>
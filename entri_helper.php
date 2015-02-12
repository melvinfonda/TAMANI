<?php 
function say_sorry() {
	echo
'<div class="col-lg-8 col-lg-offset-2">
	<p>Entri belum bisa dilakukan karena belum ada instansi atau taman</p>
</div>';
}

function display_form($tamans, $instansis) {
	echo
'<div class="col-lg-8 col-lg-offset-2">
	<form method="post" action="save_aduan.php" onSubmit="return cekkosong()">
		<div class="form-group">
			<label for="Judul">Judul</label>
			<input type="text" class="form-control" name="Judul" id="judul" placeholder="Judul">
		</div>
		<div class="form-group">
			<label for="Taman">Taman</label>
			<select class="form-control" id="Taman" name="id_taman">
';
	foreach ($tamans as $taman) {
	echo 
'			<option value="'.$taman['id'].'">'.$taman['nama'].'</option>
';
	}
	echo 
'			</select>
		</div>
		<div class="form-group">
			<label for="isi">Isi Aduan</label>
			<textarea class="form-control" name="Isi" rows="3" id="isi"></textarea>
		</div>
		<div class="form-group">
			<div class="btn-group">
				<label for="Kategori">Kategori (pilih salah satu) :</label>
				<select class="form-control" id="Kategori" name="id_instansi">
';
	foreach ($instansis as $instansi) {
		echo
'				<option value="'.$instansi['id'].'">'.$instansi['kategori'].'</option>
';
	}
	echo 
'				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>';
}
?>

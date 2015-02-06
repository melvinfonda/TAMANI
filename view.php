<?php
require_once('db_helper.php');

function format_pengaduan($pengaduan, $privilege) {
	$result = 
'<div class="col-sm-12 col-md-12">
	<div class="thumbnail">
		<div class="caption">
		<dl>
		<p> '.format_tanggal($pengaduan['tanggal']).' | '.$pengaduan['nama_pelapor'].' | '.keterangan_status($pengaduan['status']).' </p>
		</dl>
		<h3>'.$pengaduan['judul'].'</h3>
		<h5><b>'.$pengaduan['nama_taman'].'</b></h5>
		<p>'.$pengaduan['isi'].'</p>';
	
	if ($privilege == 20) { // admin tidak terkait
		$result = $result.'
		<form method="post">
			<select name="combo">
				<option value="10" selected>Belum diproses</option>
				<option value="20">Sedang Diproses</option>
				<option value="30">Duplikat</option>
			</select>
			<input type="submit" value="Change"/>
		</form>';
	}
	
	if (!is_null($pengaduan['no_tindak_lanjut']))
		$result = $result.'
		<a href="view_report.php?nomor='.$pengaduan['no_tindak_lanjut'].'">
		<button type="button" class="btn btn-primary">Laporan</button>
		</a>';
	
	$result = $result.'
		</div>
	</div>
</div>';

	return $result;
}

function keterangan_status($sstatus) {
	$belum_diproses =
'belum diproses';
	if ($sstatus === '10')
		return $belum_diproses;
}

function nama_bulan($ibulan) {
	$daftar_nama_bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei',
		'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
	return $daftar_nama_bulan[$ibulan];
}

function format_tanggal($stanggal) {
	$itahun = (int)substr($stanggal, 0, 4);
	$ibulan = (int)substr($stanggal, 4, 2);
	$iangka = (int)substr($stanggal, 6, 2);

	return $iangka.'-'.nama_bulan($ibulan).'-'.$itahun;
}
?>
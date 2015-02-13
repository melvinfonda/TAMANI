<?php
function format_pengaduan($pengaduan, $level) {
	// always display this.
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

	if (!is_null($pengaduan['no_tindak_lanjut']))
		$result = $result.'
		<a href="laporan.php?nomor='.$pengaduan['no_tindak_lanjut'].'">
		<button type="button" class="btn btn-primary">Laporan</button>
		</a>';


	if ($level === 20) { // admin
		if ($pengaduan['status'] == 10) {
			$result = $result.'<form action="ubah_status.php" method="post">';
			$result = $result.'<input type="hidden" name="no_pengaduan" value="'.$pengaduan['no_pengaduan'].'"/>';
			$result = $result.'<select name="status">';
			for ($status = 20; $status <= 30; $status += 10) {
				$result = $result.'<option value="'.$status.'">';
				$result = $result.keterangan_status($status).'</option>';
			}
			$result = $result.'</select>
			<button type="submit" class="btn btn-primary">Ubah</button></form>';
		}

	} else if ($level === 30) { // dinas terkait
		if (is_null($pengaduan['no_tindak_lanjut'])) {
			$result = $result.'<a href="entri_laporan.php?no_pengaduan='.$pengaduan['no_pengaduan'].'">
				<button type="button" class="btn btn-primary">Tambah Laporan</button>
				</a>';
		}
	}
	$result = $result.'</div></div></div>';

	return $result;
}

function keterangan_status($sstatus) {
	$belum_diproses = 'belum diproses';
	$sedang_diproses = 'sedang diproses';
	$sudah_diproses = 'sudah diproses';
	if ($sstatus == 10)
		return $belum_diproses;
	else if ($sstatus == 20)
		return $sedang_diproses;
	else if ($sstatus == 30)
		return "duplikat";
	else if ($sstatus == 40)
		return $sudah_diproses;
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



function format_laporan ($laporan)
{
	$result="<dl>
                <dt>Nomor Laporan</dt>
                <dd>".$laporan['nomor']."</dd>
                <br>
                <dt>No pengaduan</dt>
                <dd>".$laporan['no_pengaduan']."</dd>
                <br>
                <dt>Tanggal</dt>
                <dd>".format_tanggal($laporan['tanggal'])."</dd>
                <br >
                <dt>Isi laporan</dt>
                <dd>". $laporan['isi']."</dd>
                <br>
                <dt>Instansi</dt>
                <dd>".get_instansi($laporan['id_instansi'])['nama']."</dd>
              </dl>";

     return $result;

}
?>

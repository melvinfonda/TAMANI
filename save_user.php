<?php
$error = '';
if (isset($_POST['submit'])) {
	if ($_POST['submit'] === 'simpan') {
		$user_info = array();
		$user_info['username']  = $_POST['Username'];
		$user_info['password']  = $_POST['Password'];
		$user_info['nama']      = $_POST['Nama'];
		$user_info['email']     = $_POST['Email'];
		$user_info['no_ktp']    = $_POST['KTP'];
		$user_info['no_kontak'] = $_POST['Kontak'];
		$error = simpan_masyarakat($user_info);
		
		if ($error === '')
			header('Location: index.php');
	}
}
?>
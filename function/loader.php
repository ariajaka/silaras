<?php 
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];

		if ($mod == 'laporan_awal') {
			include ('view/main-laporan_awal.php');
		}
		if ($mod == 'laporan_awal_rekom') {
			include ('view/main-laporan_awal_rekom.php');
		}
	}
	else
	{
		include ('view/main-content.php');
	}
?>
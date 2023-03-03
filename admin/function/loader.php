<?php 
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];

		if ($mod == 'user') {
			include ('view/main-user.php');
		}
		if ($mod == 'laporan') {
			include ('view/main-laporan.php');
		}
	}
	else
	{
		include ('view/main-content.php');
	}
?>
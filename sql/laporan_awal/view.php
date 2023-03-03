<?php 
	$user_login = $_SESSION['username'];
	$sql = "SELECT * FROM laporan_awal WHERE id_la NOT IN (SELECT id_la FROM detail_rekomendasi_la) AND nama_pelapor='$user_login' ORDER BY id_la DESC";
	$laporan_awal = mysql_query($sql);
?>
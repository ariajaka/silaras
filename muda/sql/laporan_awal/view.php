<?php 
	$sql = "SELECT * FROM laporan_awal WHERE id_la NOT IN (SELECT id_la FROM detail_rekomendasi_la) ORDER BY id_la DESC";
	$laporan_awal = mysql_query($sql);
?>
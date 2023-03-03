<?php 
/*cek data user*/
$user_login = $_SESSION['username'];
$laporan_awal = "SELECT count(*) FROM laporan_awal WHERE nama_pelapor='$user_login'";
$laporan_awal_sql = mysql_query($laporan_awal);
$data_laporan_awal = mysql_fetch_array($laporan_awal_sql);
$jml_laporan_awal = $data_laporan_awal[0];
/*cek data user*/
?>

<?php 
/*cek data user*/
$user_login = $_SESSION['username'];
$laporan_awal_blm_tl = "SELECT count(*) FROM laporan_awal WHERE id_la NOT IN (SELECT id_la FROM detail_rekomendasi_la) AND nama_pelapor='$user_login'";
$laporan_awal_blm_tl_sql = mysql_query($laporan_awal_blm_tl);
$data_laporan_awal_blm_tl = mysql_fetch_array($laporan_awal_blm_tl_sql);
$jml_laporan_awal_blm_tl = $data_laporan_awal_blm_tl[0];
/*cek data user*/
?>

<?php 
/*cek data user*/
$user_login = $_SESSION['username'];
$laporan_awal_sdh_tl = "SELECT count(*) FROM laporan_awal WHERE id_la IN (SELECT id_la FROM detail_rekomendasi_la) AND nama_pelapor='$user_login'";
$laporan_awal_sdh_tl_sql = mysql_query($laporan_awal_sdh_tl);
$data_laporan_awal_sdh_tl = mysql_fetch_array($laporan_awal_sdh_tl_sql);
$jml_laporan_awal_sdh_tl = $data_laporan_awal_sdh_tl[0];
/*cek data user*/
?>


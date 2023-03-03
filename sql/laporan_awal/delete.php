<?php 
include('../../config/config.php');
$id_la = $_GET['id'];

echo $id_sm;

$delete_la = mysql_query("DELETE FROM laporan_awal WHERE id_la = '$id_la'");
$hapus_detail_produk_la = mysql_query("DELETE FROM detail_produk_la WHERE id_la = '$id_la'");
$hapus_detail_rekomendasi_la = mysql_query("DELETE FROM detail_rekomendasi_la WHERE id_la = '$id_la'");
$hapus_detail_pelanggaran_la = mysql_query("DELETE FROM detail_pelanggaran_la WHERE id_la = '$id_la'");

if($delete_la){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses Menghapus Laporan Awal Kasus");
	header('location:../../index.php?mod=laporan_awal&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal Menghapus Laporan Awal Kasus");
	header('location:../../index.php?mod=laporan_awal&s=0&msg='.$msg);
}
?>
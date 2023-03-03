<?php 
if (isset($_GET['id_la'])) {
	$id = $_GET['id_la'];

	/*Select data Surat*/
	$sql1 = "SELECT * FROM laporan_awal WHERE id_la='$id'";
	$query1 = mysql_query($sql1);
	$data1 = mysql_fetch_assoc($query1);

	$id_la = $data1['id_la'];
	$nama_pelapor = $data1['nama_pelapor'];
	$nama_sarana = $data1['nama_sarana'];
	$nama_pemilik_sarana = $data1['nama_pemilik_sarana'];
	$link_akun_medsos = $data1['link_akun_medsos'];
	$jenis_platform = $data1['jenis_platform'];
	$platform = $data1['platform'];
	$alamat_sarana = $data1['alamat_sarana'];
	$nama_produk = $data1['nama_produk'];
	$kandungan = $data1['kandungan'];
	$produsen = $data1['produsen'];
	$golongan = $data1['golongan'];
	$kelas_terapi = $data1['kelas_terapi'];
	$status = $data1['status'];
	$no_hp = $data1['no_hp'];
	$informasi_awal = $data1['informasi_awal'];
	$tgl_lapor = $data1['tgl_lapor'];
		
}
 ?>
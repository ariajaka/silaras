<?php 
include('../../../config/config.php');
	//Untuk mengecek apakah ini proses simpan atau update
	if(isset($_POST['save']))
	{
		// if ($_POST['cmbDasar'] == '' or $_POST['cmbPetugas'] == '' or $_POST['surat_undangan'] =='') {
		// 	$success ="Gagal, Mohon isi Dasar/Undangan dan Petugas";
		// 	$msg = base64_encode($success);
		// 	header('location:../../index.php?mod=surattugas&act=add&s=0&msg='.$msg);			
		// }else{
			//mengmbil variabel yang dikirim oleh formulir
		
		$id = $_POST['id'];
		$nip_perekomendasi = $_POST['nip_perekomendasi'];
		$cmbRekomendasi = $_POST['cmbRekomendasi'];
		
  	
				
			$jlh2 = count($cmbRekomendasi); 
			for($i=0;$i<$jlh2;$i++)		
			{		
				$sql="INSERT INTO detail_rekomendasi_la SET id_la='$id', nip_perekomendasi='$nip_perekomendasi', rekomendasi='$cmbRekomendasi[$i]'";
				$query=mysql_query($sql) or die(mysql_error());
			}                

				$success = "Terima Kasih Atas Laporan Anda, Silahkan catat nomor Pengaduan anda : $id_la" ;
				$msg = base64_encode($success);
				header('location:../../index.php?mod=laporan_awal&act=add&s=1&msg='.$msg);


	}	
?>